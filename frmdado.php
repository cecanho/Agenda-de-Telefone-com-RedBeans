<?php
	//importação da biblioteca RedBean
	require 'rb.php';
	
	//Criação e configuração da conexão com o MySQL
	R::setup( 'mysql:host=localhost;dbname=agenda','root', '123456' ); 
	$id = $_POST['id'];
	$rows = R::findOne( 'magenda','id=?',array($id));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exemplo de agenda com RedBean">
    <meta name="author" content="Cristiano José Cecanho">
	<title>Agenda RedBean - Contatos</title>
</head>
<body>
	<header>
		<div>
			<h1>Agenda de telefones</h1>
			<hr></hr>
		</div>
	</header>
	<div>
		<h2>Atualizar contato:</h2>
		<form name='frm_atualiza' method='post' action='atualizar.php'>
			ID: <?php echo $rows->id; ?> <br /><input type="hidden" id="id" name="id" value="<?php echo $rows->id; ?>" />
			Nome: <br /><input type="TEXT" name="nome" id="nome" value="<?php echo $rows->nome; ?>" ><br />
			Telefone:<br /><input type="TEXT" name="telefone" id="telefone" value="<?php echo $rows->telefone; ?>" ><br />
			Celular:<br /><input type="TEXT" name="celular" id="celular" value="<?php echo $rows->celular; ?>" ><br />
			Endereço:<br /><input type="TEXT" name="endereco" id="endereco" value="<?php echo $rows->endereco; ?>" ><br />
			Email:<br /><input type="TEXT" name="email" id="email" value="<?php echo $rows->email; ?>" ><br />
			<button>Atualizar</button>
		</form>
	</div>
</body>
</html>
