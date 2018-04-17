<?php

  class Conexion extends mysqli{

    public function __construct(){
      //nombre servidor,usuario,contraseña,nombre base de datos
      parent:: __construct('localhost','root','','dsocialbd');
      $this->set_charset('utf8');
      $this->connect_errno ? die('Error en la conexion'.mysqli_connect_errno()) : $msj = 'Conectado';
      //echo $msj;
      unset($msj);
    }
    
    public function cerrarConexion($bd){
        mysqli_close($bd);
    }
    
    public function recorrer($x){
        return mysqli_fetch_array($x);
    }
}

?>
