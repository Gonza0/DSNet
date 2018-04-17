<!DOCTYPE html>
<?php
//Inicia sesion de usuario y verifica si esta ya se ecuentra 
//activa
session_start();
include("../../sql/config.php");
ini_set('error_reporting', 0);
if (!isset($_SESSION['nombre'])) {
    header('Location: login.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../theme/css/menu.css" rel="stylesheet" type="text/css">
        <link href="../theme/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="../theme/css/efectos.css">
        <link rel="stylesheet" href="../theme/css/footer.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=&"viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body style="background-color: #171a21;"> 
        <?php require './NavBar.php' ?>
        <div class="contenido" style="background-color: white;">
            <br>
            <ol class="breadcrumb" style="background: rgba(240, 240, 240, 1);">
                <li class="breadcrumb-item" style="color: #000">
                    <a>Hola, en que te puedo ayudar?</a>
                </li>
            </ol>
            <!--INICIO FUNCIONES-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3 w3-animate-opacity" style="height: 140px;">
                    <div class="card text-white bg-primary o-hidden h-100"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">Mensajes</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver Mas</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3 w3-animate-opacity">
                    <div class="card text-white bg-warning o-hidden h-100"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-newspaper-o"></i>
                            </div>
                            <div class="mr-5">Noticias</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver Mas</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3 w3-animate-opacity">
                    <div class="card text-white bg-danger o-hidden h-100"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-archive"></i>
                            </div>
                            <div class="mr-5">Mis Documentos</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver Mas</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3 w3-animate-opacity">
                    <div class="card text-white bg-dark o-hidden h-100"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-print"></i>
                            </div>
                            <div class="mr-5">Imprimir</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Ver Mas</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <!--FIN FUNCIONES-->
            <br>
            <!--SECCION DE FORM PUBLICACIONES-->
            <ol class="breadcrumb" style="background: rgba(240, 240, 240, 1);
                border-top:4px solid #8d0000;">
                <li class="breadcrumb-item" style="color: #000">
                    <a>¿Que estas pensando?</a>
                </li>
            </ol>
            <form method="POST" enctype="multipart/form-data">
<!--                <textarea class="form-control" rows="3" name="txtPublicacion" required
                          style="height: 170px; 
                          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                </textarea>-->

                <div class="form-group">
                    <label for="comment">Publicar Contenido: </label>
                    <textarea class="form-control" rows="5" name="txtPublicacion"
                              required>
                    </textarea>
                </div>


                <br>
                <button type="submit" name="btnPublicar" class="btn btn-outline-primary">Publicar</button>
                <input type="file" name="doc" class="btn btn-outline-success"/>
                <br><br>
            </form>
            <!--FIN SECCION DE FORM PUBLICACIONES-->
            <div>
                <ol class="breadcrumb" style="background: rgba(240, 240, 240, 1);
                    border-top:4px solid #ffcc00;">
                    <li class="breadcrumb-item" style="color: #000">
                        <a>Noticias</a>
                    </li>
                </ol>
            </div>
            <?php
            //inclue a la clase de publicaciones y manda los datos por post
            include_once("../../controller/publish.php");
            $publicacion = new Publicaciones($_POST['txtPublicacion']);
            $publicacion->publicarContenido($publicacion);
            //Ejecuta la funcion mostrar publicacioines de los usuarios
            $publicacion->mostrarPublicaciones();
            ?>
        </div>
    </body>

</html>
