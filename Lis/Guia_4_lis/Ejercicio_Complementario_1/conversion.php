<?php

$valor_Ingresado = 0;
$Medida = '';
$Medida_a_Convertir = '';



function conversion_metros($valor_Ingresado,$magnitud_seleccionada){

    switch ($magnitud_seleccionada){
        //conversion metro a metro 

        case 'Metros1':
            return $valor_Ingresado * 1;
            break;

            // conversion de yarda a metro 
            case 'Yardas1':
                return $valor_Ingresado / 1.094;
                break;

                // conversion de pies a metros 
                case 'Pies1':
                    return $valor_Ingresado / 3.281;
                    ;
                    break;

                    //conversion de varas a metros 
                    case 'Varas1':
                        return $valor_Ingresado * 0.8361;
                        break;
        default:
            return 'Error' ;
            break;
    }

}

// ahora convertiremos de metros a la unidad de medida  que deseeado 


function conversion_desde_metros_hasta_la_unidad_deciada($valor_Ingresado,$magnitud_a_hacer_conversion){

  switch ($magnitud_a_hacer_conversion){
      //conversion metro a metro 
      case 'metros2':
          return $valor_Ingresado * 1;
          break;
          // conversion de metros a yardas 
          case 'yardas2':
              return $valor_Ingresado * 1.094;
              break;

              // conversion de metros a pies
              case 'pies2':
                  return $valor_Ingresado * 3.281;
                  ;
                  break;

                  //conversion de metros a varas
                  case 'varas2':
                      return $valor_Ingresado * 1.1963;

                      break;
      default:
          return 'Error' ;
          break;
  }

}



//aqui en este espacio voy a colocar los valores que tengo basios ahorita lo que estoy haciendo es 
    //llamanr a la funcion
if (isset($_POST['Convertir_magnitud'])){

 $valor_Ingresado = $_POST['valor_ingresado'];
 $Medida = $_POST['magnitudseleccionada'];
 $Medida_a_Convertir = $_POST['conversiondemagnitud'];

 $Resultado = conversion_metros($valor_Ingresado,$Medida);

 //aqui lo que agarremos ese resultado sera el valor ya convertido  medida a convertir es select de la unidad que convertiremos 

 $Resultado_conversion = conversion_desde_metros_hasta_la_unidad_deciada($Resultado,$Medida_a_Convertir);

 $Resultadofinal = $Resultado_conversion;

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversiones entre diferentes unidades de magnitud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <hr>
    <h1 style="text-align: center;font-family: fantasy;color: darkblue;">Conversiones Entre Diferentes Unidades de Magnitudes</h1>
    <hr>
    <div style="text-align: center;">
        <img style="width: 400px;height: auto;" src="https://www.mundoestudiante.com/wp-content/uploads/2022/11/Sistema-internacional-de-unidades-2.png" class="rounded-circle" alt="Conversion de Unidades de Medida"></div>
    <hr>
    <div class="container">
        
            <form name="Formulario_Alumno" method="post" >
                <div class="row">
                <div class="col-sm-4">
                  <label for="exampleInputEmail1" class="form-label"><b style="color:darkmagenta;">Ingrese El valor Que Desea Convertir</b></label>
                  <input type="number" class="form-control" name="valor_ingresado" id="valor_ingresado" aria-describedby="emailHelp">
                </div>
                <div class="col-sm-4">
                  <label for="exampleInputPassword1" class="form-label"><b style="color:darkgreen;">Seleccione una Magnitud</b></label>
                  <select class="form-select" name="magnitudseleccionada">
                    <option selected>Seleccione una opcion</option>
                    <option value="Metros1">Metros</option>
                    <option value="Yardas1">Yardas</option>
                    <option value="Pies1">Pies</option>
                    <option value="Varas1">Varas</option>
                  </select> <br>
                  <br>
                </div>
                <div class="col-sm-4">
                    <label for="exampleInputPassword" class="form-label"><b style="color:navy;">Seleccione la Magnitud a Hacer la Conversion</b></label>
                    <select class="form-select" name="conversiondemagnitud">
                      <option selected>Seleccione una opcion</option>
                      <option value="metros2">Metros</option>
                      <option value="yardas2">Yardas</option>
                      <option value="pies2">Pies</option>
                      <option value="varas2">Varas</option>
                    </select>
                    <br>
                  </div>
                  <div class="col-sm-4">
                    <button name="Convertir_magnitud" style="background-color: darkblue; ;" type="submit" class="btn btn-primary"><b style="color: white;">Convertir Magnitud</b></button>
                  </div>
                  <div class="col-sm-4">
                    <label for="exampleInputEmail1" class="form-label"><b style="color:darkmagenta;">Respuesta de La conversion Realizada</b></label> 
                    <input type="text" class="form-control" name="Respuesta" id="Respuesta" value="<?php if(isset($Resultadofinal)) echo number_format($Resultadofinal, 2);?>" readonly>


                  </div>
                
                
            </div>
              </form>

       
    
    </div>
    <hr>

    
    
</body>
</html>

