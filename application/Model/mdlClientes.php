<?php

namespace Mini\Model;

use Mini\Core\Model;

	class mdlClientes extends Model{

		private $CedulaCliente;
		private $Nombre;
		private $Apellido;
		private $Edad;
		private $Direccion;
		private $Celular;
		private $FechaInscripcion;
		private $Plan;

		public function __SET($attr, $value){

			$this->$attr=$value;
		}
		public function __GET($attr){

		 return $this->$attr;
		}

		function __construct(){

			try {
				
				parent::__construct();
			} catch (PDOException $e) {
				exit ("Error en la conexión.");
			}
		}

		public function RegistrarCliente(){

			$sql="CALL HAR_RegistrarCliente(?,?,?,?,?,?,?,?)";
			$stm=$this->db->prepare($sql);
			$stm->bindParam(1, $this->CedulaCliente);
			$stm->bindParam(2, $this->Nombre);
			$stm->bindParam(3, $this->Apellido);
			$stm->bindParam(4, $this->Edad);
			$stm->bindParam(5, $this->Direccion);
			$stm->bindParam(6, $this->Celular);
			$stm->bindParam(7, $this->FechaInscripcion);
			$stm->bindParam(8, $this->Plan);
			$stm->execute();

		}

		public function ListarClientes(){

			$sql="CALL HAR_ListarClientes()";
			$stm=$this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchall();

		}

		public function EditarCliente(){

			$sql="CALL HAR_EditarCliente(?,?,?,?,?,?,?,?)";
			$stm=$this->db->prepare($sql);
			$stm->bindParam(1, $this->CedulaCliente);
			$stm->bindParam(2, $this->Nombre);
			$stm->bindParam(3, $this->Apellido);
			$stm->bindParam(4, $this->Edad);
			$stm->bindParam(5, $this->Direccion);
			$stm->bindParam(6, $this->Celular);
			$stm->bindParam(7, $this->FechaInscripcion);
			$stm->bindParam(8, $this->Plan);

			$stm->execute();
		}
		
		public function ConsultarCliente(){

		$sql = "CALL HAR_ConsultarCliente(?)";
		$stm = $this->db->prepare($sql);
		$stm ->bindParam(1, $this->CedulaCliente);
		$stm->execute();
		return $stm->fetch();

		}

		
	}