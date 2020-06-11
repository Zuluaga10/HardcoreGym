<?php 
namespace Mini\Controller;
use Mini\Model\mdlIngresos;
use Mini\Model\mdlTipoIngresos;

class IngresosController
{

	function __construct(){
        $this ->mdlIngresos =  new mdlIngresos(); 
        $this ->mdlTipoIngresos =  new mdlTipoIngresos(); 

    }
	public function index()
    {

    	$TipoIngreso= $this ->mdlTipoIngresos->ListarTipoIngresos();
        require APP . 'view/_templates/header.php';
        require APP . 'view/ingresos/Ingreso.php';
        require APP . 'view/_templates/footer.php';
    }
    public function TablaIngresos()
    {

        $datos= $this->mdlIngresos->ListarIngresos();
        require APP . 'view/_templates/header.php';
        require APP . 'view/ingresos/TablaIngresos.php';
        require APP . 'view/_templates/footer.php';
    }

    public function RegistrarIngreso(){
        sleep(2);

        $fecha = $_POST['fecha'];
        $fecha_conv = strftime('%Y-%m-%dT%H:%M:%S', strtotime($fecha));


        $this->mdlIngresos->__SET("Cantidad", $_POST['cantidad']);
        $this->mdlIngresos->__SET("Fecha", $fecha_conv);
        $this->mdlIngresos->__SET("TipoIngresos", $_POST['tipoingreso']);
        $e = $this->mdlIngresos->RegistrarIngreso();
        header("location:".URL.'ingresos');
    }


    //     public function cambiarEstado(){
    //     $this ->mdlIngresos->__SET("IdServicio",$_POST["codigo"]);
    //     $this ->mdlIngresos->__SET("Estado",$_POST["estado"]);
    //     $datos= $this ->mdlIngresos->cambiarEstado();
    //     if ($datos) {
    //        echo json_encode(["b"=>1]);
    //     }else{
    //         echo json_encode(["b"=>0]);
    //     }
    //     // header("location:".URL."UnidadMedida/unidadMedida");
    // }
}