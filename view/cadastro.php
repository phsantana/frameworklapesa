<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once "frames/head.php" ?>
	<title>Universidade Estadual Paulista - Lapesa - Cadastro</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/cadastro.css"/>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/cadastro.js"></script>
</head>
<body>

<!--Cabeçalho-->
<?php require 'frames/header.php';?>

<section id="corpo">

	<!--Menu Lateral-->
	<?php require 'frames/menu.php'; ?>

	<!--Conteúdo-->
	<div class="conteudo">
		
		<!--Mapa de Navegação-->
		<div class="mapa-navegacao">
			<p><a href="index">Página Inicial</a> › <a href="pesquisa.php">Pesquisas e Projetos</a> › Cadastro e Download</p>
		</div>
		<div class="conteudo-titulo">
			<p>Cadastro</p>
			<article class="descricao-titulo">Complete o cadastro abaixo, assim, um link será enviado ao seu e-mail possibilitando o download.<br><span class="text-underline">Todos os campos são obrigatórios.</span></article>
		</div>

		<!--Formulário -->
		<section class="formulario">
			<form method="post" accept-charset="utf-8">

				<label>Nome<br> <input type="text" pattern="^[a-zA-Zà-úÀ-Ú ]{2,30}$" autocomplete="off" title="Somente letras e acentos são permitidos. Até 30 caracteres." name="nome" maxlength="30" required/></label>
				<label>Sobrenome<br> <input type="text" pattern="^[a-zA-Zà-úÀ-Ú ]{2,40}$" autocomplete="off" title="Apenas letras, acentos e espaços são permitidos. Até 50 caracteres." name="sob" maxlength="50" required/></label>
				<label>E-mail<br> <input type="email" autocomplete="off" title="Insira seu e-mail. Exemplo: usuario@exemplo.com ." name="mail" maxlength="45" required/></label>
				<label>Confirme seu E-mail <br><input type="email" autocomplete="off" title="Este campo deve ser igual ao 'E-mail'." name="conf" maxlength="45" required/></label>
				<label>Organização<br> <input type="text" pattern="^[a-zA-Zà-úÀ-Ú0-9 ]{2,50}$" autocomplete="off" title="Insira o nome da instituição de ensino que participa. Até 50 caracteres." name="org" maxlength="50" required/></label>
				<label>Cargo<br> 
					<select name="cargo" title="Insira o cargo de sua responsabilidade.">
						<option>Docente</option>
						<option>Aluno de Graduação</option>
						<option>Aluno de Pós-Graduação</option>
						<option>Outro</option>
					</select>
				</label>
				<label id="campo-outro">Outro<br> <input type="text" title="Insira sua responsabilidade. Até 40 caracteres." pattern="^[a-zA-Zà-úÀ-Ú ]{2,40}$" autocomplete="off" name="outro" maxlength="40"/></label>
				<label>Motivo<br><textarea name="mot" autocomplete="off" title="Descreva o motivo pelo qual você tem interesse pelo software escolhido" minlength="10" maxlength="400" required/></textarea></label>
				<input type="submit" value="Enviar" title="Envie o formulário para se cadastrar." />
			</form>
		</section>

	</div>
</section>
<!--Rodapé-->
<?php require 'frames/footer.php';?>

</body>
</html>