<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit263f2ecbefe70b278d781a004345f46d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ayangzy\\Contact\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ayangzy\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit263f2ecbefe70b278d781a004345f46d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit263f2ecbefe70b278d781a004345f46d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit263f2ecbefe70b278d781a004345f46d::$classMap;

        }, null, ClassLoader::class);
    }
}
