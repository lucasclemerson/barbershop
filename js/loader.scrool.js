var carouselElement = document.getElementById('carousel');
var mainElement = document.getElementById("main");
var formulario_agendamento = document.getElementById("agendamento");
var headerElement = document.getElementsByTagName("header")[0];



function handleScrollForm() {
    var carouselPosition = carouselElement.getBoundingClientRect();
    var windowHeight = window.innerHeight;
    var scrollHeight = document.documentElement.scrollHeight;
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // formulario
    /*
    if (carouselPosition.top <= windowHeight || mainElement.getBoundingClientRect().top < windowHeight) {
        formulario_agendamento.classList.remove("fixed");
        formulario_agendamento.classList.add("absolute");
    }else if(carouselPosition.top){
        formulario_agendamento.classList.add("fixed");
        formulario_agendamento.classList.remove("absolute");
    }*/

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
