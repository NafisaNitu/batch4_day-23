<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dedc5ac5c54e11592a3ea5409458f63
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9dedc5ac5c54e11592a3ea5409458f63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9dedc5ac5c54e11592a3ea5409458f63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9dedc5ac5c54e11592a3ea5409458f63::$classMap;

        }, null, ClassLoader::class);
    }
}
