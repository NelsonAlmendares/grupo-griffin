<?php
class View {
    public function render($view, $data = []) {
        extract($data);
        
        // Captura el contenido específico
        ob_start();
        include VIEWS . '/' . $view . '.php';
        $content = ob_get_clean();
        
        // Incluye el layout
        include VIEWS . '/layouts/main.php';
    }
    
    protected function getLayout() {
        ob_start();
        include VIEWS . '/layouts/main.php';
        return ob_get_clean();
    }
    
    protected function getViewContent($view, $data) {
        ob_start();
        include VIEWS . '/' . $view . '.php';
        return ob_get_clean();
    }
}