<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc95b7276347ad6f47d447f87f19449aa
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

        spl_autoload_register(array('ComposerAutoloaderInitc95b7276347ad6f47d447f87f19449aa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc95b7276347ad6f47d447f87f19449aa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc95b7276347ad6f47d447f87f19449aa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
