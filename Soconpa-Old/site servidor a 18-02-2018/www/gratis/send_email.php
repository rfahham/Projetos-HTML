<?php
$contact_name = $_POST['nome'];
$contact_email = $_POST['email'];
$contact_subject = $_POST['assunto'];
$contact_message = $_POST['mensagem'];

if( $contact_name == true )
{
	$sender = $contact_email;
	$receiver = "geral@soconpa.pt";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	$email_body = "Name: $contact_name \nEmail: $sender \n\nSubject: $contact_subject \n\nMessage: \n\n$contact_message \n\nIP: $client_ip \n\nFlash Contact Form provided by http://www.soconpa.pt";		
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

	if( mail( $receiver, "Flash Contact Form - $contact_subject", $email_body, $extra ) ) 
	{
		echo "success=yes";
	}
	else
	{
		echo "success=no";
	}
}
?>