<?php  

namespace Mini\Model;

use Mini\Core\Model;


class mdlLogin extends Model
{
	
private $Correo;



   // private $db;

    public function __SET($attr,$val)
    {
        $this->$attr = $val;
    }

    public function __GET($attr)
    {
        return $this->$attr;
    }

    function __construct()
	{
		try {
			parent::__construct();
		} catch (PDOException $e) {
			exit("error en la conexion.");
		}
		
	}




 public function logueo(){
           // $sql = "SELECT Codigo, Correo, Contraseña, Rol_Codigo FROM usuario WHERE Correo = ? ";
          $sql="CALL HAR_ConsultarUsuario(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1,$this->Correo);
           $stm->execute();
           return $stm->fetch();
         }

}