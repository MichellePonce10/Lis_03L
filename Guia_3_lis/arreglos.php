<?php
$edades=[10,14,25,96,96.7];//creando arreglo
echo $edades[0].<"br/">;//accediendo a un elemento
$edades[1]=28;//modificando un elemento

//los indices no tiene un orden en particular 

array_push($edades,100);//añadiendo  un nuevo elemento 
uset(edades[0]);//eliminando la posicion 0 
print_r($edades);//imprimimos con el print_r
print_r($edades);
$datos_personales=['nombre']="Guillermo";
$datos_personales=['apellido'];="calderon";
$datos_personales=['estutura']=1.75;
$datos_personales=['genero']="Masculino";
print_r($datos_personales);
echo"<h2>imprimiendo los elementos del arreglo asociativo</h2>";//solo los muestra 
//clave indice 
//dato al valor 

foreach($datos_personales as $clave =>$dato){
    echo"<p>$clave:$dato</p>";
}

echo "<h2>Recorriendo el arreglo</h2>";

foreach($edades as $edad){

    echo"<p>$edad</p>";
}
//la cantidad del elemento del arreglo 
$tamanio=count($edades);
echo "el tamaño del arreglo es es $tamanio</p>";
//ordenando un arreglo 

sort($edades);//ordenamos de forma mutable
//mutable() inmutable(no lo nodifica)
$edades=array_reverse($edades);//invertimos el orden de forma inmutable
print_r($edades);

print_r($edades);

$persona2=[
    'nomre'=>"Juan",
    'apellido'=>"Perez",
    'estatura'=>1.80,
    'genero'=>"Masculino"
]
print_r($persona2)

