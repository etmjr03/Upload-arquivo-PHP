<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita1d6342e3af5b7570d5167d2102d534b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInita1d6342e3af5b7570d5167d2102d534b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita1d6342e3af5b7570d5167d2102d534b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita1d6342e3af5b7570d5167d2102d534b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
