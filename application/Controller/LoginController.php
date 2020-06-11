<?php  

namespace Mini\Controller;
use Mini\Model\mdlLogin;

class LoginController 
{
	
	

    private $mdlLogin = null;

    function __construct(){

       $this->mdlLogin = new mdlLogin();

    }

    public function index()
    {

        require APP . 'view/login/index.php';


    }


    public function logueo()
    {
      if (isset($_POST["login"])) {

         //header("location: ".URL."Home/index");

          $this->mdlLogin->__SET("Correo",$_POST["correo"]);
          $resultado = $this->mdlLogin->logueo();

// password_encrypt
          if ($resultado != false) {
            $contrasenaE = md5($_POST['clave']);
            if ($resultado["Contrasena"] == $contrasenaE ) {

                session_start();
                header("location: ".URL."Clientes");
               
            }else {


              header('location: ' . URL . 'Login');

            }

          }else {

          header('location: ' . URL . 'Login');

          }
      }

    }
    public function salir()
    {


        //session_start();
        session_start();
        session_destroy();
        unset($_SESSION["Idusuario"]);

        unset($_SESSION["Correo"]);


        header('location: ' . URL . 'Login');


    }

}