<?php

class Publicaciones {

    private $texto;

    public function __construct($texto) {
       //para subir videos en la pagina
        $this->texto =  preg_replace(
                "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
                $texto);
    }



    /**
     * Metodo encargado de subir documentos al servidor
     * en caso de no adjuntar archivo este solo registrara el texto
     * en la base de datos
     */
    public function publicarContenido($publicacion) {
        //valida la opcion del boton
        if (isset($_POST['btnPublicar'])) {
            //instancia la nueva conexion
            $bd = new Conexion();
            //obtengo el nombre y la extension del docuemto
            $doc = $_FILES['doc']['tmp_name'];
            $nombre = $_FILES['doc']['name'];
            if (is_uploaded_file($doc)) {
                $destino = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto/storage/publicaciones/';//--> se guarda el archivo en carpeta espec
                move_uploaded_file($_FILES['doc']['tmp_name'], $destino . $nombre);
                //query que guarda la publicacion solo con texto
                $subir = mysqli_query($bd, "INSERT INTO publicaciones (usuario,fecha,contenido,archivo) VALUES ('" . $_SESSION['id'] . "',NOW(),'$this->texto','$nombre')");
            } else {
                //query que guarda la publicacion,la imagen o el video que sea publicado en la pagina
                $subir = mysqli_query($bd, "INSERT INTO publicaciones (usuario,fecha,contenido,archivo) VALUES ('" . $_SESSION['id'] . "',NOW(),'$this->texto','')");
            }

            if ($subir) {
                echo '<script>window.location="index.php"</script>';
            }
            $bd->cerrarConexion($bd);
        }
    }

    /**
     * Metodo que se encargara de mostrar todas las publicaciones realizadas
     * por la institucion
     */
    public function mostrarPublicaciones() {
        $bd = new Conexion();
        $CantidadMostrar = 5;

        $compag = (int) (!isset($_GET['pag'])) ? 1 : $_GET['pag'];
        $TotalReg = mysqli_query($bd, "SELECT * FROM publicaciones");
        $totalr = mysqli_num_rows($TotalReg);
        $TotalRegistro = ceil($totalr / $CantidadMostrar);
        $IncrimentNum = (($compag + 1) <= $TotalRegistro) ? ($compag + 1) : 0;

        $consultavista = "SELECT * FROM publicaciones ORDER BY id_pub DESC LIMIT "
                . (($compag - 1) * $CantidadMostrar) . " , " . $CantidadMostrar;
        $consulta = mysqli_query($bd, $consultavista);

        while ($lista = mysqli_fetch_array($consulta)) {

            $userid = $lista['usuario'];
            $users = mysqli_query($bd, "SELECT * FROM users WHERE id = '$userid'");
            $use = mysqli_fetch_array($users);

            include 'publicView.php';
        }
        if (!$IncrimentNum <= 0) {
            echo "<a href=\"index.php?pag=" . $IncrimentNum . "\">Siguientes</a>";
        }
        $bd->cerrarConexion($bd);
    }

}

?>
