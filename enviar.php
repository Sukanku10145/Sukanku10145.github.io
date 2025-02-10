<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar los datos de entrada
    $nombre = htmlspecialchars($_POST["nombre"]);
    $apellidos = htmlspecialchars($_POST["apellidos"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $comentario = htmlspecialchars($_POST["comentario"]);

    // Validar que los campos no estén vacíos
    if (empty($nombre) || empty($apellidos) || empty($email) || empty($comentario)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    // Destinatario del correo
    $para = "jrodper14@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje del formulario";

    // Contenido del correo
    $mensaje = "Nombre: $nombre $apellidos\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Mensaje:\n$comentario";

    // Encabezados adicionales
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar el correo
    if (mail($para, $asunto, $mensaje, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>