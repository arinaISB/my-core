<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc553732a746f93fc4c4de8f22b977393
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

        spl_autoload_register(array('ComposerAutoloaderInitc553732a746f93fc4c4de8f22b977393', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc553732a746f93fc4c4de8f22b977393', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc553732a746f93fc4c4de8f22b977393::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}