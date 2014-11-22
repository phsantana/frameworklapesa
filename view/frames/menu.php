<!DOCTYPE html>
<html>
<body>
<section id="menu">
	<li class="button"><a href="">To view this page in English</a></li>
	<li class="button"><a href="<?php echo BASE_URL; ?>apresentacao">Apresentação</a></li>
	<li class="button"><a href="<?php echo BASE_URL; ?>objetivos">Objetivos</a></li>
	<li class="button"><a href="<?php echo BASE_URL; ?>participantes">Participantes</a></li>
	<li class="button"><a href="<?php echo BASE_URL; ?>pesquisa">Pesquisas e Projetos</a></li>
	<div class="box-software">
		<?php require_once 'lista-softwares.php';?>
	</div>
	<li class="button"><a href="<?php echo BASE_URL; ?>contato">Fale Conosco</a></li>
</section>
</body>
</html>
