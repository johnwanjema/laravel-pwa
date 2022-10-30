<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d43a1557c80efec59d412dc079c154a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wanjema\\WanjemaPwa\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wanjema\\WanjemaPwa\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d43a1557c80efec59d412dc079c154a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d43a1557c80efec59d412dc079c154a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d43a1557c80efec59d412dc079c154a::$classMap;

        }, null, ClassLoader::class);
    }
}