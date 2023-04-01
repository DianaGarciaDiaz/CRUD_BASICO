<?php
    $id=$_GET['id'];
    include("conexion.php");
    $sql="DELETE FROM $table_usuarios WHERE id='".$id."'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        echo "<script languaje='JavaScript'>
        alert('Los datos se eliminaro correctamente de la BD');
        location.assign('index.php');
        </script>";

    }else{
        echo "<script languaje='JavaScript'>
        alert('Los datos NO se eliminaro correctamente de la BD');
        location.assign('index.php');
        </script>";
    }

?>