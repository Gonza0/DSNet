
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="jumbotron">
            <h4><img src="../img/default.jpg " alt="User Image" style="border-radius: 50%; width: 50px;">&nbsp;
                <?php echo $use['nombre'] . " " . $use['apellido']; ?></h4>
            <h5 style="font-size: 13px;">Publicado <?php echo $lista['fecha']; ?></h5>
            <p class="lead">
                <?php echo $lista['contenido'];?>
            </p>
            <?php
            if ($lista['archivo'] != '') {
                ?><img src='/Proyecto/storage/publicaciones/<?php echo $lista['archivo'] ?>'
                     style="width: 55%; display: block; margin: auto; 
                     border-radius: 10px; box-shadow: 5px 5px 0px #ccc;">
                     <?php
                 }
                 ?>
            <hr class="my-4">
            <p class="lead">
                <button type="button" class="btn btn-outline-primary" href='#'>Ver Más</button>
            </p>
        </div>

    </body>

</html>
