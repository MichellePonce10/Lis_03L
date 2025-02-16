<?php
function calcularDistanciaEntrePuntos($x0,$y0,$x1=0,$y1=0){

    return round(sqrt(pow($x1-$x0,2)+pow($y1-$y0,2)),2);
}
//calcular media 
//el promedio 
//con cantidad variables de parametros 
//cantidad de parametro...puntitos
function calcularMedia(...$numeros){
// calulando la media 
$n=count($numeros);
if($n==0)

return 0;

$suma = array_sum($numeros);
return $suma/$n;

}

function calcularvarianza(...$numeros){
    // calulando la varianza 
    $n=count($numeros);
    if($n==0)
    
    return 0;
    
    $suma = array_sum($numeros);
    $promedio =$suma/$n;
    $suma_numerador=0;
    foreach($numeros as $num){
        $suma_numerador+=pow($num-$promedio,2);
    
    }
     //retornar 
    //en otros lenguajes much mejor retornar un objecto que rectornar un arreglo 
    $varianza=$suma_numerador/$n;
    return[

        "promedio"=>$promedio,
        "varianza"=>$varianza
    ];

}

echo "la distancia del punto (3,5) al origen es".calcularDistanciaEntrePuntos(3,5);
echo "<br/>la distancia del punto (3,5) al (1,1) es".calcularDistanciaEntrePuntos(3,5,1,1);
$resultado=calcularvarianza(10,12,14,16,18);
echo "<br/>El Promedio es:".$resultado['promedio'];
echo "<br/>La Varianza  es:".$resultado['varianza'];

//recursividad 
//cuando la funcion deja de llamarse asi misma (recursividad)

function factorialRecursivo($n){
    if($n==1){
        return 1;

    }else{
        return $n*factorialRecursivo($n-1);
    }
}



//no existe sobre carga de funciones 
echo"<br/> El promedioo es:".calcularMedia(10,12,14,16,18);
echo"<br/> El Factorial de 6 es:".factorialRecursivo(6);

//cuando una funcion retorna??