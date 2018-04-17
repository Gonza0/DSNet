<!DOCTYPE html>
<?php
//session start para iniciar "la sesion del usuarios"
session_start();
//include para importar la clase de conexion 
include("../../sql/config.php");
//verifica usuario en la variable de la sesion 
if (isset($_SESSION['usuario'])) {
    //redirecciona a la pagina de login si se presenta algun problema en la 
    //pagina login
    header('Location: login.php');
}
//Reporta eventuales errores que puedan ocurrir 
ini_set('error_reporting', 0);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>DS Morus</title>

    </head>
    <body>
        <!--En el value="" se pondra los valores para PHP -->
            <form action="" method="post">
                <div>             
                    <input type="text" name="txtNombre" placeholder="Nombre" size="15" value="<?php echo $_POST['txtNombre']; ?>" required/>
                </div>
                <div>             
                    <input type="text" name="txtApellido" placeholder="Apellido" size="15" value="<?php echo $_POST['txtApellido']; ?>" required/>
                </div>
                <div>             
                    <input type="text" name="txtUsuario" placeholder="Usuario" size="15" required/>
                </div>
                <div>             
                    <input type="text" name="txtEmail" placeholder="Email" size="15" value="<?php echo $_POST['txtEmail']; ?>" required/>
                </div>
                <div>             
                    <input type="password" name="txtPasswd" placeholder="Contraseña" size="15" value="" required />
                </div>
                <div>             
                    <input type="date" name="txtFecha" placeholder="Fecha Nacimiento" size="15" value="<?php echo $_POST['txtFecha'] ?>" required/>
                </div>
                <div>
                    <input type="radio" name="rbGenero" value="Masculino" checked="checked" /><a>Masculino</a>
                    <input type="radio" name="rbGenero" value="Femenino" checked="checked"/><a>Femenino</a>
                </div>
                <br>
                <input type="submit" value="Registrar" name="btnRegistrar" />
            </form>

    </body>
</html>

