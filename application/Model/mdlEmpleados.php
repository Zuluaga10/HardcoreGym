<?php

// Mini:Configuraciones Model: Referencia amodel del core
namespace Mini\Model;

//Import
use Mini\Core\Model;

	//Crear clase con herencia al Model
	class mdlEmpleados extends Model{

		//Propiedades (Igual que en base de datos)
		private $CedulaEmpleado;
		private $Nombre;
		private $Apellido;
		private $Edad;
		private $Celular;

		//funciones magicas para encapsulamiento a todas las propiedades
		public function __SET($attr, $value){ //Establece valor y atributo

			$this->$attr=$value;
		}
		public function __GET($attr){//Obtiene el valor del atributo

		 return $this->$attr;
		}

		//Constructor 
		function __construct(){

			//Manejo de errores
			try {
				//Llama al constructor del padre
				parent::__construct();//Super en otros lenguajes
			} catch (PDOException $e) { //Si la conexion a la base de datos no se establece manda error
				exit ("Error en la conexión.");
			}
		}

		public function RegistrarEmpleado(){

			//Registro: envia
			//Llamado al procedimiento almacenado (?=Parametros)
			$sql="CALL HAR_RegistrarEmpleado(?,?,?,?,?)";
			//Se crea variable y prepara consulta sql
			$declarar=$this->db->prepare($sql);
			//Variable declarar se le establece el metodo con sus parametros(posicion parametro,atributo )
			$declarar->bindParam(1, $this->CedulaEmpleado);
			$declarar->bindParam(2, $this->Nombre);
			$declarar->bindParam(3, $this->Apellido);
			$declarar->bindParam(4, $this->Edad);
			$declarar->bindParam(5, $this->Celular);
			//Ejecuta el query
			$declarar->execute();

		}

		public function ListarEmpleados(){

			//devuelve
			$sql="CALL HAR_ListarEmpleados()";
			$declarar=$this->db->prepare($sql);
			$declarar->execute();
			//retorna todos los valores, para devolver los datos necesita el fetchall() 
			return $declarar->fetchall();

		}

		public function EditarEmpleado(){

			$sql="CALL HAR_EditarEmpleado(?,?,?,?,?)";
			$declarar=$this->db->prepare($sql);
			$declarar->bindParam(1, $this->CedulaEmpleado);
			$declarar->bindParam(2, $this->Nombre);
			$declarar->bindParam(3, $this->Apellido);
			$declarar->bindParam(4, $this->Edad);
			$declarar->bindParam(5, $this->Celular);
			$declarar->execute();
		}
		
		public function ConsultarEmpleado(){
		//LLama al procedimiento y solo pide un parametro que seria la cedula 
		$sql = "CALL HAR_ConsultarEmpleado(?)";
		$stm = $this->db->prepare($sql);
		$stm ->bindParam(1, $this->CedulaEmpleado);
		$stm->execute();
		//Fetch retorna solo un valor, el fetchall varios
		return $stm->fetch();

		}

		// public function ContadorDias(){

		// 	$sql="CALL GYM_ContadorDias()";
		// 	$stm=$this->db->prepare($sql);
		// 	$stm->execute();
		// 	return $stm->fetchall();

		// }

		// public function EditarClienteInactivo(){

		// 	$sql="CALL GYM_EditarClienteInactivo()";
		// 	$stm=$this->db->prepare($sql);
		// 	$stm->execute();

		// }


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
