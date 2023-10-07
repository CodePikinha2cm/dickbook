$(document).ready(function *(){
    
    for(var i = 0; i<=10; i++){
        var percent = Math.round(e.loaded / e.total * 100);
        $form.find('.progress-bar').width(percent + '%').html(percent + '%');
    }
    
    //progresso completo limpar a barra de progresso
    request.addEventListener('load', function(e){
        $form.find('.progress-bar').addClass('progress-bar-success').html('');
        //Atualizar a página após o upload completo
        setTimeout("window.open(self.location, '_self');", 1000);
    });
    
});