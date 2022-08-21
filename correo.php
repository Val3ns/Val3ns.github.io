<?php

$destinatario = 'Valensbayard9@gmail.com';

$asunto = $_POST ['asunto'];

$nombre = $_POST ['nombre'];



$mensaje = $_POST ['mensaje'];

$email = $_POST ['email'];




$header = "Enviado Desde La Pagina De Valens";
$mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $header, $mensajecompleto );
echo "<script>alert('correo enviado Exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\", 10000) </script>";

?>