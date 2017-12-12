<?php 
require_once 'model/organizaciones.php';

	class OrganizacionesController{

		private $model;
    
	    public function __CONSTRUCT(){
	        $this->model = new Organizaciones();
	    }

		public function Index(){
        $page="view/organizaciones/organizaciones.php";
        $contenedor="view/organizaciones/contenedor.php";
        require_once 'view/index.php';
    	}

    	public function Guardar(){
        $alm = new Organizaciones();
        
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Propietario = $_REQUEST['Propietario'];
        $alm->Direccion = $_REQUEST['Direccion'];
        $alm->PaginaWeb = $_REQUEST['PaginaWeb'];
        $alm->Telefono = $_REQUEST['Telefono'];

           
        $this->model->Registrar($alm);

        //header("Location: /?c=organizaciones");
        echo '<script> window.location = "?c=organizaciones"; </script>';
}
        
          
    	

	}



 ?>