<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos Disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div style="background-color: #f50000;padding: 4px;" class="container-fluid">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <img style="width: 150px;height: auto;" src="https://www.supercarsmanufacturing.com/images/ferrari_supercar_road_legal_sf_90_manufacturing_suppliers.jpg" alt="Logo" class="d-inline-block align-text-top rounded-circle">
                            </div>
                            <div class="col-sm-4">
                                <h1 style="font-size: 40px;color: #000000;font-family: fantasy;">Ventas de Autos</h1>
                            </div>     
                        </div>
    
                    </div>
    
                </a>
            </div>
        </nav>
    </div>
    <hr>
    
<div class="container">
    <header>
     <h1>Autos disponibles</h1>
    </header>
    <div class="row">
    <?php
    spl_autoload_register(function($class){
        if (is_file("class/{$class}.class.php")){
        include_once("class/{$class}.class.php");}
        else {
        die("class/{$class}.class.php No existe en el proyecto");
        }
        });
         //Creando los objetos para cada tipo de auto. Notar que se están
     //asignando a elementos de una matriz que tendrá por nombre $movil
     $movil[0] = new auto("Peugeot", "307", "Gris","img/peugeot.jpg");
     $movil[1] = new auto("Renault", "Clio", "Rojo","img/renaultclio.jpg");
     $movil[2] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
     $movil[3] = new auto("Toyota", "Avalon", "Blanco","img/toyota.jpg");
     //Esta llamada mostrará los valores por defecto en los argumentos
     //del método constructor.
     $movil[4] = new auto();
     //Mostrando la tabla con los autos disponibles
     ?>

     <form method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"></label>
          <select class="form-select" name="marca" aria-label="Default select example">
            <option value="">-- Seleccione --</option>
            <option value="Peugeot">Peugeot</option>
            <option value="Renault">Renault</option>
            <option value="BMW">BMW</option>
            <option value="Toyota">Toyota</option>
        </select>
    
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <?php
      // Obtener la marca seleccionada
        if (isset($_POST['marca']) && $_POST['marca'] !== "") {
            $marcaSeleccionada = $_POST['marca'];

            // Buscar el auto con la marca seleccionada
            foreach ($movil as $auto) {
                if ($auto->getMarca() === $marcaSeleccionada) {
                    $auto->mostrar();
                }
            }
        }
        ?>
    
     
    </div>
    </div>
    </body>
    </html>
    

    
