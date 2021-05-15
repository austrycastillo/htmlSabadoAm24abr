<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$para = "castilloaustry@gmail.com";
$asunto = "Contacto web mi primer site";
$cuerpo = "<h1 style=color:red>Contacto web,datos recibidos:</h1>Nombre: ".$nombre."<br>Edad: ".$edad."<br>Correo eletrónico: ".$correo."<br>Mensaje: ".$mensaje."<br>Chaito";
$cabecera = "From:" . $para . "\r\n";
$cabecera.= "MIME-Version: 1.0\r\n";
$cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";
if ( !mail($para,$asunto,$cuerpo,$cabecera)) {
    echo "E-Mail no enviado";
     
} else {
    echo "E-Mail  enviado";
    
}