<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita49ab5ae78532ecee49f547d788dc01f
{
    public static $files = array (
        '2371fe58591751a9b725c6706865644e' => __DIR__ . '/..' . '/lichtner/fluentpdo/FluentPDO/FluentPDO.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpmysqlmigration\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpmysqlmigration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Phpmysqlmigration',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita49ab5ae78532ecee49f547d788dc01f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita49ab5ae78532ecee49f547d788dc01f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
