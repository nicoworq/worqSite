<?php


/*
 * AJAX CONTACTO
 * 
 * AUTOR: Nicolas Monjelat
 * VERSION 1.0
 * 
 * 
 */


header('Content-type: application/json');

$honeyPot = filter_input(INPUT_POST, 'sex', FILTER_SANITIZE_STRING);

$mensaje = filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_STRING);
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
$telefono = filter_input(INPUT_POST, 'telefono', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$necesito = $_POST['necesito'];

//Descarto por ser un bot!
if ($honeyPot) {
    echo json_encode(array('enviado' => TRUE, 'trucho-sex' => TRUE));
    die();
}

if (is_null($nombre) || is_null($email)) {
    echo json_encode(array('enviado' => TRUE, 'trucho-vacio' => TRUE));
    die();
}

//REGLAS DE SPAM
if (substr_count($mensaje, '$') > 2 || substr_count($mensaje, '.com') > 3 || substr_count($mensaje, '.xxx') > 1) {
    echo json_encode(array('enviado' => TRUE, 'trucho' => TRUE, 'spam-loco' => TRUE));
    die();
}

$necesito_txt = '';
foreach ($necesito as $n) {
    $necesito_txt = $necesito_txt . ' --  ' . strip_tags($n);
}

$cuerpo_email = "<h3>Nueva Consulta desde el Formulario Web de WORQ</h3>
                    <p>Nombre: <b>{$nombre}</b> </p>     
                    <p>Email: <b>{$email}</b></p>
                    <p>Telefono: <b>{$telefono}</b></p>                    
                    <p>Mensaje: <b>{$mensaje}</b></p>
                    <p>Necesito: <b>{$necesito_txt}</b></p>";


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
$mail->addAddress('juan@worq.com.ar', 'Juan');  // Add a recipient

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

