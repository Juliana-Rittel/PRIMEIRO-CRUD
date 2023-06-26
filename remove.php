<!DOCTYPE html>
<html>
<head>
	<title>Removendo produto</title>
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
	<br>
	<p>Tem certeza que deseja remover este produto?</p>
	<form action="destroy.php" action="GET">
		<input 
			type="hidden" 
			name="aluno_id" 
			value="<?php echo($aluno['id']) ?>">
			<br>
			<a id= remove href="index.php">Não</a>
			<br>
			<br>
			<button type="submit">Sim</button>
	</form>
</body>
</html>