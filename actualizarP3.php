<?php
include 'conexion.php';
$id_gol = $_POST["id_gol"];
$goles = $_POST["goles"];


//consulta insertar
$actualizar = "UPDATE goleo set goles = '$goles' WHERE id_gol = '$id_gol' ";


//ejecutar consulta insertar
$resulta = mysqli_query($conexion, $actualizar);

if(!$resulta){
    echo'ERROR DE ACTUALIZACION';
}else{
    echo 'REGISTRO ACTUALIZADO';
}

//cerrar conexion
mysqli_close($conexion);