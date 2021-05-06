<?php

    $nombreCandidato = $_GET["NombreCandidato"];
    $cantidadPreguntasTest = $_GET["CantidadPreguntasTest"];
    $cantidadRespondidasCorrectas = $_GET["CantidadRespondidasCorrectas"];

    $porcentaje = $cantidadRespondidasCorrectas * 100 / $cantidadPreguntasTest;

    switch ($porcentaje) {
        case ($porcentaje >= 90):
            $nivel = "Nivel máximo";
            break;
        case ($porcentaje >= 75 && $porcentaje < 90):
            $nivel = "Nivel máximo";
            break;
        case ($porcentaje >= 50 && $porcentaje < 75):
            $nivel = "Nivel máximo";
            break;
        case ($porcentaje < 50):
            $nivel = "Nivel máximo";
            break;
    } 

    $operacionesC = array( 
        'nombreCandidato' => $nombreCandidato, 
        'porcentajeCorrectas' => $porcentaje, 
        'nivel' => $nivel
    );

    /* print_r($contactos); */
    echo json_encode($operacionesC);
?>