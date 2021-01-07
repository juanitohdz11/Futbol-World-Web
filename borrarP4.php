<?php
include 'conexion.php';
$id_tarj = $_POST["id_tarj"];

//consulta insertar
$eliminar = "DELETE FROM tarjetas WHERE id_tarj = '$id_tarj'";

//ejecutar consulta insertar
$result = mysqli_query($conexion, $eliminar);

if(!$result){
    echo'ERROR AL ELIMINAR';
}else{
    echo 'REGISTRO ELIMINADO';
}

//cerrar conexion
mysqli_close($conexion);