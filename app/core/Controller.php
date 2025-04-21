<?php
class Controller {
    protected $view;
    
    public function __construct() {
        $this->view = new View();
    }
    
    protected function model($model) {
        require_once APP . '/models/' . $model . '.php';
        return new $model();
    }
}