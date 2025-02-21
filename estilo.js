const carouselabajoItems = document.querySelectorAll('.carouselabajo-item');
let currentItem = 0;

function showNextItem() {
  // Oculta el elemento actual
  carouselabajoItems[currentItem].classList.remove('active');
  
  // Actualiza el índice del siguiente elemento
  currentItem = (currentItem + 1) % carouselabajoItems.length;
  
  // Muestra el siguiente elemento
  carouselabajoItems[currentItem].classList.add('active');
}

// Inicia el carrusel
showNextItem();
setInterval(showNextItem, 5000); // Cambia de imagen cada 5 segundos
