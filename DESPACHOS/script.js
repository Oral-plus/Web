document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Verificar las credenciales (esto debería hacerse en el servidor en una aplicación real)
        if (username === 'aa' && password === 'aa') {
            // Credenciales válidas, redirigir a la página protegida
            window.location.href = 'paginaProtegida.html';
        } else {
            alert('Credenciales incorrectas');
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const logoutForm = document.getElementById('logoutForm');

    logoutForm.addEventListener('submit', function(event) {
        event.preventDefault();

        // Realiza una solicitud al servidor para cerrar la sesión
        // Esto dependerá de tu implementación del servidor
        // Puedes usar AJAX, fetch o cualquier otra técnica de solicitud HTTP aquí

        // Después de cerrar la sesión en el servidor, redirige al usuario a la página de inicio de sesión
        window.location.href = 'index.html';
    });
});