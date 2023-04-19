<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15df6eace4bc1709ed2e5333144b28c7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15df6eace4bc1709ed2e5333144b28c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15df6eace4bc1709ed2e5333144b28c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15df6eace4bc1709ed2e5333144b28c7::$classMap;

        }, null, ClassLoader::class);
    }
}