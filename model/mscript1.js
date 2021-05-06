function obtenerAjax(){
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

var ajax = obtenerAjax();

function peticionServidorA(){
    ajax.open("GET","model/script1.php?" + obtenerQueryStringA());
    ajax.onreadystatechange = respuestaServidorA;
    ajax.send(null);
}

function respuestaServidorA() {
    
    if (ajax.readyState == 4 && ajax.status == 200) {
        /* document.getElementById("resultadoA").innerHTML = ajax.responseText; */

        operacionesA = JSON.parse(ajax.responseText);
        document.getElementById("SalarioMensual").innerHTML = document.getElementById("SalarioMensual").value;
        document.getElementById("RetencionFuente").innerHTML = operacionesA.retencionFuente;
        document.getElementById("BaseCotizacion").innerHTML = operacionesA.baseCotizacion;
        document.getElementById("AportesSalud").innerHTML = operacionesA.aportesSalud;
        document.getElementById("AportesPension").innerHTML = operacionesA.aportesPension;
        document.getElementById("CalculoTotal").innerHTML = operacionesA.calculoTotal;
                
    }
}

function obtenerQueryStringA(){
    var salarioMensual = encodeURIComponent(document.getElementById("SalarioMensual").value); 
    var query = "SalarioMensual=" + salarioMensual + "&nocache=" + Math.random();
    return query;
}