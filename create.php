<!DOCTYPE html>
<html>
<head>
	<title>Criando um novo produto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section id= crriar>
	<form action="store.php" method="POST">
		NOME: <input 
			type="text" 
			name="nome" 
			placeholder="">
		<br>
		<br>
        VALOR: <input 
			type="text" 
			name="valor" 
			placeholder="">
		<br>
		<br>
        DESCRIÇÃO: <input 
			type="text" 
			name="descricao" 
			placeholder="">
		<br>
		</section>
		<button id= enviar type="submit">
			ENVIAR
		</button>
		<br>
		<br>
	</form>
	<br>
	<a id="voltar" href="index.php">VOLTAR</a>
</body>
</html>