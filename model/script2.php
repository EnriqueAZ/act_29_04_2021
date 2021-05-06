<?php
    $nombreVendedor = $_GET["NombreVendedor"];
    $numeroCelularesVendidos = $_GET["NumeroCelularesVendidos"];
    $valorTotalVentas = $_GET["ValorTotalVentas"];

    $total = $numeroCelularesVendidos * 10000 + 300000 + $valorTotalVentas * 0.05;

    $operacionesB = array( 
        'nombreVendedor' => $nombreVendedor, 
        'total' => $total
    );

    /* print_r($contactos); */
    echo json_encode($operacionesB);
?>