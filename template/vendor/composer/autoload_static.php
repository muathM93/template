<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d22389724aa856cc902196be2dd90e0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ArPHP\\I18N\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ArPHP\\I18N\\' => 
        array (
            0 => __DIR__ . '/..' . '/khaled.alshamaa/ar-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d22389724aa856cc902196be2dd90e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d22389724aa856cc902196be2dd90e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d22389724aa856cc902196be2dd90e0::$classMap;

        }, null, ClassLoader::class);
    }
}
