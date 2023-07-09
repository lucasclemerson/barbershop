var logomarca = document.getElementsByClassName('logomarca')[0];
var navegacao = document.getElementsByClassName('navegacao')[0];
var icone = document.createElement('i');

$("#button-hamburger").on('click', function(){
    this.innerHTML = "";
    if (navegacao.style.display == 'none'){
        icone.setAttribute("class", "bi bi-x-lg");
        navegacao.style.display = 'flex';
        logomarca.style.display = 'none';

    }else{
        icone.setAttribute("class", "bi bi-list");
        logomarca.style.display = 'block';
        navegacao.style.display = 'none';   
    }
    this.appendChild(icone);  
});