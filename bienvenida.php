<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bienvenida.css">

  <title>Bienvenido</title>
</head>
<body>
  <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎉</h2>

    <h1>Página Principal</h1>
    
    <p>Bienvenido a nuestro <strong><i>solsalud</i></strong>​. <br> Esta es la página principal donde puedes navegar hacia otras Paginas.</p>
    
    <h2>Navegación</h2>
    <ul>
        <li><a href="#">Consultas </a></li>
        <li><a href="#">Servicios ​</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
    
    <h2><i>Imagen con enlace</i> </h2>
    <a href="#">
        <img src="https://www.elespectador.com/resizer/v2/VU3MX4DPMJECBNII3QATRF3Q3E.jpg?auth=e03130e151a44a8f610adad4bf72aea4ba06ca4c36339abb86b302e0785de4cd&width=920&height=613&smart=true&quality=60" width="300" height="200">
    </a>
    <p>Haz clic en la imagen para ir a la página de productos.</p>

  <a href="logout.php">Cerrar sesión</a>
</body>
</html>
