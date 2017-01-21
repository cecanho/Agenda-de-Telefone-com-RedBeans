<?php
	//importação da biblioteca RedBean
	require 'rb.php';
	
	//Criação e configuração da conexão com o MySQL
	R::setup( 'mysql:host=localhost;dbname=agenda','root', '123456' ); 
	
	//buscar um bean específico
	$bean = R::findOne('magenda', 'id = ?', array($_POST['id']));
	
	//O método trash apaga a linha selecionada
	R::trash($bean); 
	
	//Chamando um view para o dado gravado
	header("Location:view.php");
?>