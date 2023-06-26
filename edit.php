<!DOCTYPE html>
<html>
<head>
	<title>Atualizar os dados de um produto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
		// conexão com o banco
		$usuario = "root";
		$senha = "";
		$pdo = new PDO(
			"mysql:host=localhost;dbname=ed3",
			$usuario,
			$senha
		);

		# validando se não existe a chave aluno_id
		if(!isset($_GET['aluno_id'])){
			echo("Produto invalido...");
			exit();
		}

		$aluno_id = $_GET['aluno_id'];
		$aluno = $pdo->query(
			"SELECT * FROM `loja` WHERE id=$aluno_id"
		)->fetch();
	?>
	<br>
	<form action="update.php" method="POST">
		<input 
			type="hidden" 
			name="aluno_id" 
			value="<?php echo($aluno['id']) ?>">
		Nome: <input 
			type="text" 
			name="nome" 
			placeholder=""
			value="<?php echo($aluno['nome']) ?>">
		<br>
		Valor: <input 
			type="text" 
			name="valor"
			placeholder=""
			value="<?php echo($aluno['valor']) ?>">
        <br>
        Descrição: <input 
			type="text" 
			name="nome" 
			placeholder=""
			value="<?php echo($aluno['descricao']) ?>">
		<br>
		<br>
			<button type="submit"> Atualizar </button>
			<br>
	</form>
	<br>
	<a href="index.php">Voltar</a>
</body>
</html>