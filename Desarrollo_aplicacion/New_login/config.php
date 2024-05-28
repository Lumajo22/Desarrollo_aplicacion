<?php
$conn = mysqli_connect('localhost', 'root', '', 'user_db');

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
