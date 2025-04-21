<?php
class HomeController extends Controller {
    public function index() {
        $data = [
            'welcome' => 'Bienvenido a nuestro sitio web',
            'title' => 'Página de Inicio'
        ];
        $this->view->render('nav', $data);
    }
    
    public function about() {
        $data = [
            'title' => 'Acerca de Nosotros',
            'content' => 'Información sobre nuestra empresa'
        ];
        $this->view->render('about', $data);
    }
}