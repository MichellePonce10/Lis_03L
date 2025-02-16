<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $name = "Mariana";
        $edad = 19;
        $lasname = "Ponce";
        echo "Hola $name tienes $edad años de edad";"<br>";
        echo 'Hola mi nombre es: '. $name.' '.$lasname;"<br>";
        //conversion de tipos 
        $numero = 5;
        $numero2 = "5";
        var_dump( value : $numero==$numero2); // evalua si tiene el mismo valor
        var_dump( value : $numero===$numero2);// evalua si tiene el mismo valor y tipo 
        

        // casting explicito
        $numero3=(int)$numero2;
        var_dump(value: $numero3 === $numero);
      
    ?>
</body>
</html>