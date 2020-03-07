<?php
if(isset($_POST['enviar']) && strlen($_POST['enviar']) > 0 ) {
	$remetenteNome = $_POST['nome'];
	$remetenteEmail = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];

	$mensagemConcatenada = 'Nome: ' . $remetenteNome . "\r\n";
	$mensagemConcatenada .= 'E-mail: ' . $remetenteEmail . "\r\n";
	$mensagemConcatenada .= 'WhatsApp: ' . $telefone . "\r\n";
	$mensagemConcatenada .= 'Mensagem: ' . $mensagem;

	$subject = "Site Missao Rama";
	// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
	// O return-path deve ser o mesmo e-mail do remetente.
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
	$headers .= "From: coordenacao@missaorama.com.br\r\n"; // remetente
	$headers .= "Return-Path: coordenacao@missaorama.com.br\r\n"; // return-path
	$envio = mail("contatomissaorama@gmail.com", $subject, $mensagemConcatenada, $headers);
	 
	if($envio){
		header('Location: http://missaoramadobrasil.com.br');
	}
	else {
		echo "A mensagem não pode ser enviada... ";
		echo '<a href="http://missaoramadobrasil.com.br">Retornar ao site</a>';
	}
} else {
	header('Location: http://missaoramadobrasil.com.br');
}
exit;

?>