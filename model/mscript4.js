function obtenerAjax(){
    if (window.XMLHttpRequest) {
        xhttp = new XMLHttpRequest();
    }else{
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xhttp;
}

var ajax = obtenerAjax();

function peticionServidorD(){
    ajax.open("GET","model/script4.php?" + obtenerQueryStringD());
    ajax.onreadystatechange = respuestaServidorD;
    ajax.send(null);
}

function respuestaServidorD() {
    
    if (ajax.readyState == 4 && ajax.status == 200) {
        /* document.getElementById("resultadoD").innerHTML = ajax.responseText; */

        operacionesD = JSON.parse(ajax.responseText);
        document.getElementById("Imc").innerHTML = operacionesD.imc;
        document.getElementById("Categoria").innerHTML = operacionesD.categoria;
    }
}

function obtenerQueryStringD(){
    var peso = encodeURIComponent(document.getElementById("Peso").value); 
    var longitud = encodeURIComponent(document.getElementById("Longitud").value); 
    var query = "peso=" + peso + "&longitud=" + longitud + "&nocache=" + Math.random();
    return query;
}