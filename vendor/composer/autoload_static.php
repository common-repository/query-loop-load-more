<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c42cf337998a8a0f67b3289fd7b3968
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPcomSpecialProjects\\Qllm\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPcomSpecialProjects\\Qllm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c42cf337998a8a0f67b3289fd7b3968::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c42cf337998a8a0f67b3289fd7b3968::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c42cf337998a8a0f67b3289fd7b3968::$classMap;

        }, null, ClassLoader::class);
    }
}
