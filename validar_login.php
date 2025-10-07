<?php
session_start();
include("conexion.php");

if (isset($_POST['login'])) {
    $usuario  = trim($_POST['usuario']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $fila = $result->fetch_assoc();
        
        if (password_verify($password, $fila['password'])) {
            $_SESSION['usuario'] = $fila['usuario'];
            header("Location: bienvenida.php");
            exit;
        } else {
            echo "<p>Contraseña incorrecta</p>";
        }
    } else {
        echo "<p>Usuario no encontrado</p>";
    }
}
?>
