<?php

if (isset($_POST['seo']) && !isset($_POST['diseño']) && !isset($_POST['desarrollo'])) {
    $servicios = $_POST['seo'];
} elseif (isset($_POST['seo']) && isset($_POST['diseño']) && !isset($_POST['desarrollo'])) {
    $servicios = $_POST['seo'] + $_POST['diseño'];
} elseif (isset($_POST['seo']) && isset($_POST['diseño']) && isset($_POST['desarrollo'])) {
    $servicios = $_POST['seo'] + $_POST['diseño'] + $_POST['desarrollo'] ;
} else {
    $servicios = 0;
}

if (isset($_POST['hosting']) && !isset($_POST['dominio'])) {
    $extras = $_POST['hosting'];
} elseif (isset($_POST['hosting']) && isset($_POST['dominio'])) {
    $extras = $_POST['hosting'] + $_POST['dominio'];
} else {
    $extras = 0;
}
if(isset($_POST['option'])) {
    $web = $_POST['option'];
} else {
    $web = 0;
};
if(isset($_POST['grupo1'])) {
    $presupuesto = $_POST['grupo1'];
} else {
    $presupuesto = 0;
};

//var_dump($web, $servicios, $extras, $presupuesto);
$resultado = (($web * $servicios) + $extras) * $presupuesto;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for="">¿Que estas buscando?</label><br>

            <input type="radio" name="option" id="" value="15000"> Web institucional</option><br>
            <input type="radio" name="option" id="" value="40000"> Web programada a medida</option><br>
            <input type="radio" name="option" id="" value="50000"> E-Commerce</option><br>
            <input type="radio" name="option" id="" value="80000"> Aplicacion web</option><br>

        <label for="">¿Que servicios deseas contratar?</label><br>
        <input type="checkbox" name="seo" id="servicios" value="0.30" checked>Posicionamiento<br>
        <input type="checkbox" name="diseño" id="servicios" value="0.35">Diseño<br>
        <input type="checkbox" name="desarrollo" id="servicios" value="0.35">Desarrollo<br>

        <label for="">Necesito tambien:</label><br>
        <input type="checkbox" name="hosting" id="host" value="2000"> HOSTING<br>
        <input type="checkbox" name="dominio" id="dom" value="2000"> DOMINIO
        <br>
        <label for="">¿Para que presupuesto dispones?</label><br>
        <select name="grupo1" id="">
            <option value="1">Maxima calidad, mejores recursos</option>
            <option value="0.8">Buena relacion precio/calidad</option>
            <option value="0.65">Presupuesto simple</option>
        </select><br>
        <input type="submit" value="enviar">
    </form>
<h1>Su presupuesto estimado es de $<?=$resultado?></h1>


</body>

</html>