<?php

 if (isset($_POST['email']) && !empty($_POST["e-mail"])) {
$nome = addslashes($_POST["name"])
$email = addslashes($_POST["email"])
$setor = addslashes($_POST["setor"])
$mensagem = addslashes($_POST["message"])


$to "mateus.adac2@gmail.com";
$subject "contato - teste php"
$body = "Nome:" .$nome. "\n".
        "Email:" .$email. "\n".
        "Mensagem:" .$mensagem. "\n".
        "Setor:" .$setor. "\n";   

$header = "from:mateus.adac2@gmail.com"."\r\n"."reply-to:".$email . "x=mailer:php/" . phpversion();


if (mail($to,$subject,$body,$header)) {
    echo("E-mail enciado com sucesso!")
} 
else {"E-mail não pode ser enviado!"
}
 }



?>