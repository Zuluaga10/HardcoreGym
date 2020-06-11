<?php

namespace Mini\Model;

use Mini\Core\Model;

	class mdlGastos extends Model{

		private $IdEgreso;
		private $Fecha;
		private $Precio;
		private $IdTipoEgreso;


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

		public function RegistrarGasto(){

			$sql="CALL HAR_RegistrarGasto(?,?,?)";
			$stm=$this->db->prepare($sql);
			$stm->bindParam(1, $this->Fecha);
			$stm->bindParam(2, $this->Precio);
			$stm->bindParam(3, $this->IdTipoEgreso);
			$stm->execute();

		}


		public function ListarGastos(){

			$sql="CALL HAR_ListarGastos()";
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