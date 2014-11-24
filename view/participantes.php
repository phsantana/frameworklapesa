<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once "frames/head.php" ?>
	<title>Universidade Estadual Paulista - Lapesa - Participantes</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/participantes.css" />
</head>
<body>

<!--Cabeçalho-->
<?php require 'frames/header.php'; ?>

<section id="corpo">

	<!--Menu Lateral-->
	<?php require 'frames/menu.php'; ?>

	<!--Conteúdo-->
	<section class="conteudo">
		<div class="mapa-navegacao">
			<p><a href="index.php">Página Inicial</a> › Participantes</p>
		</div>
		<div class="conteudo-titulo">
			<p>Participantes</p>
			<article class="descricao-titulo">Abaixo estão descritas informações relativas aos membros do laboratório.</article>
		</div>
		
		<!-- Perfil de descrição do membro-->
		<div class="perfil-participante">
			<article>
				<h1>Nome Completo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus voluptatem animi saepe asperiores veritatis, odio cupiditate atque. Tempore sit doloribus obcaecati praesentium totam tenetur, quibusdam laudantium, officia quisquam unde itaque!</p>
				<p class="addressmail"><strong>E-mail:</strong> example@dominio.com</p>
			</article>
		</div>
		<div class="perfil-participante">
			<article>
				<h1>Nome Completo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus voluptatem animi saepe asperiores veritatis, odio cupiditate atque. Tempore sit doloribus obcaecati praesentium totam tenetur, quibusdam laudantium, officia quisquam unde itaque!</p>
				<p class="addressmail"><strong>E-mail:</strong> example@dominio.com</p>
			</article>
		</div>
	</section>
</section>

<!--Rodapé-->
<?php require 'frames/footer.php' ?>
</body>
</html>