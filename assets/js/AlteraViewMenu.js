


function abrirPag(valor){
    var url = valor;

    xmlRequest.open("GET", url, true);
    xmlRequest.onreadystatechange = mudancaEstado;
    xmlRequest.send(null);

    if(xmlRequest.readyState = 1){
        document.getElementById("divmenu").innerHTML = "<img src='/assets/images/testes/anoyingTohru.gif'>";
    }
    return url;
}

function mudancaEstado(){
    if(xmlRequest.readyState == 4){
        document.getElementById("divmenu").innerHTML = xmlRequest.responseText;
    }
}
