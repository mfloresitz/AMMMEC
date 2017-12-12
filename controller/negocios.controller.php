<?php 

	class NegociosController{

		public function Index(){
        $page="view/negocios/negocios.php";
        $contenedor="view/negocios/embudo.php";
        require_once 'view/index.php';
    	}

    	public function lista(){
    	$page="view/negocios/negocios.php";
        $contenedor="view/negocios/lista.php";
        require_once 'view/index.php';

    	}
    	public function timeline(){
    	$page="view/negocios/negocios.php";
        $contenedor="view/negocios/timeline.php";
        require_once 'view/index.php';
    	}

	}



 ?>