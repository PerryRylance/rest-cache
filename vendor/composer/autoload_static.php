<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45deff180041b2e0be98e8fd92d7c68d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PerryRylance\\WordPress\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PerryRylance\\WordPress\\' => 
        array (
            0 => __DIR__ . '/..' . '/perry-rylance/wordpress-plugin/src',
        ),
    );

    public static $classMap = array (
        'PerryRylance\\WordPress\\Plugin' => __DIR__ . '/..' . '/perry-rylance/wordpress-plugin/src/class.plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45deff180041b2e0be98e8fd92d7c68d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45deff180041b2e0be98e8fd92d7c68d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45deff180041b2e0be98e8fd92d7c68d::$classMap;

        }, null, ClassLoader::class);
    }
}
