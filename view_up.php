<?php
	//importação da biblioteca RedBean
	require 'rb.php';
	
	//Criação e configuração da conexão com o MySQL
	R::setup( 'mysql:host=localhost;dbname=agenda','root', '123456' ); 
	
	$rows = R::getAll( 'select * from magenda' );
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
		<h2>Meus contatos:</h2>
		<table border='1'>
		<th>ID</th><th>Nome</th><th>Telefone</th><th>Celular</th><th>Endereço</th><th>Email</th>
		<form name='frm_atualiza' method='post' action='frmdado.php'>
		<?php
			foreach($rows as $row){
				echo '<tr><td><input type="radio" id="id" name="id" value="' . $row['id'] . '">' . $row['id'] . '</td><td>' . $row['nome'] .'</td><td>' . $row['telefone'] . '</td><td>' . $row['celular'] . '</td><td>' . $row['endereco'] . '</td><td>' . $row['email'] . '</td></tr>'; 
			}
		?>
		</table>
		
			<button>Selecionar e Continuar</button>
		</form>
	</div>
</body>
</html>
