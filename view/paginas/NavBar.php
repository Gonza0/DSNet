<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name=&"viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../theme/css/sb-admin.css" rel="stylesheet">
        <link href="../theme/css/menu.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../theme/css/efectos.css">
    </head>
    <nav class="navbar navbar-expand-md  navbar-dark w3-animate-top" style="background-color: #171a21">
        <div class="menu-bar" id="nav-icon3" >
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <a class="navbar-brand" href="index.php">

            <h5>
                <img src="../img/stlogo.png"  
                     style="
                     width: 8%;
                     height: auto;
                     margin: auto;
                     ">
                Colegio Alemán Sankt Thomas Morus
            </h5>

        </a>
        <a class="nav-link" style="position:absolute; left:79%; color:#fff;" href="perfil.php">
            <img src="../img/usericon.png" style="
                 width: 17%;
                 ">&nbsp;
            <h7>
                <?php
                echo ucwords($_SESSION['nombre'])
                . " " . $_SESSION['apellido']
                ?>
            </h7>
        </a>
    </nav>
    <br>
    <div class="sidebar" style="background-color: #171a21">
        <h2 style="background-color: #171a21">Menu</h2>
        <ul>
            <li><a href="perfil.php" style="color: white;">Mi Perfil <img src="../img/usericon.png" width="25" height="25"></a></li>
            <li><a>Horario</a></li>
            <li><a>Notas</a></li>
            <li><a href="logout.php" style="color: white;">Salir <img src="../img/logout-256.png" width="25" height="25"></a></li>   
        </ul>
    </div>
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../jquery-easing/jquery.easing.min.js"></script>
    <script src="../chart.js/Chart.min.js"></script>
    <script src="../theme/js/sb-admin.min.js"></script>
    <script src="../theme/js/abrir.js"></script>
</html>
