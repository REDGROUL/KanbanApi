<?php
namespace App\Models;
use  \RedBeanPHP as rb;

class TasksModel {

    private $database;
//    public function __construct()
//    {
//        rb\R::setup('mysql:host=localhost;dbname=KittyFrame', 'root', '');
//    }

    public function getAllBoard() {

        return rb\R::findAll('kanban');
    }

    public function getAllTasks() {
        return  rb\R::findAll('tasks');
    }

    public function getAllTasksByDepartment($dep_id) {
        return  rb\R::findAll('tasks', 'dep_id = ?', [$dep_id]);
    }

    public function getAllTasksByDepartmentAndUseId($dep_id, $user_id) {
        return  rb\R::findAll('tasks', 'dep_id = ? OR worker_id = ? OR owner_id = ?', [$dep_id, $user_id, $user_id]);
    }




    public function getTaskById($id) {
        return  rb\R::load('tasks', $id);
    }

    public function getTaskByUserId($id) {


        return rb\R::find('tasks', 'worker_id = ? OR owner_id = ?', [$id, $id]);
    }

    public function delTaskById($id) {
        $record = rb\R::load('tasks', $id); // Загрузка записи по id из таблицы
        rb\R::trash($record);



        echo json_encode([
            "status"=>"ok",
        ]);
    }

    public function updateTask($data) {
        $currentTask = rb\R::load('tasks', $data['task_id']);

        $worker_id = explode("_",$data['worker']);
        $currentTask->name = $data['name'];
        $currentTask->description = $data['description'];
        $currentTask->date = $data['date'];
        $currentTask->dep_id = $data['dep_id'];
        $currentTask->worker_id = end($worker_id);
        $currentTask->status = $data['status'];

        try {

            rb\R::store($currentTask);
            echo json_encode(["status"=>"ok"]);
        } catch (\Exception $e) {
            echo json_encode(["status"=>"bad"]);

        }


    }




}