<?php
    class Login{
        public function __construct(){}
        public function index(){            
            require_once "views/company/header.view.php";
            require_once "views/company/iniciar_sesion.view.php";          
            require_once "views/company/footer.view.php";
        }
    }
?>