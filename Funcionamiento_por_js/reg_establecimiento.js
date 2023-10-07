// Variables globales
var slideIndex = 1;

// Función para avanzar o retroceder en el visualizador de imágenes
function plusSlides(n) {
  showSlide(slideIndex + n);
}

// Función para mostrar una imagen específica en el visualizador
function currentSlide(n) {
  showSlide(n);
}

// Función para mostrar una imagen en el visualizador
function showSlide(n) {
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  } else {
    slideIndex = n;
  }

  // Ocultar todas las imágenes
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Desactivar todos los puntos
  for (var i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Mostrar la imagen actual y activar el punto correspondiente
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// Función para cargar las imágenes
function cargarImagenes() {
  // Código para cargar las imágenes aquí

  // Luego de cargar las imágenes, actualiza el visualizador
  showSlide(slideIndex);
}

// Llamada a la función para cargar las imágenes
cargarImagenes();

document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slide ul");
  const slides = document.querySelectorAll(".slide li");
  const controls = document.querySelectorAll(".slider-control");

  let currentIndex = 0;
  const slideCount = slides.length;
  const slideWidth = slides[0].clientWidth;
  const intervalTime = 3000; // Cambia esto para ajustar el intervalo en milisegundos (3 segundos en este caso).

  function nextSlide() {
      currentIndex = (currentIndex + 1) % slideCount;
      updateSlider();
  }

  function updateSlider() {
      const translateX = -currentIndex * slideWidth;
      slider.style.transform = `translateX(${translateX}px)`;

      // Actualiza los botones de control
      controls.forEach((control, index) => {
          if (index === currentIndex) {
              control.classList.add("active");
          } else {
              control.classList.remove("active");
          }
      });
  }

  setInterval(nextSlide, intervalTime);

  // Agrega eventos a los botones de control
  controls.forEach((control, index) => {
      control.addEventListener("click", () => {
          currentIndex = index;
          updateSlider();
      });
  });
});