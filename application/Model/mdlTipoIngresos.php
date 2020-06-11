<?php

namespace Mini\Model;

use Mini\Core\Model;

	class mdlTipoIngresos extends Model{

		private $IdTipoIngresos;
		private $Nombre;


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


		public function ListarTipoIngresos(){

			$sql="CALL HAR_ListarTipoIngresos()";
			$stm=$this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchall();

		}


	// 	public function cambiarEstado(){
	// 	$sql = "CALL CM_CambiarEstadoServicio(?,?)";
	// 	$stm = $this->db->prepare($sql);
	// 	$stm->bindParam(1, $this->IdServicio);
	// 	$stm->bindParam(2, $this->Estado);
	// 	$stm->execute();
	// }

	// public function listarServicioActivo(){

	// 		$sql ="CALL CM_ListarServicioActivo()";
	// 		$stm = $this->db->prepare($sql);
	// 		$stm->execute();
	// 		return $stm->fetchall();


	// 	}
		
	}