<?php 

class MainController{
    // gère les requêtes get / 
    public function homepage() {
        require_once __DIR__.'/../views/index.tpl.php';
    }
}