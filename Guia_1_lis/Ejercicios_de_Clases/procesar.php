<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
      $nombre=$_POST['nombre'];
      $apellido=$_POST['apellido'];
      $correo = $_POST['correo'];
      $motivo = $_POST['motivo'];
      $mensaje= $_POST['message'];
     

     ?>

     <div class="container">
        <div class="row">
            <table class="table table-bordered" > 
             <tr>
                <td>Nombre</td>
                <td><?= $nombre ?></td>
             </tr>
             <tr>
                <td>Apellido</td>
                <td><?= $apellido ?></td>
             </tr>
             <tr>
                <td>Correo</td>
                <td><?= $correo ?></td>
             </tr>
             <tr>
                <td>Motivo</td>
                <td><?= $motivo ?></td>
             </tr>
             <tr>
                <td>mensaje</td>
                <td><?= $mensaje ?></td>
             </tr>
            </table>

        </div>
     </div>
</body>
</html>