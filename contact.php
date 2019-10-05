<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$for = 'grge.dev@gmail.com'
$topic = 'Contacto Blog Github'
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($for, $topic, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('The mail was sent sucessfull'
window.location.href = 'https://arkthr-dev.github.io/blog/';
</script>";
} else {
echo 'Oops!. Something went wrong.';
}
}
?>