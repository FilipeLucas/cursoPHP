<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5fff8947c185aa35e5b07445e2794f9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5fff8947c185aa35e5b07445e2794f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5fff8947c185aa35e5b07445e2794f9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita5fff8947c185aa35e5b07445e2794f9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}