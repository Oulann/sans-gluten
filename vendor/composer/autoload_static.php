<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite82c9d42fedb577b914de8a6142818c3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'My\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'My\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite82c9d42fedb577b914de8a6142818c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite82c9d42fedb577b914de8a6142818c3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
