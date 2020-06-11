<?php

namespace Mini\Model;

use Mini\Core\Model;

	class mdlPlanes extends Model{

		private $IdTipoGastos;
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


		public function ListarPlanes(){

			$sql="CALL HAR_ListarPlanes()";
			$stm=$this->db->prepare($sql);
			$stm->execute();
			return $stm->fetchall();

		}
		
	}