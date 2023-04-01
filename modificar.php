<!DOCTYPE html>
<?php
include("conexion.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica</title>
</head>
<body>
 <?php
 if(isset($_POST['actualizar'])){
    //entra cuando se presiona el boton enviar
    $id=$_POST['id'];
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $cedula=$_POST['cedula'];
    $puesto=$_POST['puesto'];
    $carrera=$_POST['carrera'];
    $direccion=$_POST['direccion'];
    $celular=$_POST['celular'];
    $correo=$_POST['correo'];
    $salario=$_POST['salario'];
    //update usuarios set
    $sql="UPDATE $table_usuarios SET nombre='".$nombre."',cedula='".$cedula."',puesto='".$puesto."',carrera='".$carrera."',direccion='".$direccion."',celular='".$celular."',salario='".$salario."'WHERE id='".$id."'";
    $res=mysqli_query($conexion, $sql);
    if($res){
        echo"<script languaje='JavaScript'>
        alert('Los datos se actualizaron correctamente');
        location.assign('index.php');
        </script>";
    }else{
        echo"<script languaje='JavaScript'>
        alert('Los datos no se actualizaron correctamente');
        location.assign('index.php');
        </script>";
    }
    mysqli_close($conexion);
 }else{
     //entra si no se presiona el boton enviar
     $id=$_GET['id'];
     $_sql="SELECT * FROM $table_usuarios WHERE id='".$id."'";
     $resultado=mysqli_query($conexion, $_sql);
     $fila=mysqli_fetch_assoc($resultado);
     
    $id=$fila["id"];
    $nombre=$fila["nombre"];
    $cedula=$fila['cedula'];
    $puesto=$fila['puesto'];
    $carrera=$fila['carrera'];
    $direccion=$fila['direccion'];
    $celular=$fila['celular'];
    $correo=$fila['correo'];
    $salario=$fila['salario'];
    mysqli_close($conexion);

?> 
 
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input type="text" name="nombre" value="<?php echo $nombre; ?>">
            <input type="text" name="cedula" value="<?php echo $cedula; ?>">
            <input type="text" name="puesto" value="<?php echo $puesto; ?>">
            <input type="text" name="carrera" value="<?php echo $carrera; ?>">
            <input type="text" name="direccion" value="<?php echo $direccion; ?>">
            <input type="text" name="celular" value="<?php echo $celular; ?>">
            <input type="text" name="correo" value="<?php echo $correo; ?>">
            <input type="text" name="salario" value="<?php echo $salario; ?>">

            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" name="actualizar" value="ACTUALIZAR" class="btn btn-primary">
            <a href="index.php">Regresar</a>
            
    </form>
    </tr>
</tbody>
</table>    
<?php
}
?>
</body>
</html>
