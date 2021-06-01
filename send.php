<?php

$user=$_POST[user];
$email=$_POST[email];
$reason=$_POST[reason];
$message=$_POST[message];
$para = 'morillo0210angel@gmail.com';
$titulo = 'angelom102.github.io contact!';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $user\n E-Mail: $email\n Razón: $reason\n Mensaje:\n $message";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://TUSITIOWEB.COM';
</script>";
} else {
echo 'Falló el envio';
}
}
?>