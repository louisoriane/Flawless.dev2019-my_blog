<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d428a3811f2eb17b4f2f969bbf53ea7
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d428a3811f2eb17b4f2f969bbf53ea7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d428a3811f2eb17b4f2f969bbf53ea7::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit0d428a3811f2eb17b4f2f969bbf53ea7::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0d428a3811f2eb17b4f2f969bbf53ea7::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
