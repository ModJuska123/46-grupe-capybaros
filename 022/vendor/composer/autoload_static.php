<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64b9f6249b0eae993b472e1eefe8f6fd
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Visai\\Kitas\\Dalykas\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Visai\\Kitas\\Dalykas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/d2',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64b9f6249b0eae993b472e1eefe8f6fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64b9f6249b0eae993b472e1eefe8f6fd::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit64b9f6249b0eae993b472e1eefe8f6fd::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit64b9f6249b0eae993b472e1eefe8f6fd::$classMap;

        }, null, ClassLoader::class);
    }
}
