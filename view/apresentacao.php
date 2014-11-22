<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once "frames/head.php" ?>
	<title>Universidade Estadual Paulista - Lapesa - Apresentação</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/apresentacao.css" />
	
</head>
<body>
<!--Cabeçalho-->
<?php require 'frames/header.php'; ?>

<section id="corpo">

	<!--Menu Lateral-->
	<?php require 'frames/menu.php'; ?>

	<!--Conteúdo-->
	<div class="conteudo">
		
		<div class="mapa-navegacao">
			<p><a href="index">Página Inicial</a> › Apresentação</p>
		</div>

		<div class="conteudo-titulo">
			<p>Apresentação</p>
		</div>
		<section class="conteudo-apresentacao">
			<figure>
				<img src="<?php echo BASE_URL; ?>assets/css/img/logo-foto.png">
				<figcaption>Legenda - xxxxxxx</figcaption>
			</figure>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo, dolor at dignissim tristique, justo diam laoreet orci, in maximus felis nulla eu lacus. Mauris vitae mattis justo, id pellentesque odio. Maecenas non odio augue. Ut laoreet efficitur nisl, id consequat ante malesuada non. Morbi at elit a turpis faucibus dictum at egestas ligula. Proin vitae posuere enim. Nunc sed ligula pretium, convallis orci et, sagittis dolor. Quisque nec lorem cursus, facilisis enim vitae, convallis lacus. Praesent facilisis, mi ut facilisis accumsan, dolor lectus semper leo, sed mattis nunc justo vel augue. Nulla facilisi. Suspendisse potenti. Duis at euismod mi. Nunc rhoncus tortor a nisi sollicitudin porttitor.
			</p>
		</section>

		
	</div>
</section>

<!--Rodapé-->
<?php require 'frames/footer.php'; ?>

</body>
</html>