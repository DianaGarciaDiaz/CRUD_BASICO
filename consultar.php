<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Consulta y Elimina</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Seguro que desea eliminar el registro?');
        }
    </script> 
</head>
<body>
<?php
    /*
    include_once('conexion.php');
    $sql = "INSERT INTO  usuarios (nombre, apellido)
    VALUES('DIANA','GARCIA');";
    if($conexion->query($sql)=== TRUE){
        echo"Registro Ingresado Correctamente.";
    }else{
        echo $conexion->error;
    }
    $conexion->close();
   */ 
    //CONSULTAR
    
    if(isset($_POST['consultar'])){
        include("conexion.php");       
                $resultados = mysqli_query($conexion,"SELECT * FROM $table_usuarios");
                echo "<table class='table'>";
                echo "<tr><th>id</th><th>Nombre</th><th>Cedula</th><th>Puesto</th><th>Formación</th><th>Localidad de Residencia</th><th>Celular</th><th>Correo</th><th>Expectativa Salarial</th></tr>";
                while($consulta = mysqli_fetch_array($resultados))
                    
                {
                    echo "<tr>";
                    echo "<td>".$consulta['id']."&nbsp;"."</td>";
                    echo "<td>".$consulta['nombre']."&nbsp;"."</td>";
                    echo "<td>".$consulta['cedula']."&nbsp;"."</td>";
                    echo "<td>".$consulta['puesto']."&nbsp;"."</td>";
                    echo "<td>".$consulta['carrera']."&nbsp;"."</td>";
                    echo "<td>".$consulta['direccion']."&nbsp;"."</td>";
                    echo "<td>".$consulta['celular']."&nbsp;"."</td>";
                    echo "<td>".$consulta['correo']."&nbsp;"."</td>";
                    echo "<td>".$consulta['salario']."&nbsp;"."</td>".
                    "<td>"."<a class='link-success' href='modificar.php?id=".$consulta['id']."'>EDITAR </a>"."</td>".
                    "<td>"."<a class='link-danger' href='eliminar.php?id=".$consulta['id']."' onclick='return confirmar()'>ELIMINAR</a>"."<br>"."</td>";
                    
                    echo "</tr>";
                }         
    } 
?>
</body>
</html>
