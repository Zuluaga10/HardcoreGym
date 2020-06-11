<?php

namespace Mini\Model;

use Mini\Core\Model;

	class mdlIngresos extends Model{

		private $IdIngreso;
		private $Fecha;
		private $Cantidad;
		private $TipoIngresos;


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

		public function RegistrarIngreso(){

			$sql="CALL HAR_RegistrarIngreso(?,?,?)";
			$stm=$this->db->prepare($sql);
			$stm->bindParam(1, $this->Fecha);
			$stm->bindParam(2, $this->Cantidad);
			$stm->bindParam(3, $this->TipoIngresos);
			$stm->execute();

		}

		public function ListarIngresos(){

			$sql="CALL HAR_ListarIngresos()";
			$stm=$this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchall();

		}
		
	}