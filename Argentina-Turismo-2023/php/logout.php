<?php
// Iniciar o reanudar la sesión
session_start();

// Destruir todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario al inicio de sesión
echo '<script>
    window.location.href = "../login.html";
</script>'
?>

