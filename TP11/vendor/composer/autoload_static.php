<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0ea99a3309d060a6dd5916ba4141b60
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'iutnc\\deefy\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'iutnc\\deefy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0ea99a3309d060a6dd5916ba4141b60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0ea99a3309d060a6dd5916ba4141b60::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0ea99a3309d060a6dd5916ba4141b60::$classMap;

        }, null, ClassLoader::class);
    }
}
