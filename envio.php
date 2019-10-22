<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

echo $nombre. " ha enviado: <br/> " .$mensaje;
echo $email;

if(mail('sergiogomez97rodriguez@gmail.com', $email, $mensaje)){
    echo "Mail enviado!"
}else {
    echo "Fallo de envio."
}

?>