<?php
include 'conexion.php';
$id = $_POST["id"];
$jj = $_POST["jj"];
$jg = $_POST["jg"];
$je = $_POST["je"];
$jp = $_POST["jp"];
$puntos = $_POST["puntos"];

//consulta insertar
$actualizar = "UPDATE tablagene set jj = '$jj', jg = '$jg', je = '$je', jp = '$jp', puntos = '$puntos' WHERE id = '$id'";


//ejecutar consulta insertar
$result = mysqli_query($conexion, $actualizar);

if(!$result){
    echo'ERROR DE ACTUALIZACION';
}else{
    echo 'REGISTRO ACTUALIZADO';
}

//cerrar conexion
mysqli_close($conexion);