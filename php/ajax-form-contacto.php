<?php

header('Content-type: application/json');

include_once 'class.phpmailer.php';




$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];

$cuerpo_email = "<h3>Nueva Consulta desde el Formulario Web de WORQ</h3>
                    <p>Nombre: <b>{$nombre}</b> </p>                    
                    <p>Email: <b>{$email}</b></p>
                    <p>Mensaje: <b>{$mensaje}</b></p>";


$mail = new PHPMailer;

$mail->IsSMTP();                           // tell the class to use SMTP

$mail->SMTPAuth = true;                  // enable SMTP authentication  
$mail->SMTPSecure = "tls";
$mail->Port = 587;                    // set the SMTP server port
$mail->Host = "smtp.gmail.com"; // SMTP server
$mail->Username = "formulario@worq.com.ar";     // SMTP server username
$mail->Password = "f0rmulario_de_worq_con_q";            // SMTP server password
// Enable encryption, 'ssl' also accepted

$mail->From = 'formulario@worq.com.ar';
$mail->FromName = 'Formulario de Contacto Worq';
$mail->addAddress('nicolas@worq.com.ar', 'Nicolas');  // Add a recipient

$mail->addReplyTo($email, $nombre);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Consulta WORQ';
$mail->Body = $cuerpo_email;


if (!$mail->send()) {

    echo json_encode(array('enviado' => FALSE, 'error-mailer' => $mail->ErrorInfo));
    exit;
}

echo json_encode(array('enviado' => TRUE));

exit;
?>
