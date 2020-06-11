<?php 
namespace Mini\Controller;
use Mini\Model\mdlClientes;
use Mini\Model\mdlPlanes;

class ClientesController
{

	function __construct(){
        $this ->mdlClientes =  new mdlClientes(); 
        $this ->mdlPlanes =  new mdlPlanes(); 


    }
	public function index()
    {

    	$Planes= $this ->mdlPlanes->ListarPlanes();
        require APP . 'view/_templates/header.php';
        require APP . 'view/clientes/Cliente.php';
        require APP . 'view/_templates/footer.php';
    }
    public function TablaClientes()
    {

        $datos= $this->mdlClientes->ListarClientes();
        require APP . 'view/_templates/header.php';
        require APP . 'view/clientes/TablaClientes.php';
        require APP . 'view/_templates/footer.php';
    }

    public function RegistrarCliente(){
        sleep(2);

        $fechainicio = $_POST['fechainscripcion'];
        $fechainicio_conv = strftime('%Y-%m-%dT%H:%M:%S', strtotime($fechainicio));


        $this->mdlClientes->__SET("CedulaCliente", $_POST['cedula']);
        $this->mdlClientes->__SET("Nombre", $_POST['nombre']);
        $this->mdlClientes->__SET("Apellido", $_POST['apellidos']);
        $this->mdlClientes->__SET("Edad", $_POST['edad']);
        $this->mdlClientes->__SET("Direccion", $_POST['direccion']);
        $this->mdlClientes->__SET("Celular", $_POST['telefono']);
        $this->mdlClientes->__SET("FechaInscripcion",$fechainicio_conv);
        $this->mdlClientes->__SET("Plan",$_POST['plan']);
        $e = $this->mdlClientes->RegistrarCliente();
        header("location:".URL.'clientes');
    }

    public function EditarCliente(){
        sleep(2);

        $fechainicio = $_POST['fechainscripcion'];
        $fechainicio_conv = strftime('%Y-%m-%dT%H:%M:%S', strtotime($fechainicio));

        $this->mdlClientes->__SET("CedulaCliente", $_POST['cedula']);
        $this->mdlClientes->__SET("Nombre", $_POST['nombre']);
        $this->mdlClientes->__SET("Apellido", $_POST['apellidos']);
        $this->mdlClientes->__SET("Edad", $_POST['edad']);
        $this->mdlClientes->__SET("Direccion", $_POST['direccion']);
        $this->mdlClientes->__SET("Celular", $_POST['telefono']);
        $this->mdlClientes->__SET("Correo", $_POST['correo']);
        $this->mdlClientes->__SET("FechaInscripcion",$fechainicio_conv);
        $this->mdlClientes->__SET("Plan", $_POST['plan']);

        $e = $this ->mdlClientes->EditarCliente();
        header("location:".URL.'clientes/TablaClientes');

        }

         public function edit($codi){

         $this ->mdlClientes->__SET("CedulaCliente",$codi);
         $datos= $this ->mdlClientes->ConsultarCliente();
         $Planes= $this ->mdlPlanes->ListarPlanes();

        require APP . 'view/_templates/header.php';
        require APP . 'view/clientes/edit.php';
        require APP . 'view/_templates/footer.php';

        }

}