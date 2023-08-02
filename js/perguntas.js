function mostrarResposta (index){
    var resposta = document.getElementsByClassName('resposta');
    for (let i = 0; i < resposta.length; i++){
        if (i != (index-1)){
            resposta[i].style.display = 'none';
        }
    }    
    if (resposta[index-1].style.display == 'none'){
        resposta[index-1].style.display = 'block';
    }else{
        resposta[index-1].style.display = 'none';
    }
}

