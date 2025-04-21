<?php
class Router {
    protected $routes = [];
    protected $params = [];
    
    public function __construct() {
        $this->addRoutes();
    }
    
    public function addRoutes() {
        // Aquí puedes definir tus rutas
        $this->routes = [
            '' => ['controller' => 'HomeController', 'action' => 'index'],
            'about' => ['controller' => 'HomeController', 'action' => 'about']
        ];
    }
    
    public function dispatch() {
        $url = $_GET['url'] ?? '';
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                break;
            }
        }
        
        if (empty($this->params)) {
            http_response_code(404);
            echo "Página no encontrada";
            exit;
        }
        
        $controller = $this->params['controller'];
        $action = $this->params['action'];
        
        if (class_exists($controller)) {
            $controllerObject = new $controller();
            
            if (method_exists($controllerObject, $action)) {
                $controllerObject->$action();
            } else {
                http_response_code(404);
                echo "Método no encontrado";
                exit;
            }
        } else {
            http_response_code(404);
            echo "Controlador no encontrado";
            exit;
        }
    }
}