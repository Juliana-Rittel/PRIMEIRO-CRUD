<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Produtos</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="image-container">
	<img src="floco de neve.png" alt="floco de neve">
	<img src="floco de neve.png" alt="floco de neve">
	<img src="floco de neve.png" alt="floco de neve">
	<img src="floco de neve.png" alt="floco de neve">
	<img src="floco de neve.png" alt="floco de neve">
	</div>
	<?php
		try {
			// conexão com o banco
            $usuario = "root";
			$senha = "";
			$pdo = new PDO(
				"mysql:host=localhost;dbname=ed3",
				$usuario,
				$senha
			);

			// criar uma consulta ao banco
			$alunos = $pdo->query(
				"SELECT * FROM `loja`;"
			)->fetchAll();

			// percorre o array/vetor de alunos
			// exibe na página o id e nome
			 //foreach($alunos as $aluno){
			 	//echo($aluno["id"] . "<br>");	
			 	//echo($aluno["nome"] . "<br>");	
			// }
             }catch (Exception $e) {
			echo($e);
		}
		
	?>
	<br>
	<h5 id=nome>Frosty Fashions</h5>
	<h3 id=subtitulo>Moda para inverno</h3>
	<section id= criar>
	<a href="create.php">Criar um novo produto
	<img id=carrinho src="carri.png" alt="carrinho">
	</a>
	</section>
	<div class="imagens">
<img src="C M.png" alt="">
<img src="C P.png" alt="">
<img src="C T H.png" alt="">
<img src="C P B.png" alt="">
<img src="C X.png" alt="">
<br>
<img src="L B.png" alt="">
<img src="L C.png" alt="">
<img src="L L.png" alt="">
<img src="L P.png" alt="">
<img src="L R.png" alt="">
<br>
<img src="T A.png" alt="">
<img src="T B.png" alt="">
<img src="T P.png" alt="">
<img src="T V.png" alt="">
<img src="T CC.png" alt="">
<img src="T G.png" alt="">
<img src="T L.png" alt="">
<br>
<img src="M B.png" alt="">
<img src="M O.png" alt="">
<img src="M P.png" alt="">
<img src="M V.png" alt="">
	</div>
<br>
<section id="tabela">
	<table>
		<thead>
			<tr id="titulo">
				<th>NOME</th>
				<th>VALOR</th>
                <th>DESCRIÇÃO</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($alunos as $aluno): ?>
				<tr>
					<td><?php echo($aluno["nome"]) ?></td>
					<td><?php echo($aluno["valor"]) ?></td>
                    <td><?php echo($aluno["descricao"]) ?></td>
					<td>
					<a href="edit.php?aluno_id=<?php echo($aluno["id"]); ?>">
						Editar
					</a>
					<a href="remove.php?aluno_id=<?php echo($aluno["id"]); ?>">
						Remover
					</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>