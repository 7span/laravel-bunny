<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite94f34096f87fe0f978f81e1b9e0c8a6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sevenspan\\Bunny\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sevenspan\\Bunny\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite94f34096f87fe0f978f81e1b9e0c8a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite94f34096f87fe0f978f81e1b9e0c8a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite94f34096f87fe0f978f81e1b9e0c8a6::$classMap;

        }, null, ClassLoader::class);
    }
}
