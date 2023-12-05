<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "mariogarciasaz@gmail.com"; // Reemplaza con tu dirección de correo electrónico
    $subject = "Nuevo mensaje de contacto de $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
