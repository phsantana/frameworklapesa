<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once "frames/head.php" ?>
	<title>Universidade Estadual Paulista - Lapesa - Pesquisas e Projetos</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pesquisa.css"/>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/pesquisa.js"></script>
</head>
<body>
<!-- Elementos Ocultos -->
<div class="mascara-negra">
	<div class="software-descricao">
		<button type="button" class="fechar-descricao">X</button>
		<figure>
			<img src="<?php echo BASE_URL; ?>assets/css/img/logo-padrao.png" width="150" height="150">
			<p class="text-bold">Desenvolvido por:</p>
			<p>nome-do-desenvolvedor</p><br>
			<p class="text-bold">Ano:</p>
			<p>ano-desenvolvido</p>
		</figure>
		<section class="text-descricao">
			<h1 class="text-bold">[Título]</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis id euismod nisl. Mauris finibus ru
				trum neque, in vehicula nulla condimentum pharetra. Donec imperdiet mi quis erat egestas volutpat. Donec vel accumsan mauris, in ornare purus. Etiam id placerat dui. Mauris semper, erat non lacinia convallis, dolor orci dapibus lorem, eu facilisis orci diam quis diam. Phasellus viverra eget elit et interdum. Etiam in lectus viverra, aliquam nisi in, lacinia ligula. Aliquam mollis sem a tellus elementum tincidunt. Praesent id tempus tellus. In pellentesque tempus risus vel gravida. Morbi sit amet ultrices elit. In velit sapien, efficitur vitae pellentesque eu, commodo sit amet mi. Aliquam et ante commodo, tincidunt eros ut, sollicitudin lacus. Vestibulum dictum, massa eget commodo tempor, nibh ante ultricies purus, sed elementum ante elit eu 
				nunc. Fusce eu felis et felis tincidunt placerat vitae non erat.Curabitur maximus mi sed lobortis
				congue. 
			</p>
			<a href="<?php echo BASE_URL; ?>cadastro">Download</a>
		</section>
	</div>
</div>

<!--Cabeçalho-->
<?php require 'frames/header.php'; ?>

<section id="corpo">
	<!--Menu Lateral-->
	<?php require 'frames/menu.php'; ?>

	<!--Conteúdo-->
	<div class="conteudo">
		<div class="mapa-navegacao">
			<p><a href="index.php">Página Inicial</a> › Pesquisas e Projetos</p>
		</div>
		<div class="conteudo-titulo">
			<p>Pesquisa e Projetos</p>
		</div>

	</div>
</section>
<!--Rodapé-->
<?php require 'frames/footer.php' ?>
</body>
</html>
