<?php
$db = new PDO('mysql:host=localhost; dbname=inmobiliaria', 'sise', 'sise123');
if(!$db){
    echo "Error al conectar la base de datos";
    exit;
}
?>