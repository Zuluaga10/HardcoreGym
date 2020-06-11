<?php 
namespace Mini\Controller;

use Mini\Model\mdlGastos;
use Mini\Model\mdlTipoGastos;

class GastosController
{

	function __construct(){
        $this ->mdlGastos =  new mdlGastos(); 
        $this ->mdlTipoGastos =  new mdlTipoGastos(); 

    }
	public function index()
    {

    	$TipoGasto= $this ->mdlTipoGastos->ListarTipoGastos();
        require APP . 'view/_templates/header.php';
        require APP . 'view/gastos/Gasto.php';
        require APP . 'view/_templates/footer.php';
    }
    public function TablaGastos()
    {

        $datos= $this->mdlGastos->ListarGastos();
        require APP . 'view/_templates/header.php';
        require APP . 'view/gastos/TablaGastos.php';
        require APP . 'view/_templates/footer.php';
    }

    public function RegistrarGasto(){
        sleep(2);

        $fecha = $_POST['fecha'];
        $fecha_conv = strftime('%Y-%m-%dT%H:%M:%S', strtotime($fecha));

        $this->mdlGastos->__SET("Precio", $_POST['cantidad']);
        $this->mdlGastos->__SET("Fecha", $fecha_conv);
        $this->mdlGastos->__SET("IdTipoEgreso", $_POST['tipogastos']);
        $e = $this->mdlGastos->RegistrarGasto();
        header("location:".URL.'gastos');
    }

}