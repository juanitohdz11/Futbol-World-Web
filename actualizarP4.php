<?php
include 'conexion.php';
$id_tarj = $_POST["id_tarj"];
$rojas = $_POST["rojas"];
$amarillas = $_POST["amarillas"];
$total = $_POST["total"];

//consulta insertar
$actualizar = "UPDATE tarjetas set rojas = '$rojas', amarillas = '$amarillas', total = '$total' WHERE id_tarj = '$id_tarj' ";


//ejecutar consulta insertar
$resulta = mysqli_query($conexion, $actualizar);

if(!$resulta){
    echo'ERROR DE ACTUALIZACION';
}else{
    echo 'REGISTRO ACTUALIZADO';
}

//cerrar conexion
mysqli_close($conexion);