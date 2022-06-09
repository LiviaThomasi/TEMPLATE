<?php

if(isset($_POST)){

	//var_dump ($_POST['enviar']);
	$nome=$_POST['nome'];
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];

	require './PHPMailer/src/PHPMailer.php'; 
	require './PHPMailer/src/SMTP.php'; 
	require './PHPMailer/src/Exception.php'; 

	use  PHPMailer/PHPMailer/PHPMailer; 
    
	$mail = new PHPMailer(true); 
	try{ 
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP(); 
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'liviathomasipinto@gmail.com';
		$mail->Password = 'senha'; 
		$mail->Port = 587;
		$mail->setFrom('liviathomasipinto@gmail.com'); 
		$mail->addAddress('liviathomasipinto@gmail.com'); 
		$mail->addAddress('liviathomasipinto@gmail.com'); 
	$mail->isHTML(true); 
	$mail->Subject  = $nome; 
	$mail->Body = $assunto;
	$mail->AltBody = $mensagem;
	if($mail->send()) { echo 'Email enviado com sucesso'; 
	}else{ echo 'Email não enviado'; } }
	catch (Exception $e)
	{ echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";}
}


