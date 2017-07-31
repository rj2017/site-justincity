<?php

$to 	 		= "opbjustincity@gmail.com";
$subject 		= "Formulario de Envio dos Dados Basca";
// Passando os dados obtidos pelo formulario para as variaveis abaixo
$nomecompleto	= $_POST['nome'];
$rg 	 		= $_POST['rg'];
$telefone      	= $_POST['telefone'];
$idade   		= $_POST['idade'];

/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<strong>Formulario de Envio dos Dados</strong>
<p><b>Nome:</b> '.$nomecompleto.'
<p><b>RG:</b> '.$rg.'
<p><b>Telefone:</b> '.$telefone.'
<p><b>Idade:</b> '.$idade.'</p>
<hr>';

// O remetente deve ser um e-mail do seu dominio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers  = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
//$headers .= "From: 'contato@justincity.com.br' \r\n"; // remetente
$headers .= "Return-Path: $to \r\n"; // return-path

$envio = mail($to,$subject,$mensagemHTML,$headers);

if($envio)
echo '<script>alert("Formulário enviado com sucesso!")</script>';
echo "<script>location.href='index.php'</script>";
die();// Pagina que sera redirecionada

?>