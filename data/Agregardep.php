<?php
require('data/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo 'Enviado por el metodo post';
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $estacionamiento = $_POST['estacionamiento'];

    
    $sql = "INSERT INTO `departamentos`(`titulo`, `precio`, `descripcion`, `habitaciones`, `estacionamiento`) 
    VALUES ('$titulo','$precio','$descripcion','$habitaciones','$estacionamiento')";
    $resultado = $db->query($sql);
    if($resultado){
        header('location:index.php');
    }
    
    exit;
}

?>