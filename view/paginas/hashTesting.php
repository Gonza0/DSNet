<?php
$password = "hola.123";

$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
echo "<br>";
//TE VALIDA EL HASH  O LA CLAVE SIN HASH(primer parametro) 
//SEGUNDO PARAMETRO RESIVE EL HASH DE LA CLAVE

if (password_verify($password, $hash)) {
    echo 'Pillado';
}else{
    echo 'try again :C';
}
echo '<br>';
$cadena_origen = "djkhkdjashdkjahdkajdhakjdhaksjdhkas https://www.youtube.com/watch?v=oIowZiM41kQ";

 
//filtro los enlaces normales
$cadena_resultante= preg_replace("/((http|https|www)[^\s]+)/", '<a href="$1">$0</a>', $cadena_origen);
//miro si hay enlaces con solamente www, si es así le añado el http://
$cadena_resultante= preg_replace("/href=\"www/", 'href="http://www', $cadena_resultante);
echo '<h3>Cadena filtrada con enlaces normales:</h3>'.$cadena_resultante;

?>