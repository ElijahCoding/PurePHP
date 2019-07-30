<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9fb908f6af81fa103565c51f746ae25
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'ishop\\App' => __DIR__ . '/..' . '/ishop/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9fb908f6af81fa103565c51f746ae25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9fb908f6af81fa103565c51f746ae25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd9fb908f6af81fa103565c51f746ae25::$classMap;

        }, null, ClassLoader::class);
    }
}
