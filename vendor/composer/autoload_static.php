<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb13e4ffc2921cd07eb28f8221ee542cb
{
    public static $files = array (
        '43d2274d4524a1a9940a593ab5778108' => __DIR__ . '/../..' . '/source/Helpers/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb13e4ffc2921cd07eb28f8221ee542cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb13e4ffc2921cd07eb28f8221ee542cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb13e4ffc2921cd07eb28f8221ee542cb::$classMap;

        }, null, ClassLoader::class);
    }
}
