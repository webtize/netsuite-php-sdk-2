<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f101644ec312563edbff06c7ca2985d
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webtize\\NetsuitePhpSdk\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webtize\\NetsuitePhpSdk\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f101644ec312563edbff06c7ca2985d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f101644ec312563edbff06c7ca2985d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f101644ec312563edbff06c7ca2985d::$classMap;

        }, null, ClassLoader::class);
    }
}
