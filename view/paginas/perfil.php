<!DOCTYPE html>
<?php
//inicia sesion en la pagina y verifica si esta esta cargada con otro usuario
session_start();
include("../../sql/config.php");
ini_set('error_reporting', 0);
//realiza la validacion de sesion
if (!isset($_SESSION['nombre'])) {
    //redirecciona si no cumple la condicion
    header('Location: login.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=&"viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mi Perfil</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../theme/css/sb-admin.css" rel="stylesheet">
    </head>
    <body style="background-color: #0f0f0f;">
        <?php require './NavBar.php' ?>
        <div class="contenido"  style="background-color: white; height:650px;">
            <!--            <div class="fb-profile">
                                    <img src="../img/logocolegio.png" class="fb-image-lg">
                            <img src="../img/17004.png" class="fb-image-profile thumbnail" style="width: 90px;">
                        </div>-->
            <div class="container">    
                <div class="jumbotron" style="border-top:4px solid #8d0000; background-color: #252525">
                    <div class="row"> 
                        <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                            <img src="../img/user2-edit-icon.png" width="130" height="130" style="position:relative; left: 30%;">
                        </div>

                        <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" > 
                            <div class="container" style="color:#ffffff;" >
                                <h2><?php echo ucwords($_SESSION['nombre']) . " " . ucwords($_SESSION['apellido']); ?></h2>
                            </div>
                            <hr>

                            <ul class="container details" style="color:#f0f0f0; list-style-type:none;">
                                <li>
                                    <p>
                                        <i class="fa fa-user"></i>
                                        <?php echo ucwords($_SESSION['usuario']); ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fa fa-envelope"></i>
                                        <?php echo ucwords($_SESSION['email']); ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Cambiar Contraseña
                </button>     
            </div>
        </div>
        <!-- Modal -->
        <form method="POST">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Cambia tu contraseña</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <br>
                            <input class="form-control" type="password" placeholder="Clave Nueva" name="txtClaveNueva"required>
                            <br>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancelar">
                            <input type="submit" id='alerta' class="btn btn-success" value="Cambiar" name="btnCambiarClave">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        //Modal(pop up) para realizar el cambio de contraseña para el usuario en su perfil
        if (isset($_POST['btnCambiarClave'])) {
            //instancia la conexion
            $bd = new Conexion();
            //quey de actualizacion de datos
            $query = "UPDATE users SET passwd = '" . $_POST['txtClaveNueva'] . "' WHERE id = '" . $_SESSION['id'] . "'";
            //ejecuta la query para obtener resultados y mostrar el modal
            if (mysqli_query($bd, $query)) {
                ?>
                <script>
                    $('#alerta').click(setTimeout(function () {
                        swal({
                            title: "Listo!",
                            text: "Contraseña cambiada",
                            icon: "success",
                            button: "OK"
                        });
                    }), 1);

                </script>
                <?php
            }
            //Cierra la conexion de la base de datos
            $bd->cerrarConexion($bd);
        }
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
    <style>
        .fb-profile img.fb-image-lg{
            z-index: 0;
            width: 100%;  
            margin-bottom: 10px;
        }

        .fb-image-profile
        {
            margin: -90px 10px 20px 80px;
            z-index: 9;
            width: 13%; 
        }
        @media (max-width:768px){
            .fb-image-profile
            {
                margin: -45px 10px 0px 25px;
                z-index: 9;
                width: 20%; 
            }

            .fb-profile-text>h1{
                font-weight: 700;
                font-size:16px;
            }
        }
        .threed:hover
        {
            box-shadow:
                2px 2px #53a7ea,
                3px 3px #53a7ea,
                4px 4px #53a7ea;
            -webkit-transform: translateX(-4px);
            transform: translateX(-3px);
        }
    </style>
</html>
