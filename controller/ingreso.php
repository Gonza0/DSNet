<?php

class Acceso {
    //Atrubutos de la clase
    protected $user;//-->usuario
    protected $pass;//-->contraseña
    
    public function __construct($user, $pass) {
        $this->user = $user;
        $this->pass = $pass;
    }
    
    /**
     * Metodo que valida el login del usuario y asigna las variables de 
     * session.
     */
    public function login() {
        //verifica la accion ejecutada por el boton 
        if (isset($_POST['btnIngresar'])) {
            //establece conexion
            $bd = new Conexion();
            //query de consulta de credenciales
            $sql = mysqli_query($bd, "SELECT * FROM users WHERE "
                    . "usuario = '$this->user' AND passwd = '$this->pass'");
            //recorre los datos de la tabla
            $datos = $bd->recorrer($sql);
            while (next($datos)) {
                //rescata los valores y los asigna a variables $_SESSION
                if ($this->user == $datos['usuario'] && $this->pass == $datos['passwd']) {
                    $_SESSION['usuario'] = $datos['usuario'];
                    $_SESSION['nombre'] = $datos['nombre'];
                    $_SESSION['id'] = $datos['id'];
                    $_SESSION['avatar'] = $datos['avatar'];
                    $_SESSION['apellido'] = $datos['apellido'];
                    $_SESSION['email'] = $datos['email'];
                    header('location: index.php');
                } else {
                    echo '<script>alert("Los datos ingresados no son correctos");</script>';
                }
            }
        }
        //Cierra conexion con base de datos
        $bd->cerrarConexion($bd);
    }

}

?>