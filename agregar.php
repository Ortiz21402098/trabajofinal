<?php

//variables para traer del formulario
$codigo = $_GET["codigo"];
$seccion = $_GET["seccion"];
$nombre = $_GET["nombre"];
$precio = $_GET["precio"];
$fecha = $_GET["fecha"];
$importado = $_GET["importado"];
$pais = $_GET["pais"];

//variables para conectar la bd
$direccion_bd = "localhost";
$nombre_bd = "login";
$usuario_bd = "root";
$contraseña_bd = "";

$conexion = mysqli_connect($direccion_bd,$usuario_bd,$contraseña_bd,$nombre_bd);

$consulta = "INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO,NOMBREARTÍCULO,SECCIÓN,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN) 
            VALUES ('$codigo', '$nombre', '$seccion', '$precio', '$fecha','$importado','$pais')";

$resultado = mysqli_query($conexion,$consulta);

if($resultado == false){
    echo "Error en la consulta";
}else{
    echo "Registro guardado <br><br>";
    echo "<li>$codigo</li>";
    echo "<li>$nombre</li>";
    echo "<li>$seccion</li>";
    echo "<li>$precio</li>";
    echo "<li>$fecha</li>";
    echo "<li>$importado</li>";
    echo "<li>$pais</li>";
}


?>