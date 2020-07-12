<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fb89d6ff02ce9b62926178ea0eaadaa
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YandexCheckout\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YandexCheckout\\' => 
        array (
            0 => __DIR__ . '/..' . '/yandex-money/yandex-checkout-sdk-php/lib',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fb89d6ff02ce9b62926178ea0eaadaa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fb89d6ff02ce9b62926178ea0eaadaa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
