<?php
    /* $salarioMensual = $_GET["SalarioMensual"]; 
        $retencionFuente = $salarioMensual * 0.1;
        $aportesSalud = $salarioMensual * 0.4 * 0.125;
        $aportesPension = $salarioMensual * 0.4 * 0.16;
        $baseCotizacion = $salarioMensual * 0.4; */
        $salarioMensual = $_GET["SalarioMensual"];

        $baseCotizacion = $salarioMensual * 0.4;

        $retencionFuente = $salarioMensual * 0.1;
        $aportesSalud = $baseCotizacion * 0.125;
        $aportesPension = $baseCotizacion * 0.16;
        $calculoTotal = $salarioMensual - $retencionFuente - $aportesPension - $aportesSalud;

        $operacionesA = array( 
            'salarioMensual' => $salarioMensual, 
            'baseCotizacion' => $baseCotizacion, 
            'retencionFuente' => $retencionFuente, 
            'aportesSalud' => $aportesSalud, 
            'aportesPension' => $aportesPension, 
            'calculoTotal' => $calculoTotal 
        );

        /* print_r($contactos); */
        echo json_encode($operacionesA);
?>   