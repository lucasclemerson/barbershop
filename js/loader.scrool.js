var myElement = document.getElementById('carousel');
var formulario_agendamento = document.getElementById("agendamento");

function handleScrollForm() {
    var elementPosition = myElement.getBoundingClientRect();
    var windowHeight = window.innerHeight;
    var scrollHeight = document.documentElement.scrollHeight;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // formulario
    if (elementPosition.top <= windowHeight) {
        formulario_agendamento.classList.remove("fixed");
        formulario_agendamento.classList.add("absolute");
    }else if(elementPosition.top){
        formulario_agendamento.classList.add("fixed");
        formulario_agendamento.classList.remove("absolute");
    }

    if (document.getElementById('footer').getBoundingClientRect().top <= windowHeight){
        document.getElementById('topo').classList.add("fixed");
        document.getElementById('topo').classList.remove("absolute");
    }else{
        document.getElementById('topo').classList.remove("fixed");
        document.getElementById('topo').classList.add("absolute");
    }
}

function rolarAteOTopo() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

setInterval(handleScrollForm,1000);
window.addEventListener('scroll', handleScrollForm);
window.addEventListener('resize', handleScrollForm);
