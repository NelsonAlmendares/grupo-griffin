<?php
class Autoloader {
    public static function load($className) {
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        
        // Buscar en diferentes directorios
        $paths = [
            APP . '/core/',
            APP . '/controllers/',
            APP . '/models/',
            CONFIG . '/'
        ];
        
        foreach ($paths as $path) {
            if (file_exists($path . $file)) {
                require_once $path . $file;
                return;
            }
        }
    }
}