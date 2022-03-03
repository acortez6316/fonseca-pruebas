<?php
if(isset($_POST[= 'enviar'])) {
if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['numero']) && !empty($_POST['msg'])) {
$name = $_POST['nombre'];
$correo = $_POST['correo'];
$numero = $_POST['numero'];
$msg = $_POST['msg'];
$header = "from: noreplay@example.com" . "\r\n";
$header.= "replay to: noreplay@example.com" ."\r\n";
$header.= "X mailer: PHP/". phpversion();

$mail = mail($nombre, $correo, $numero, $msg, $header);

if  ($mail){
    echo "<h4> LA INFORMACION SE ENVIO CON EXITO</H4>"; 

            }
        }
    }
