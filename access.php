<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Token único que debe estar en la URL (el mismo que usará el QR)
$token_valido = "plazadeespana07/12/2024";

// Si ya tiene sesión, permite el acceso
if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"] === true) {
    return;
}

// Si el token está en la URL y es válido, guarda la sesión
if (isset($_GET["access"]) && $_GET["access"] === $token_valido) {
    $_SESSION["access_granted"] = true;
} else {
    // Redirigir o bloquear acceso si no tiene el token correcto
    die("Acceso denegado. Escanea el QR para acceder.");
}
?>
