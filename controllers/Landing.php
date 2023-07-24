<?php
    class Landing{        
        public function __construct(){}
        public function index(){
            require_once "views/company/header.view.php";
            require_once "views/company/index.view.php";
            require_once "views/company/footer.view.php";
        }

        public function detalles_producto(){
            // require_once "views/company/header.view.php";
            require_once "views/company/detalles_producto.view.php";
            require_once "views/company/footer.view.php";
        }

        public function catalogo(){
            // require_once "views/company/header.view.php";
            require_once "views/company/catalogo.view.php";
            // require_once "views/company/footer.view.php";
        }

        public function equipos(){
            require_once "views/company/header.view.php";
            require_once "views/company/equipos.view.php";
            require_once "views/company/footer.view.php";
        }

        public function ayuda(){
            require_once "views/company/header.view.php";
            require_once "views/company/ayuda.view.php";
            require_once "views/company/footer.view.php";
        }

        public function informacion(){
            require_once "views/company/header.view.php";
            require_once "views/company/informacion.view.php";
            require_once "views/company/footer.view.php";
        }




    }
?>