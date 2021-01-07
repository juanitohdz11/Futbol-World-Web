<?php
include 'conexion.php';
$id = $_POST["id"];

//consulta insertar
$eliminar = "DELETE FROM tablagene WHERE id = '$id'";

//ejecutar consulta insertar
$result = mysqli_query($conexion, $eliminar);

if(!$result){
    echo'ERROR AL ELIMINAR';
}else{
    echo 'REGISTRO ELIMINADO';
}

//cerrar conexion
mysqli_close($conexion);