<?php


namespace App\Models;
use  \RedBeanPHP as rb;

class RoleModel
{

    public function getRoleById($id) {
        return rb\R::findOne('roles', 'id = ? ', [$id]);
    }
}