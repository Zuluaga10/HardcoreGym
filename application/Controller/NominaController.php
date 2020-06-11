<?php 
namespace Mini\Controller;
use Mini\Model\mdlNomina;
use Mini\Model\mdlEmpleados;

class NominaController
{

	function __construct(){
        $this ->mdlNomina =  new mdlNomina(); 
        $this ->mdlEmpleados =  new mdlEmpleados(); 
    }
	public function index()
    {	
        $Empleado= $this ->mdlEmpleados->ListarEmpleados();
        require APP . 'view/_templates/header.php';
        require APP . 'view/nomina/Nomina.php';
        require APP . 'view/_templates/footer.php';
    }
    public function TablaNomina()
    {
        //Llama funcion del modelo y le agrega el nombre a la variable ($datos)
        $datos= $this->mdlNomina->ConsultarEmpleadoNomina();
        require APP . 'view/_templates/header.php';
        require APP . 'view/nomina/TablaNomina.php';
        require APP . 'view/_templates/footer.php';
    }

    public function RegistrarNomina(){
        sleep(2);

        $fechainicio = $_POST['fecha'];
        $fechainicio_conv = strftime('%Y-%m-%dT%H:%M:%S', strtotime($fechainicio));
        //Captura valor del input
        $porcentaje = $_POST['porcentaje'];
        //Concatena el valor del input con 0.
        $porcentaje_concat = "0.".$porcentaje;
        //Convierte el valor(string) de la variable porcentaje_concat a float
        $porcentaje_conv = floatval($porcentaje_concat);

        $this->mdlNomina->__SET("DiasLaborados", $_POST['dias']);
        $this->mdlNomina->__SET("HorasExtra", $_POST['horas']);
        $this->mdlNomina->__SET("Empleado", $_POST['empleado']);
        $this->mdlNomina->__SET("Fecha", $fechainicio_conv);
        //Se utiliza porcentaje
        $this->mdlNomina->__SET("Porcentaje",$porcentaje_conv);
        $this->mdlNomina->__SET("TotalExtra", $_POST['totalextra']);
        $this->mdlNomina->__SET("HorasLaboradas", $_POST['horaslab']);

        $e = $this->mdlNomina->RegistrarNomina();
        header("location:".URL.'nomina');
    }

    // public function EditarCliente(){
    //     sleep(2);

    //     $fechainicio = $_POST['fechainscripcion'];
    //     $fechainicio_conv = strftime('%Y-%m-%dT%H:%M:%S', strtotime($fechainicio));


    //     $this->mdlNomina->__SET("CedulaCliente", $_POST['cedula']);
    //     $this->mdlNomina->__SET("Nombre", $_POST['nombre']);
    //     $this->mdlNomina->__SET("Apellido", $_POST['apellidos']);
    //     $this->mdlNomina->__SET("Edad", $_POST['edad']);
    //     $this->mdlNomina->__SET("Direccion", $_POST['direccion']);
    //     $this->mdlNomina->__SET("Celular", $_POST['telefono']);
    //     $this->mdlNomina->__SET("Correo", $_POST['correo']);
    //     $this->mdlNomina->__SET("FechaInscripcion",$fechainicio_conv);
    //     $e = $this ->mdlNomina->EditarCliente();
    //     header("location:".URL.'clientes/TablaClientes');

    //     }

        //  public function edit($codi){

        //  $this ->mdlNomina->__SET("CedulaCliente",$codi);
        //  $datos= $this ->mdlNomina->ConsultarCliente();

        // require APP . 'view/_templates/header.php';
        // require APP . 'view/clientes/edit.php';
        // require APP . 'view/_templates/footer.php';

        // }

}