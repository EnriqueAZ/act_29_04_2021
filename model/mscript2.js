function obtenerAjax(){
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

var ajax = obtenerAjax();

function peticionServidorB(){
    ajax.open("GET","model/script2.php?" + obtenerQueryStringB());
    ajax.onreadystatechange = respuestaServidorB;
    ajax.send(null);
}

function respuestaServidorB() {
    
    if (ajax.readyState == 4 && ajax.status == 200) {
        /* document.getElementById("resultadoB").innerHTML = ajax.responseText; */

        operacionesB = JSON.parse(ajax.responseText);
        document.getElementById("NombreVendedor").innerHTML = document.getElementById("NombreVendedor").value;
        document.getElementById("SalarioTotal").innerHTML = operacionesB.total;
        
    }
}

function obtenerQueryStringB(){
    var nombreVendedor = encodeURIComponent(document.getElementById("NombreVendedor").value); 
    var numeroCelularesVendidos = encodeURIComponent(document.getElementById("NumeroCelularesVendidos").value); 
    var valorTotalVentas = encodeURIComponent(document.getElementById("ValorTotalVentas").value); 
    var query = "NombreVendedor=" + nombreVendedor + "&NumeroCelularesVendidos=" + numeroCelularesVendidos + "&ValorTotalVentas=" + valorTotalVentas + "&nocache=" + Math.random();
    return query;
}