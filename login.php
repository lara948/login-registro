<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <h1>SOLSALUD</h1> <!-- Aquí puedes poner tu propio nombre/logo -->
    </div>

    <form method="POST" action="validar_login.php" class="formulario">
      <h2>Acceder</h2>
      <label for="usuario">Nombre de Usuario</label>
      <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" placeholder="Contraseña" required>

      <button type="submit" name="login">ACCEDER</button>

      <div class="links">
        <a href="#">¿Olvidaste tu contraseña?</a> |
        <a href="resgistro.php">Crear cuenta</a>
      </div>
    </form>
  </div>
</body>
</html>


