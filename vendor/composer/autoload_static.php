<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita49ab5ae78532ecee49f547d788dc01f
{
    public static $files = array (
        '2371fe58591751a9b725c6706865644e' => __DIR__ . '/..' . '/lichtner/fluentpdo/FluentPDO/FluentPDO.php',
    );

    public static $prefixesPsr0 = array (
        'p' => 
        array (
            'phpmysqlmigration' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita49ab5ae78532ecee49f547d788dc01f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
