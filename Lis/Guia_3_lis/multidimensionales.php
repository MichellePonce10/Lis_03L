<?php

$alumnos=[
    //vector 
    [
        //misma clave para todos los alumnos
        'nombre'=>"Guillermo",
        'apellido'=>'calderon',
        'carnet'=>'CH11441',
        'CUM'=>5,
        'Materias'=>['LIS104','apn501','PED104']
        //arreglo de tres dimensiones 
    ]
    [
        //misma clave para todos los alumnos
        'nombre'=>'Miguel',
        'apellido'=>'calderon',
        'carnet'=>'CH11441',
        'CUM'=>5,
        'Materias'=>['LIS104','apn501','PED104']
        //arreglo de tres dimensiones 
    ]
    [
        //misma clave para todos los alumnos
        'nombre'=>'Laura',
        'apellido'=>'Martinez',
        'carnet'=>'CH11441',
        'CUM'=>5,
        'Materias'=>['LIS104','apn501','PED104']
        //arreglo de tres dimensiones 
    ]
    ];
    ?>
    <table>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>carnet</th>
            <th>CUM</th>
            <th></th>
          </tr>
          <?php
foreach($alumnos as $alumno){

          ?>
           <tr>
           <td><?=$alumno['nombre']?></td>
           <td><?=$alumno['apellido']?></td>
           <td><?=$alumno['carnet']?></td>
           <td><?=$alumno['CUM']?></td>
           <td><?=implode('',$alumno['materia'],)?></td>
           //lo que hace es convertirno en un string y mostrarlo con espacio lo muestra como una cadena 

          
         </tr>
         <?php
} ?>

        
        <table>
   
