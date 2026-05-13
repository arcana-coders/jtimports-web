<?php
// mail/newsletter.php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    
    $suscriptor_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (filter_var($suscriptor_email, FILTER_VALIDATE_EMAIL)) {
        
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor (la misma que ya tienes)
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = SMTP_USER;
            $mail->Password = SMTP_PASS;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // A quién se le envía la notificación
            $mail->setFrom(SMTP_USER, 'JT Imports Newsletter');
            $mail->addAddress(SMTP_USER); // ¡Te lo envías a ti mismo!

            // Contenido del correo de notificación
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = '¡Nueva Suscripción al Newsletter!';
            $mail->Body    = "<h3>Un nuevo usuario se ha suscrito a tu newsletter:</h3>
                              <p><strong>Correo electrónico:</strong> $suscriptor_email</p>";
            $mail->AltBody = "Nuevo suscriptor: $suscriptor_email";

            $mail->send();
            
            // Si todo sale bien, envía una respuesta HTTP 200 (OK)
            http_response_code(200);
            echo "OK";

        } catch (Exception $e) {
            // Si hay un error, envía una respuesta HTTP 500
            http_response_code(500);
            echo "Error: {$mail->ErrorInfo}";
        }
    } else {
        // Correo no válido
        http_response_code(400);
        echo "Correo no válido";
    }
} else {
    // Petición no válida
    http_response_code(403);
    echo "Acceso no permitido";
}
?>