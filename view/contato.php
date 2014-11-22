<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once "frames/head.php" ?>
	<title>Universidade Estadual Paulista - Lapesa - Fale Conosco</title>
	<link rel="stylesheet" type="text/css" href="style/contato.css" />
</head>
<body>

<!--Cabeçalho-->
<?php require 'estrutura/header.php';?>

<section id="corpo">
	<!--Menu Lateral-->
	<?php require 'estrutura/menu.php'; ?>

	<!--Conteúdo-->
	<div class="conteudo">

		<div class="mapa-navegacao">
			<p><a href="index.php">Página Inicial</a> › Fale Conosco</p>
		</div>

		<div class="conteudo-titulo">
			<p>Fale Conosco</p>
			<article class="descricao-titulo">Para maiores informações, dúvidas ou reclamações, perante ao funcionamento do site ou dos produtos que este oferece, entre em contato através:</article>
		</div>
		<section class="descricao-objetivos">
			<article><span class="text-bold">E-mail:</span> contatolapesa@fct.unesp.br</article>
			<figure>
				<img src="style/images/contato.jpg" width="250" height="150">
			</figure>
		</section>

	</div>
</section>
<!--Rodapé-->
<?php require 'estrutura/footer.php'; ?>
</body>
</html>