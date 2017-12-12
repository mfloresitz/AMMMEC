<?php
class Organizaciones
{
	private $pdo;
    
    public $Nombre;
    public $Propietario;
    public $Direccion;
    public $PaginaWeb;
    public $Telefono;
  
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	//Metodo para listar
	public function Listar()
	{
		try
		{
			//$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM organizaciones");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Organizaciones $data)
	{
		try 
		{
		$sql = "INSERT INTO organizaciones (Nombre,Propietario,Direccion,PaginaWeb,Telefono) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                    $data->Propietario, 
                    $data->Direccion, 
                    $data->PaginaWeb,
                    $data->Telefono
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}