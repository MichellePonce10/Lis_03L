<?php
//matriz asociativa
$Alumno["Nombre"] = $_POST["Nombre_alumno"]??"";
$Alumno["Nota1"] = $_POST["Nota_Tarea"]??"";
$Alumno["Nota2"] = $_POST["Nota_Investigacion"]??"";
$Alumno["Nota3"] = $_POST["Nota_Examen_parcial"]??"";
 
$nota1 = floatval($Alumno["Nota1"])*0.5;
$nota2 = floatval($Alumno["Nota2"])*0.30;
$nota3 = floatval($Alumno["Nota3"])*0.20;

// Calcular el promedio
$promedio = ($Alumno["Nota1"] + $Alumno["Nota2"] + $Alumno["Nota3"])/3;
//calculando la nota final 
$Nota_final = ($nota1 + $nota2 + $nota3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://i.pinimg.com/736x/4a/cb/8a/4acb8af07ea289ac4f8c7fb20f74bc40.jpg" alt="Logo" width="60" height="auto" class="d-inline-block align-text-top">
      <b style="color:white;">Informacion del Alumno Respuesta Final </b>
    </a>
  </div>
</nav>
<br>
<hr>
<br>

<div class="container">
        <div class="row">
            
        <div class="col-sm-12 mb-3">
                <h2 style="text-align: center;color: orangered;font-family: fantasy;"></h1>
                </div>
             

            <table class="table table-bordered" > 
             <tr>
                <td><b style= "color:blue;">Nombre del Alumno:</b></td>
                <td><b><?=$Alumno["Nombre"];?></b></td>
             </tr>
             <tr>
                <td><b style= "color:blue;">Nota de la Tarea:</b></td>
                <td><b><?=$Alumno["Nota1"];?></b></td>
             </tr>
             <tr>
                <td><b style= "color:blue;">Nota Trabajo de Investigacion:</b></td>
                <td><b><?=$Alumno["Nota2"];?></b></td>
             </tr>
             <tr>
                <td><b style= "color:blue;">Nota del Examen Parcial:</b></td>
                <td><b><?=$Alumno["Nota3"];?></b></td>
             </tr>
             <tr>
         <!--esa funcion la utilize para que me muestre el numero en dos decimales -->
                <td><b style= "color:blue;">promedio:</b></td>
                <td><b><?=number_format($promedio,2)?></b></td>
             </tr>
             <tr>
                <td><b style= "color:blue;">Nota Final:</b></td>
                <td><b><?=$Nota_final?></b></td>
             </tr>
            </table>
           
            


        </div>
     </div>
     <br>
      <hr>
      
    
</body>
</html>
