<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit771951b13b5594e54e2938e8e0b515f8
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'workers\\' => 8,
        ),
        't' => 
        array (
            'tools\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'workers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/workers',
        ),
        'tools\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/tools',
        ),
    );

    public static $classMap = array (
        'tools\\Broom' => __DIR__ . '/../..' . '/src/tools/Broom.php',
        'tools\\Tool' => __DIR__ . '/../..' . '/src/tools/Tool.php',
        'workers\\HandyMan' => __DIR__ . '/../..' . '/src/workers/HandyMan.php',
        'workers\\Worker' => __DIR__ . '/../..' . '/src/workers/Worker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit771951b13b5594e54e2938e8e0b515f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit771951b13b5594e54e2938e8e0b515f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit771951b13b5594e54e2938e8e0b515f8::$classMap;

        }, null, ClassLoader::class);
    }
}
