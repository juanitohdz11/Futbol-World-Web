<?php
include 'conexion.php';
$fecha = $_POST["fecha"];
$equip1 = $_POST["equip1"];
$equip2 = $_POST["equip2"];
$hora = $_POST["hora"];
$result = $_POST["result"];
$id_equipo = $_POST["id_equipo"];
$id_equipo2 = $_POST["id_equipo2"];

//consulta insertar
$actualizar = "UPDATE partycalen1 set fecha = '$fecha', equip1 = '$equip1', equip2 = '$equip2', hora = '$hora', result = '$result', id_equipo = '$id_equipo', id_equipo2 = '$id_equipo2' ";


//ejecutar consulta insertar
$result = mysqli_query($conexion, $actualizar);

if(!$result){
    echo'ERROR DE ACTUALIZACION';
}else{
    echo 'REGISTRO ACTUALIZADO';
}

//cerrar conexion
mysqli_close($conexion);