<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7a93c20ccd9af4506a10db233cf8ebd
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7a93c20ccd9af4506a10db233cf8ebd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7a93c20ccd9af4506a10db233cf8ebd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb7a93c20ccd9af4506a10db233cf8ebd::$classMap;

        }, null, ClassLoader::class);
    }
}
