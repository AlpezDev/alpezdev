<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $asunto = "Suscripción al boletín";
    $mensaje = "¡Hola!\n\nMe gustaría suscribirme a tu boletín para recibir actualizaciones y noticias sobre tu trabajo.\n\n¡Gracias!";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail("alpezdev@gmail.com", $asunto, $mensaje, $headers)) {
        echo "Correo electrónico enviado con éxito.";
    } else {
        echo "Error al enviar el correo electrónico.";
    }
}
?>