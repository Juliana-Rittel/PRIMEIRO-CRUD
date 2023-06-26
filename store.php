<!DOCTYPE html>
<html>
<head>
	<title>Store produto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br>
    <br>
    <a id="voltar" href="index.php">VOLTAR</a>
    <br>
    <br>
<?php 
	// validação do tipo da requisição
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// recuperar os dados da requisição
		
		$nome = '';
        $valor = '';
        $descricao = '';

		// validando campo nome
		
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        if(isset($_POST['valor'])){
            $valor = $_POST['valor'];
        }
        if(isset($_POST['descricao'])){
            $descricao = $_POST['descricao'];
        }



// conexão com o banco
if(empty($nome) && empty($valor) && empty($descricao)){
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

// criar o registro na tabela
$novoaluno = $pdo->prepare(
    "INSERT INTO `loja`(nome, valor, descricao) VALUES(:nome,:valor,:descricao)");
// define as variaveis com os valores
$novoaluno->bindParam(':nome', $nome);
$novoaluno->bindParam(':valor', $valor);
$novoaluno->bindParam(':descricao', $descricao);
// executar a inserção
$novoaluno->execute();
echo("Novo produto criado com sucesso.");
	}




?>

</body>
</html>