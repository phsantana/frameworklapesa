<!DOCTYPE html>
<html>
<head>
	<title>Gerenciador do Site Lapesa</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/mcss/manager.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/mcss/conteudo.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/mcss/page.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/mcss/forms.css">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/mjs/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/mjs/effects.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/mjs/function.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/mjs/script.js"></script>
</head>
<body>
<!-- Entrada no Sistema -->
<section class="secao-login">
	<section class="formulario-login">
		<header>
			<p>Gerenciador Lapesa</p>
		</header>
		<section class="formulario">
			<form action="" method="POST">
				<label>E-mail<br><input type="email" name="user" maxlength="35" placeholder="nome@exemplo.com" required autofocus/></label>
				<label>Senha<br><input type="password" name="pass" maxlength="35" placeholder="Insira sua senha" required/></label>
				<input type="submit" value="Acessar">
			</form>
		</section> 
	</section>
</section>

<!--Header-->
<header>
	<section class="barra">
		<div class="titulo-barra"><h1>GERENCIADOR</h1></div>
		<div id="menu-botao">
			<div class="sl-menu">
				<b></b>
				<b></b>
				<b></b>
			</div>
			<p>MENU</p>
		</div>
		<div class="button-barra">
			<img src="<?php echo BASE_URL; ?>assets/mcss/images/sair.png" width="40" height="35" title="Sair">
		</div>
		<div class="button-barra">
			<a href="<?php echo PAGE_URL; ?>" target="_blank">
				<img src="<?php echo BASE_URL; ?>assets/mcss/images/view.png" title="Visualizar página" width="30" height="40">
			</a>
		</div>
	</section>
</header>

<!--Menu-->
<section class="menu">
	<section class="cabecalho">
		<h1>MENU</h1>
	</section>
	<section class="opcoes-menu">
		<button type="button" class="opcoes-botao" name="apresentacao">
			<img src="<?php echo BASE_URL; ?>assets/mcss/images/apresentacao.png" width="140" height="140"/>
			<p>Apresentação</p>
		</button>
		<button type="button" class="opcoes-botao" name="objetivos">
			<img src="<?php echo BASE_URL; ?>assets/mcss/images/objetivos.png" width="140" height="140"/>
			<p>Objetivos</p>
		</button>
		<button type="button" class="opcoes-botao" name="participantes">
			<img src="<?php echo BASE_URL; ?>assets/mcss/images/participantes.png" width="140" height="140"/>
			<p>Participantes</p>
		</button>
		<button type="button" class="opcoes-botao" name="pesquisas">
			<img src="<?php echo BASE_URL; ?>assets/mcss/images/pesquisa.png" width="140" height="140"/>
			<p>Pesquisas e Projetos</p>
		</button>
		<button type="button" class="opcoes-botao" name="contato">
			<img src="<?php echo BASE_URL; ?>assets/mcss/images/contato.png" width="97" height="140" />
			<p>Fale Conosco</p>
		</button>
		<button type="button" class="opcoes-botao" name="configuracoes">
			<img src="<?php echo BASE_URL; ?>assets/mcss/images/config.png" width="140" height="140"/>
			<p>Configurações</p>
		</button>
	</section>
</section>
<!-- Conteúdo -->
<?php require_once 'templates/conteudo.php'; ?>

<section class="page">
	<section class="page-cabecalho">
		<h1 class="page-titulo"></h1>
		<div class="close-page" title="Fecha a seção de mudança de conteúdo e retorna ao menu"><p>X</p></div>
	</section>

	<!--Page Apresentação-->
	<?php require_once 'templates/page-apresentacao.php'; ?>

	<!--Page Ojetivos-->
	<?php require_once 'templates/page-objetivos.php'; ?>
	
	<!-- Page Participantes -->
	<?php require_once 'templates/page-participantes.php' ?>
	
	<!-- Page Pesquisas -->
	<?php require_once 'templates/page-pesquisas.php' ?>
	
	<!-- Page Contato -->
	<?php require_once 'templates/page-contato.php' ?>
	
	<!-- Page Configuração -->
	<?php require_once 'templates/page-configuracao.php' ?>

</section>

</body>
</html>