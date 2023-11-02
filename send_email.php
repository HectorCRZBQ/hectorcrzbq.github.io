<?php
if (isset($_POST['submit'])) {
    $to = "hectorcb3333@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $phone = $_POST['phone'];
    $dni = $_POST['dni'];
    $message = $_POST['message'];
    $subject = "Nuevo mensaje de contacto de $first_name $last_name";
    $content = "Nombre: $first_name\nApellido: $last_name\nTeléfono: $phone\nDNI: $dni\nMensaje: $message";
    $headers = "From: $from";
    mail($to, $subject, $content, $headers);
    echo "¡Gracias por tu mensaje!";
}
?>
