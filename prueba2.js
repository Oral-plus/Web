// Array de productos
let productosCepillos = [
    { 
        nombre: 'Ristra Cepillo Dental Original', 
        precio: 10.800 * 1000,  
        codigo: 50360251, 
        img: 'imgmayorista/originalflex.png',
        url: 'https://outlook.office.com/mail/' // URL específica para este producto
    },
    { 
        nombre: 'Cep Original Flex Ristra X 12', 
        precio: 13.000 * 1000,  
        codigo: 50360249, 
        img: 'imgmayorista/RISTRACEPILLORIGINAL12.png',
        url: 'https://tuurl.com/producto2' // URL específica para este producto
    },
    // ... agrega más productos según sea necesario
];

// Función para crear y mostrar las imágenes de los productos
function mostrarProductos() {
    productosCepillos.forEach(producto => {
        // Crear un elemento de imagen
        const img = document.createElement('img');
        img.src = producto.img; // Establecer la fuente de la imagen
        img.alt = producto.nombre; // Texto alternativo para la imagen
        img.style.cursor = 'pointer'; // Cambiar el cursor al pasar sobre la imagen

        // Agregar un evento de clic a la imagen
        img.addEventListener('click', () => {
            window.location.href = producto.url; // Redireccionar a la URL del producto
        });

        // Añadir la imagen al cuerpo del documento (o a un contenedor específico)
        document.body.appendChild(img); // O usa otro contenedor si prefieres
    });
}

// Llama a la función para mostrar los productos
mostrarProductos();
