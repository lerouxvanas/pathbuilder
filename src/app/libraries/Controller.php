<?php

class Controller {
    public function model($model){
        require_once __DIR__ . '/../models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []){
        if(file_exists(__DIR__ . '/../views/' . $view . '.php')) { 
            require_once __DIR__ . '/../views/inc/header.php';
            require_once __DIR__ . '/../views/' . $view . '.php';
            require_once __DIR__ . '/../views/inc/offcanvas.php';
            require_once __DIR__ . '/../views/inc/footer.php';
        } else {
            die('View does not exist');
        }
    }
}