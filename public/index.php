<?php
// Configuración básica
define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/app');
define('PUBLIC', ROOT . '/public');
define('CONFIG', ROOT . '/config');
define('STORAGE', ROOT . '/storage');
define('VIEWS', APP . '/views');

// Cargar autoloader
require_once APP . '/core/Autoloader.php';

// Registrar autoloader
spl_autoload_register(['Autoloader', 'load']);

// Cargar configuración
require_once CONFIG . '/config.php';

// Iniciar la aplicación
$router = new Router();
$router->dispatch();