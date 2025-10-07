<?php
$local = "localhost";
$xampp = "root"; // usuario por defecto en XAMPP
$contraseña = "";     // contraseña vacía por defecto
$basedatos  = "camilo_login";

$conn = new mysqli($local, $xampp, $contraseña, $basedatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
