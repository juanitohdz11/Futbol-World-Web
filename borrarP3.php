<?php
include 'conexion.php';
$id_gol = $_POST["id_gol"];

//consulta insertar
$eliminar = "DELETE FROM goleo WHERE id_gol = '$id_gol'";

//ejecutar consulta insertar
$result = mysqli_query($conexion, $eliminar);

if(!$result){
    echo'ERROR AL ELIMINAR';
}else{
    echo 'REGISTRO ELIMINADO';
}

//cerrar conexion
mysqli_close($conexion);