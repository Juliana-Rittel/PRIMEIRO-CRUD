<!DOCTYPE html>
<html>
<head>
	<title>Atualizando produto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// recuperar os dados da requisição
		$aluno_id = '';
		$nome = '';
		$valor = '';
        $descricao = '';
		
		// validando campo nome
		if(isset($_POST['nome'])){
			$nome = $_POST['nome'];
		}

		// validando campo valor
		if(isset($_POST['valor'])){
			$valor = $_POST['valor'];
		}
        // validando campo ra
        if(isset($_POST['descricao'])){
              $descricao = $_POST['descricao'];
        }
		// validando campo aluno_id
		if(isset($_POST['aluno_id'])){
			$aluno_id = $_POST['aluno_id'];
		}

		// conexão com o banco
		if(empty($nome) && empty($valor) && empty($descricao) && empty($aluno_id)){
			echo("Os campos nome, valor e descrição não podem ser vazios");
			exit();
		}

		// conectando no banco de dados
		$usuario = "root";
		$senha = "";
		$pdo = new PDO(
			"mysql:host=localhost;dbname=ed3",
			$usuario,
			$senha
		);

		$atualizaaluno = $pdo->prepare(
			"UPDATE loja 
			SET nome=?, valor=?, descricao=?
			WHERE id=?"
		);

		$atualizaaluno->execute([
			$nome,
			$valor,
            $descricao,
			$aluno_id
		]);
        

		echo "Produto atualizado com sucesso..";
	}
?>
<a href="index.php">Voltar</a>
</body>
</html>
