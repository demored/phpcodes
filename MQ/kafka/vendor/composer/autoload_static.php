<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07e45f3c025ec37d9911edf1127b23d2
{
    public static $files = array (
        'e8aa6e4b5a1db2f56ae794f1505391a8' => __DIR__ . '/..' . '/amphp/amp/lib/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'K' => 
        array (
            'Kafka\\' => 
            array (
                0 => __DIR__ . '/..' . '/nmred/kafka-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07e45f3c025ec37d9911edf1127b23d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07e45f3c025ec37d9911edf1127b23d2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit07e45f3c025ec37d9911edf1127b23d2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
