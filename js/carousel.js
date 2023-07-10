var carousel = document.querySelector('.carousel');
var slideWidth = document.querySelector('.slide').offsetWidth;

function previousSlide() {
  carousel.style.transform = 'translateX(' + (slideWidth) + 'px)';
  carousel.insertBefore(carousel.lastElementChild, carousel.firstElementChild);
  setTimeout(function() {
    carousel.style.transition = 'none';
    carousel.style.transform = 'translateX(0)';
    setTimeout(function() {
      carousel.style.transition = 'transform 0.3s ease-in-out';
    }, 50);
  }, 300);
}

function nextSlide() {
  carousel.style.transform = 'translateX(' + (-slideWidth) + 'px)';
  carousel.appendChild(carousel.firstElementChild);
  setTimeout(function() {
    carousel.style.transition = 'none';
    carousel.style.transform = 'translateX(0)';
    setTimeout(function() {
      carousel.style.transition = 'transform 0.3s ease-in-out';
    }, 50);
  }, 300);
}
