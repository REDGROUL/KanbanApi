<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcddcb88a801c2a250cdb43bef90cc5ba
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Steampixel' => 
            array (
                0 => __DIR__ . '/..' . '/steampixel/simple-php-router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcddcb88a801c2a250cdb43bef90cc5ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcddcb88a801c2a250cdb43bef90cc5ba::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcddcb88a801c2a250cdb43bef90cc5ba::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcddcb88a801c2a250cdb43bef90cc5ba::$classMap;

        }, null, ClassLoader::class);
    }
}