<?php
	//importação da biblioteca RedBean
	require 'rb.php';
	
	//Criação e configuração da conexão com o MySQL
	R::setup( 'mysql:host=localhost;dbname=agenda','root', '123456' ); 
	
	//Criando a tabela
	$sql = "UPDATE magenda SET nome = '" . addslashes($_POST['nome']) . "',telefone = '" . addslashes($_POST['telefone']) . "',celular = '" . addslashes($_POST['celular']) . "',endereco = '" . addslashes($_POST['endereco']) . "',email = '" . addslashes($_POST['email']) . "' WHERE id = " . addslashes($_POST['id']) . ";";
	R::exec( $sql);
	
	//Gravando no banco
	//R::store($agenda);
	
	//Chamando um view para o dado gravado
	header("Location:view.php");
?>