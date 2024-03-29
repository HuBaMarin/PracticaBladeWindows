<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd751713988987e9331980363e24189ce
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Clases\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Clases\\' => 
        array (
            0 => __DIR__ . '/../..' . '/index.html',
        ),
    );

    public static $classMap = array (
        'Clases\\Clave' => __DIR__ . '/../..' . '/clases/Clave.php',
        'Clases\\Jugada' => __DIR__ . '/../..' . '/clases/Jugada.php',
        'Clases\\Plantilla' => __DIR__ . '/../..' . '/clases/Plantilla.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd751713988987e9331980363e24189ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd751713988987e9331980363e24189ce::$classMap;

        }, null, ClassLoader::class);
    }
}
