<?php

$Nome		= $_POST["Nome"];
$Fone		= $_POST["Fone"];
$Email		= $_POST["Email"];	
$Cnpj	    = $_POST["Cnpj"];	

$Conteudo = "<b>Nome</b>: $Nome\n\nE-mail: $Email\n\nTelefone: $Fone\n\nCNPJ/CPF: $Cnpj\n";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'bemagestao2019@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'gestao2019');		            // <-- Insira aqui a senha do seu GMail

echo "<p> Passou aqui </p>";

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		        // Ativar SMTP
	$mail->SMTPDebug = 0;		    // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		    // Autenticação ativada
	$mail->SMTPSecure = 'ssl';	    // SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		    // A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

if (smtpmailer('lucas.victor@totvs.com', 'bemagestao2019@gmail.com', 'Form de Contato', 'Contato First (Série 1)', $Conteudo)) {

	Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;

?>