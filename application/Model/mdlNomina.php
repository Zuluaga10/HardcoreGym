<?php

namespace Mini\Model;

use Mini\Core\Model;

	class mdlNomina extends Model{

		private $IdNomina;
		private $DiasLaborados;
		private $HorasExtra;
		private $Empleado;
		private $Fecha;
		private $Porcentaje;
		private $TotalExtra;
		private $HorasLaboradas;


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

		public function RegistrarNomina(){

			//Parametros que se mandan desde el modelo a los procedimientos almacenados 
			$sql="CALL HAR_RegistrarNomina(?,?,?,?,?,?,?)";
			$stm=$this->db->prepare($sql);
			$stm->bindParam(1, $this->DiasLaborados);
			$stm->bindParam(2, $this->HorasExtra);
			$stm->bindParam(3, $this->Empleado);
			$stm->bindParam(4, $this->Fecha);
			$stm->bindParam(5, $this->TotalExtra);
			$stm->bindParam(6, $this->Porcentaje);
			$stm->bindParam(7, $this->HorasLaboradas);
			$stm->execute();

		}

		public function ListarNomina(){

			$sql="CALL HAR_ListarNomina()";
			$stm=$this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchall();

		}


		public function ConsultarEmpleadoNomina(){

		$sql = "CALL HAR_ConsultarEmpleadoNomina()";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetchall();

		}

		
	}