<?php
    $peso = $_GET["peso"];
    $longitud = $_GET["longitud"];

    $imc = $peso / pow($longitud, 2);

    switch ($imc) {
        case ($imc < 18.5):
            $categoria = "Por debajo del peso";
            break;
        case ($imc >= 18.5 && $imc < 25):
            $categoria = "Saludable";
            break;
        case ($imc >= 25 && $imc < 30):
            $categoria = "Con sobrepeso";
            break;
        case ($imc >= 30 && $imc < 40):
            $categoria = "Obeso";
            break;
        case ($imc > 40):
            $categoria = "Obesidad mórbida";
            break;
    }

    $operacionesD = array( 
        'imc' => $imc, 
        'categoria' => $categoria
    );

    /* print_r($contactos); */
    echo json_encode($operacionesD);

?>