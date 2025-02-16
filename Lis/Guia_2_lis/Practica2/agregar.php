<?php

if (isset($_POST)){

    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $uvs=$_POST['uvs'];
    $nota=$_POST['nota'];

    $materias=simplexml_load_file('materias.xml');
    $materia=$materias->addchild('materia');
    //crear un hijo 
    $materia->addchild('codigo',$codigo);
    $materia->addchild('nombre',$nombre);
    $materia->addchild('uvs',$uvs);
    $materia->addchild('nota',$nota);
    //lo tenemos en memoria pasarenos a disco
                                    //lo que estamos poniendo adentro
     
    file_put_contents('materias.xml',$materias->asxml());
    //que me lleve imediatamente index
  //la direccion 
  // header no se vaya a otra pagina si no que se quede ahi 

    header('location:index.php ?exito=1');

    // 
    


}
//meter estos datos en el xml
?>