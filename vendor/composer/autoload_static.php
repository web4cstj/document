<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1471debf26f31243b0069b87d68939ee
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/portable-ascii/src/voku',
            1 => __DIR__ . '/..' . '/voku/stop-words/src/voku',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'URLify' => 
            array (
                0 => __DIR__ . '/..' . '/jbroadway/urlify',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1471debf26f31243b0069b87d68939ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1471debf26f31243b0069b87d68939ee::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1471debf26f31243b0069b87d68939ee::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}