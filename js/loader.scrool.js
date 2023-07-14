var myElement = document.getElementById('contato');
var formulario_agendamento = document.getElementById("agendamento");

function handleScroll() {
    var elementPosition = myElement.getBoundingClientRect();
    var windowHeight = window.innerHeight;
    var scrollHeight = document.documentElement.scrollHeight;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (elementPosition.top <= windowHeight) {
        formulario_agendamento.classList.remove("fixed");
        formulario_agendamento.classList.add("absolute");
    }else if(elementPosition.top){
        formulario_agendamento.classList.add("fixed");
        formulario_agendamento.classList.remove("absolute");
    }


}

window.addEventListener('scroll', handleScroll);
window.addEventListener('resize', handleScroll);