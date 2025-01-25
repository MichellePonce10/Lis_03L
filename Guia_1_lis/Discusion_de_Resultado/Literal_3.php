<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion de Monedas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<?php
      $dolares=$_POST['dolares'];
      $euros=$dolares*0.95;

     ?>

<hr>
    <header style="background-color:aquamarine;">
        <nav class="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img src="https://img.freepik.com/vector-premium/icono-cambio-moneda-estilo-comic-ilustracion-vector-dibujos-animados-transferencia-dolar-euro-sobre-fondo-blanco-aislado-concepto-negocio-efecto-salpicadura-proceso-financiero_157943-6529.jpg" alt="Logo" width="100" height="auto" class="rounded-circle">
                <b style="font-family: cursive;font-size: 30px;color:darkmagenta;">Conversor de Moneda: De Dólares a Euros</b>
              </a>
            </div>
          </nav>
    </header>
    <hr>

    <hr>

    <div style="text-align: center;" class="container">

    <img width="200px"height="auto" src="https://static.vecteezy.com/system/resources/previews/005/529/589/non_2x/exchange-dollar-to-euro-icon-in-flat-style-exchange-money-cartoon-illustration-vector.jpg" class="img-thumbnail" alt="Cinque Terre">
    </div>
        <div class="col-sm-12 mb-3">
                <h2 style="text-align: center;color:darkblue; font-family: fantasy;">la Conversion Seria:</h1>
                </div>
                <div class="container">
        <div class="row justify-content-center">
         <div class="col-sm-4">
            <table class="table table-bordered" > 
             <tr>
              <td> <b>Cantidad Ingresada en Dolares:</b></td> 
                <td>$:<?= $dolares ?></td>
             </tr>
             <tr>
                <td><b>Cantidad en Euros:</b></td>
                <td>€:<?= $euros ?></td>
             </tr>
             </table> 
         </div>
           

        </div>
     </div>
     <hr>
    

         
</body>
</html>