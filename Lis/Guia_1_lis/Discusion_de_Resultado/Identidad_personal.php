<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identidad Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php

$Nombre_Completo=$_POST['nombre_Completo'];
$Edad=$_POST['edad'];
$Lugar_De_Nacimiento=$_POST['lugar_Nacimiento'];
$Pais=$_POST['pais'];
$Departamento=$_POST['departamento'];
$Extrajero=$_POST['extrajero'];
$Carnet_Universidad=$_POST['carnet_Universidad'];

?>


<header style="background-color:orangered;">
        <nav class="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                <img src="https://media.istockphoto.com/id/1303877287/es/vector/lista-de-verificaci%C3%B3n-de-papel-y-pictograma-plano-l%C3%A1piz.jpg?s=612x612&w=0&k=20&c=hQYGjkR8CBZEElNgfOOSb4xF5o9rPPcaITEev-7ZTQI=" alt="Formulario Personal" width="80 height="auto" class="d-inline-block align-text-top rounded-circle"></div>
                <div class="col-sm-4"><b style="color: white;font-size: 30px;">Identidad Personal</b></div>
            </div>
            </div>
              </a>
            </div>
          </nav>
    </header>
    <hr>
    <br>
    <br>

 <div class="container">
        <div class="row">
            
        <div class="col-sm-12 mb-3">
                <h2 style="text-align: center;color: orangered;font-family: fantasy;">Sus Datos Personales Son:</h1>
                </div>

            <table class="table table-bordered" > 
             <tr>
                <td><b>Nombre Completo:</b></td>
                <td><?= $Nombre_Completo?></td>
             </tr>
             <tr>
                <td><b>Edad:</b></td>
                <td><?= $Edad?></td>
             </tr>
             <tr>
                <td><b>Lugar de Nacimiento:</b></td>
                <td><?= $Lugar_De_Nacimiento?></td>
             </tr>
             <tr>
                <td><b>Pais:</b></td>
                <td><?= $Pais?></td>
             </tr>
             <tr>
                <td><b>Departamento</b></td>
                <td><?= $Departamento ?></td>

             </tr>
             <tr>
                <td><b>Extrajero</b></td>
                <td><?= $Extrajero ?></td>
                
             </tr>
             <tr>
                <td><b>Carnet de la Universidad Don Bosco</b></td>
                <td><?= $Carnet_Universidad?></td>
                
             </tr>
            </table>

        </div>
     </div>
     

    
</body>
</html>