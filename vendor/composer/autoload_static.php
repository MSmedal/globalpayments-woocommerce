<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb425500c509d3069633e7cb253b0f3e
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GlobalPayments\\WooCommercePaymentGatewayProvider\\' => 49,
            'GlobalPayments\\Api\\' => 19,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GlobalPayments\\WooCommercePaymentGatewayProvider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'GlobalPayments\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/globalpayments/php-sdk/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb425500c509d3069633e7cb253b0f3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb425500c509d3069633e7cb253b0f3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
