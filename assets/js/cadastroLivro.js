$(document).ready(function() {
    $("button").click(function(event){

        event.preventDefault();
        var titulo = $('#nome_cad').val();
        var patrimonio = $('#patrimonio').val();
        var exemplar = $('#exemplar').val();
        var autor = $('#autor').val();
        var edicao = $('#edicao').val();
        var numero_paginas = $('#caracteristica').val();
        var localizacao = $('#localizacao').val();
        var cdd = $('#cdd').val();

        var dados = {
            titulo: titulo,
            patrimonio: patrimonio,
            exemplar: exemplar,
            autor: autor,
            edicao: edicao,
            numero_paginas: numero_paginas,
            localizacao: localizacao,
            cdd: cdd
        }

        var contador = 0;
        var campo = "";
        
        for (var prop in dados) {
            console.log(prop);
            console.log(dados[prop]);
            if(dados[prop] === ""){
               swal.fire("Algum campo não foi informado", "", "warning");
            }
        }
        if(dados.titulo == ''){
            document.getElementById("nome_vazio").innerText = "Titulo vazio";
        }
        
      });
})



