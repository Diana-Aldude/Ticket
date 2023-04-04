<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>
<label for=""><strong>SN:</strong></label>
 <input name="sn" type="text"  autocomplete="off">

<label for=""><strong>razon social:</strong></label>
 <input name="rz" type="text"  autocomplete="off">

<label for=""><strong>ruc:</strong></label>
 <input name="ruc" type="text"  autocomplete="off">

<label for=""><strong>cid:</strong></label>
 <input name="cid" type="text"  autocomplete="off">

<label for=""><strong>email:</strong></label>
 <input name="email" type="text"  autocomplete="off">

<label for=""><strong>cid:</strong></label>
 <input name="cid" type="text"  autocomplete="off">

</form>

<?php

require 'vendor/autoload.php';
// Incluir la librería de PHPMailer
require 'vendor/PHPMailer/phpmailer';

// Crear una instancia de PHPMailer
$mail = new PHPMailer();

// Configurar las opciones de envío de correo electrónico
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'tu-correo@gmail.com';
$mail->Password = 'tu-contraseña';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configurar las opciones del mensaje de correo electrónico
$mail->setFrom('tu-correo@gmail.com', 'Tu Nombre');
$mail->addAddress('destinatario@outlook.com');
$mail->Subject = 'Asunto del correo electrónico';

// Crear la tabla con los datos del formulario
$table = '<table>';
$table .= '<tr><th>SN</th><td>' . $_POST['sn'] . '</td></tr>';
$table .= '<tr><th>Razón social</th><td>' . $_POST['rz'] . '</td></tr>';
$table .= '<tr><th>RUC</th><td>' . $_POST['ruc'] . '</td></tr>';
$table .= '<tr><th>CID</th><td>' . $_POST['cid'] . '</td></tr>';
$table .= '<tr><th>Email</th><td>' . $_POST['email'] . '</td></tr>';
$table .= '<tr><th>CID</th><td>' . $_POST['cid'] . '</td></tr>';
$table .= '</table>';

// Agregar la tabla al cuerpo del mensaje de correo electrónico
$mail->isHTML(true);
$mail->Body = $table;

// Enviar el mensaje de correo electrónico
if($mail->send()) {
  // Abrir la ventana de trabajo de Outlook
  echo '<script>window.location.href="mailto:destinatario@outlook.com";</script>';
} else {
  echo 'Error al enviar el correo electrónico: ' . $mail->ErrorInfo;
}
?>




</body>
</html>