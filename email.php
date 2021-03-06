<?php

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'receptor.php';
require 'vendor/autoload.php';
require 'conteudo.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPAutoTLS = true;

$mail->SMTPSecure = 'ssl';

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
 
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "bema20192@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "bemacash2019@";
//Set who the message is to be sent from
$mail->setFrom('bema20192@gmail.com', 'Equipe Bemacash');
//Set an alternative reply-to address
$mail->addReplyTo('bema20192@gmail.com', 'Equipe Bemacash');
//Set who the message is to be sent to
//$mail->addAddress('tassia.costa@totvs.com.br', 'Tassia Costa');
//Wilson
//$mail->addCC('wilson.tedokon@totvs.com.br');
//Fraga
//$mail->addCC('rafael.fraga@totvs.com.br');
//Tassia
$mail->addAddress('lucas.victor@totvs.com.br', 'Lucas da Cunha');

$mail->addAddress('luan.silva@totvs.com.br', 'Luan Silva');
//Set the subject line
$mail->Subject = 'Contato First (Serie 1) - ' . $_GET['sCnpj'];
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//
$respostaHTML = montaConteudo();

$mail->msgHTML($respostaHTML, __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = $nome;
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header('Location: /index.php?sucesso="true"');
}
//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl', '*' ) to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}

