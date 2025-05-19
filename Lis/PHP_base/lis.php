<?php

include_once("Models/EditorialesModel.php");
$model = new EditorialesModel();
$editorial = [
    'codigo_editorial' => "EDI756",
    'nombre_editorial' => "Prueba INSERT",
    'contacto' => "Marlom",
    'telefono' => "78507904"
];
//echo $model->insert($editorial);
echo $model->update($editorial);
var_dump( $model->get() );