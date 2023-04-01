<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ingresar Datos</title>
           
</head>
<body>
    <h1 class="blockquote">Ingresar Datos</h1>
    <div class="contentIndex">
        <form method="POST" action="index.php">
            <input type="text" name="nombre" placeholder="Nombre Completo" class="campo"><br>
            <input type="text" name="cedula" placeholder="Cédula Profesional" class="campo"><br>
            <input type="text" name="puesto" placeholder="Puesto Actual / último" class="campo"><br>
            <input type="text" name="carrera" placeholder="Formación" class="campo"><br>
            <input type="text" name="direccion" placeholder="Localidad de Residencia" class="campo"><br>
            <input type="tel" name="celular" placeholder="Celular" class="campo"><br>
            <input type="email" name="correo" placeholder="Correo" class="campo"><br>
            <input type="text" name="salario" placeholder="Expectativa Salarial" class="campo"><br>
            <input type="submit" name="enviar_datos" value="Enviar" class="btn btn-primary envia"><br>
        </form>
        <form method="POST" action="consultar.php">
            <input type="submit" name="consultar" value="Consultar" class="btn btn-info cunsulta">
        </form>
    </div>
<?php
     //Insertar 
     if(isset($_POST['enviar_datos'])){
        include("conexion.php");
        //en las variables guardar el name de los campos de texto
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $cedula=$_POST['cedula'];
        $puesto=$_POST['puesto'];
        $carrera=$_POST['carrera'];
        $direccion=$_POST['direccion'];
        $celular=$_POST['celular'];
        $correo=$_POST['correo'];
        $salario=$_POST['salario'];
        //usuarios es el nombre de la tabla (los campos de la tabla usuarios) VALUES las variables donde se van a guardar los datos de los campos de texto a insertar
        $conexion->query("INSERT INTO $table_usuarios (nombre,cedula,puesto,carrera,direccion,celular,correo,salario) values ('$nombre','$cedula','$puesto','$carrera','$direccion','$celular','$correo','$salario')");
    
    }
?>
    
</body>
</html>