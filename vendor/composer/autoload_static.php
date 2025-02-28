<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd359baac21f520c04e608f4eed750560
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'J' => 
        array (
            'Julio\\UptechHtml\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Julio\\UptechHtml\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd359baac21f520c04e608f4eed750560::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd359baac21f520c04e608f4eed750560::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd359baac21f520c04e608f4eed750560::$classMap;

        }, null, ClassLoader::class);
    }
}
