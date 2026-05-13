<?php
// mail/contact.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Estas rutas son correctas porque los archivos están en la misma carpeta.
require 'vendor/autoload.php';
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"] ?? '';
    $email = $_POST["email"] ?? '';
    $asunto = $_POST["subject"] ?? '';
    $mensaje = $_POST["message"] ?? '';

    $mail = new PHPMailer(true);

    try {
        // Mantenemos la depuración activa para la prueba final.
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Contenido del correo
        $mail->setFrom('ventas@jtimports.com.mx', 'Ventas JT Imports');
        $mail->addAddress('ventas@jtimports.com.mx', 'Ventas JT Imports');
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = "Nuevo mensaje desde el sitio web: $asunto";
        $mail->Body    = "
            <h3>Nuevo mensaje desde el formulario:</h3>
            <p><strong>Nombre:</strong> $nombre</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Asunto:</strong> $asunto</p>
            <p><strong>Mensaje:</strong><br>$mensaje</p>
        ";

        $mail->send();
        
        // Limpiamos la salida de depuración antes de enviar la respuesta final.
        ob_clean();
        echo "Mensaje enviado con éxito.";

    } catch (Exception $e) {
        // Limpiamos la salida de depuración antes de enviar la respuesta final.
        ob_clean(); 
        echo "Error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>