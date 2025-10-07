<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <h1>SOLSALUD</h1>
    </div>

    <form method="POST" action="" class="formulario">
      <h2>Crear cuenta</h2>

      <label for="usuario">Usuario</label>
      <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" required>

      <label for="email">Correo electrónico</label>
      <input type="email" name="email" id="email" placeholder="Correo electrónico" required>

      <label for="password">Contraseña</label>
      <input type="password" name="password" id="password" placeholder="Contraseña" required>

      <button type="submit" name="registrar">REGISTRAR</button>

      <div class="links">
        <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
      </div>
    </form>
  </div>
</body>
</html>

<?php
if (isset($_POST['registrar'])) {
    $usuario  = trim($_POST['usuario']);
    $email    = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (usuario, email, password) VALUES ('$usuario','$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario registrado con éxito'); window.location='login.php';</script>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

