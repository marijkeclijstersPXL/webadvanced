<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1adb5e57b691ac10e97c3afc588b3278
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'textnode\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'textnode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/textnode',
        ),
    );

    public static $classMap = array (
        'textnode\\TextNode' => __DIR__ . '/../..' . '/src/textnode/TextNode.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1adb5e57b691ac10e97c3afc588b3278::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1adb5e57b691ac10e97c3afc588b3278::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1adb5e57b691ac10e97c3afc588b3278::$classMap;

        }, null, ClassLoader::class);
    }
}
