<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc3240f6a2e23352b531b113c80856ad6
{
    public static $files = array (
        '8fb9de23130c648414404644bebb9f78' => __DIR__ . '/../..' . '/lib/SteamCondenser.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SteamCondenser\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SteamCondenser\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/SteamCondenser',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc3240f6a2e23352b531b113c80856ad6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc3240f6a2e23352b531b113c80856ad6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}