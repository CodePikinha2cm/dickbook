function RecebeMenu(caminhoArquivoMenu){
var dados = new FormData();

dados.append('caminhoArquivoMenu',caminhoArquivoMenu )
    $.ajax({
        url:'/Service/ConteudoService.php',
        method: 'post',
        data: dados,
        processData: false,
        contentType: false,

    })
}