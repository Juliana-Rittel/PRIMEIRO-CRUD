<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'GET'){

		// recuperar os dados da requisição
		$aluno_id = '';

		// validando campo aluno_id
		if(isset($_GET['aluno_id'])){
			$aluno_id = $_GET['aluno_id'];
		}

		// conexão com o banco
		if(empty($aluno_id)){
			echo("Dados invalidos....");
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

		$removealuno = $pdo->prepare(
			"DELETE FROM `loja` where id=?"
		);

		$removealuno->execute([
			$aluno_id
		]);


		echo "Produto removido com sucesso..";
	}
?>
    <html>
		<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<head>
        <body> 
            <a href="index.php">Voltar</a>
        </body>
    </html>