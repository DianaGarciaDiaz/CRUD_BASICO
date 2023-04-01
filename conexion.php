<?php
   
    $servidor='localhost';
    $usuario='root';
    $contrasena='';
    $bd='crud-basico';
    $table_usuarios="usuarios";
    //Creación de conexión
    error_reporting(1);//no muestra errores, si queremos que los muestre le ponemos 1 
    $conexion= new mysqli($servidor,$usuario,$contrasena,$bd);
    //Validación de conexión
    if($conexion->connect_error){
        die('hubo un fallo en la conexión'. $conexion->connect_error);
    }
    
?>