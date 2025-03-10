<?php

include 'validaciones.php';

session_start();

if(!empty($_POST)){
    $errores=[];
    //arreglo asociativo dejarme en variables indibiduales 
  extract($_POST);
    $nombres=$_POST['nombres']??'';//si es nulo le deje eso 

    //verififcar que no este vacio
    //quita espacio al inicio y al final trim 
    if(empty(trim($nombres))){
        
        array_push($errores,"se debe ingresar el nombre");

    }else if(isText(trim($nombres))){
        array_push($errores,"formato no valido");
    }

    if(empty(trim($apellidos))){
        
        array_push($errores,"se debe ingresar apellido");

    }else if(isText(trim($apellidos))){
        array_push($errores,"los apellidos no son ingresados");
    }

    if(empty(trim($apellidos))){
        
        array_push($errores,"se debe ingresar carnet");

    }else if(isCarnet(trim($carnet))){
        array_push($errores,"carnet no valido");
    }

    if(empty(trim($telefono))){
        
        array_push($errores,"se debe ingresar carnet");

    }else if(isphone(trim($telefono))){
        array_push($errores,"carnet no valido");
    }

    if(empty(trim($correo))){
        
        array_push($errores,"se debe ingresar el correo");

    }else if(isMail(trim($correo))){
        array_push($errores,"Formato de correo erroneo");
    }
    
    
 if(empty($errores)){
    echo"<h1>usuario registrado exitosamente</h1>";
 }else{
    $_SESSION['errores']=$errores;

    $_SESSION['datos']=['nombres'=>$nombres,
                       'apellidos'=>$apellidos,
                    'carnet'=>$carnet,
                    'telefono'=>$telefono,
                     'correo'=>$correo];
    header('Location:index.php');
    //variable de seccion estara dispoonible en cualquier pagina 
 
 }


    

}