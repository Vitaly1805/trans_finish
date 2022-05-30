<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b49631b68ca3a5966d81c899cab5235
{
    public static $files = array (
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'widgets\\' => 8,
        ),
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'm' => 
        array (
            'models\\' => 7,
        ),
        'c' => 
        array (
            'core\\libs\\' => 10,
            'core\\base\\' => 10,
            'core\\' => 5,
            'controllers\\' => 12,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'Mpdf\\' => 5,
        ),
        'H' => 
        array (
            'Http\\Message\\' => 13,
        ),
        'D' => 
        array (
            'DeepCopy\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'widgets\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/widgets',
        ),
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'core\\libs\\' => 
        array (
            0 => __DIR__ . '/..' . '/core/libs',
        ),
        'core\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/core/base',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/..' . '/core',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b49631b68ca3a5966d81c899cab5235::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b49631b68ca3a5966d81c899cab5235::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4b49631b68ca3a5966d81c899cab5235::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4b49631b68ca3a5966d81c899cab5235::$classMap;

        }, null, ClassLoader::class);
    }
}
