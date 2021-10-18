<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d1c0770bd52413713b6ce542771fda1
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\ACF\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\ACF\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WPGraphQL\\ACF\\ACF' => __DIR__ . '/../..' . '/src/class-acf.php',
        'WPGraphQL\\ACF\\ACF_Settings' => __DIR__ . '/../..' . '/src/class-acfsettings.php',
        'WPGraphQL\\ACF\\Config' => __DIR__ . '/../..' . '/src/class-config.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d1c0770bd52413713b6ce542771fda1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d1c0770bd52413713b6ce542771fda1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0d1c0770bd52413713b6ce542771fda1::$classMap;

        }, null, ClassLoader::class);
    }
}
