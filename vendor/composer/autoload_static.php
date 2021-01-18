<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a4e69b2ba756e2d1728ecfcf7c2a458
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Cielo' => 
            array (
                0 => __DIR__ . '/..' . '/developercielo/api-3.0-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a4e69b2ba756e2d1728ecfcf7c2a458::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a4e69b2ba756e2d1728ecfcf7c2a458::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7a4e69b2ba756e2d1728ecfcf7c2a458::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7a4e69b2ba756e2d1728ecfcf7c2a458::$classMap;

        }, null, ClassLoader::class);
    }
}
