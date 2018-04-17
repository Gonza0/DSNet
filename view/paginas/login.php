<!DOCTYPE html>
<?php
//metodo que inicia sesion de un usuario
session_start();
//incluir clase de conexion 
include("../../sql/config.php");
//registra lo errores generados por la app
ini_set('error_reporting', 0);
//consultamos la variable de sesion si es que esta settiada
if (isset($_SESSION['nombre'])) {
    //redirecciona a la pagina especificada
    header('Location: index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../theme/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="../theme/css/efectos.css">
        <link rel="stylesheet" href="../theme/css/footer.css">
    </head>

    <body class="badge-light">
        <div class="container w3-animate-opacity">
            <form action="" method="POST">
                <div class="card card-login mx-auto mt-5"
                     style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="card-header text-white" style="background-color: #343a40;">
                        <div>
                            <h4>Login</h4>
                            <img src="../img/stlogo.png"
                                 style="
                                 width: 13%;
                                 height: auto;
                                 margin: auto;">
                            <a>&nbsp;&nbsp;&nbsp;&nbsp;Deutshe Shule ST.Thomas Morus</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInput">Usuario</label>
                            <input class="form-control" type="text" placeholder="Usuario" name="txtUsuario" value="<?php echo $_POST['txtUsuario'] ?>" required>
                            <br>
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" type="password" placeholder="Password" name="txtContraseña" required>
                        </div>

                        <input class="btn btn-primary btn-block" type="submit" value="Ingresar" name="btnIngresar" />
                        <div class="text-center">
                            <a class="d-block small mt-3" href="#">Recuperar Clave?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <script src="../jquery/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../jquery-easing/jquery.easing.min.js"></script>
    </body>
    <?php
    //Incluir clase controladora 
    include("../../controller/ingreso.php");
    //asignacion de la credenciales al metodo para validar
    $login = new Acceso($_POST['txtUsuario'], $_POST['txtContraseña']);
    $login->login(); //-->Ejecuta la validacion del usuario buscando a este por
    //su usuario y contraseña
    //redireccional a pagina solicitada
    header("location: index.php");
    ?>
</html>