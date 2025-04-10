<?php
$name = $_POST[''];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@zyphos.com.mx';
$email_subject = 'New Form Submission';
$email_body = "Nombre del usuario: $name.\n"
              "Email del usuario: $visitor_email.\n"
              "Asunto: $subject.\n"
              "Mensaje: $message.\n";
              
$to = 'diego.gallardo@zyphos.com.mx'; 
$headers = "De: $email_from \r\n"; 
$headers .= "Respuesta a: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contacto.html");
?>