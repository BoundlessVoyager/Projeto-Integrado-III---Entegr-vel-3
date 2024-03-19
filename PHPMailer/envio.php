<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$nome = $_POST['nome']; // Nome do usuário que deseja receber e-mail deve ser encaminhado via formulário.
$comentario = $_POST['comentario']; // Comentário do usuário que deseja receber e-mail deve ser encaminhado via formulário.

try{

	if(!empty($nome) && !empty($comentario)){
	
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = ''; // E-mail que vamos utilizar
		$mail->Password = ''; // Senha do e-mail
		$mail->Port = 587;
		
		$mail->setFrom(''); // E-mail de origem
		$mail->addAddress(''); // E-mail do destinatário
		
		$mail->isHTML(true);
		$mail->Subject = 'Nome: '.$nome;
		$mail->Body = $nome." enviou o comentário: ".$comentario;
		//$mail->AltBody = 'corpo alternativo';
		
		if($mail->send()){
			header("Location: ../visual/Ajuda.php"); // Para onde o usuário deve ser encaminhado caso o e-mail seja enviado com sucesso.
			$_SESSION['deu']=true;
		}else{
			echo "Error: o e-mail não pôde ser enviado"; 
		}
	}else{
		header("Location: ../visual/Ajuda.php"); // Para onde o usuário deve ser encaminhado caso um dos dados esteja em branco.
	}
}catch(Exception $e){
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

?>
