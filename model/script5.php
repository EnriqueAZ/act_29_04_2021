<?php

    $ciudadOrigen = $_GET["CiudadOrigen"];
    $ciudadDestino = $_GET["CiudadDestino"];
    $clase = $_GET["Clase"];
    $alimentacion = $_GET["Alimentacion"];
    $internet = $_GET["Internet"];
    $maletero = $_GET["Maletero"];
    $nombre = $_GET["Nombre"];
    $edad = $_GET["Edad"];
    $tarifa = 0;
    $incremento = 0;
    $descuento = 0;

    switch ($ciudadOrigen && $ciudadDestino) {
        case ($ciudadOrigen == "manizales" && $ciudadDestino == "neiva" || $ciudadOrigen == "neiva" && $ciudadDestino == "manizales"):
            /* $tarifa = 347000; */
            $tarifa = 347000;
            break;
        case ($ciudadOrigen == "manizales" && $ciudadDestino == "pereira" || $ciudadOrigen == "pereira" && $ciudadDestino == "manizales"):
            $tarifa = 360000;
            break;
        case ($ciudadOrigen == "manizales" && $ciudadDestino == "pasto" || $ciudadOrigen == "pasto" && $ciudadDestino == "manizales"):
            $tarifa = 382000;
            break;
        case ($ciudadOrigen == "neiva" && $ciudadDestino == "pereira" || $ciudadOrigen == "pereira" && $ciudadDestino == "neiva"):
            $tarifa = 382000;
            break;
        case ($ciudadOrigen == "neiva" && $ciudadDestino == "pasto" || $ciudadOrigen == "pasto" && $ciudadDestino == "neiva"):
            $tarifa = 382000;
            break;
        case ($ciudadOrigen == "pereira" && $ciudadDestino == "pasto" || $ciudadOrigen == "pasto" && $ciudadDestino == "pereira"):
            $tarifa = 382000;
            break;
    }


    if ($clase == "turista") {
        $incremento = $tarifa * 0;
    }elseif ($clase == "primeraClase") {
        $incremento = $tarifa * 0.20;
    }elseif ($clase == "ejecutiva") {
        $incremento = $tarifa * 0.50;
    }

    
    $valorServicios = $alimentacion + $internet + $maletero;


    $total = $tarifa + $incremento + $valorServicios;
            
    if ($edad > 30) {
        $descuento = $total * 0.10;
    }else {
        $descuento = $total * 0.15;
    }

    $calculoTotal = $tarifa + $incremento + $valorServicios - $descuento;

    $operacionesE = array( 
        'tarifa' => $tarifa, 
        'incremento' => $incremento,
        'valorServicios' => $valorServicios,
        'descuento' => $descuento,
        'calculoTotal' => $calculoTotal
    );

    /* print_r($contactos); */
    echo json_encode($operacionesE);
?>