<?php
	//importação da biblioteca RedBean
	require 'rb.php';
	
	//Criação e configuração da conexão com o MySQL
	R::setup( 'mysql:host=localhost;dbname=agenda','root', '123456' ); 
	
	//Criando a tabela
	$minha_agenda = R::dispense('magenda');
	
	//Pegando dados do formulário e adicionando ao objeto
	$minha_agenda->nome = addslashes($_POST['nome']);
	$minha_agenda->telefone = addslashes($_POST['telefone']);
	$minha_agenda->celular = addslashes($_POST['celular']);
	$minha_agenda->endereco = addslashes($_POST['endereco']);
	$minha_agenda->email = addslashes($_POST['email']);
	
	//Gravando no banco
	$id = R::store($minha_agenda);
	
	//Chamando um view para o dado gravado
	header("Location:view.php");
?>