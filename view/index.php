<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php require_once "frames/head.php" ?>
	<title>Universidade Estadual Paulista - Lapesa</title>
	<script src="<?php echo BASE_URL; ?>assets/js/jquery.cycle.all.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/home.css">
</head>
<body>

<!--Cabeçalho-->
<?php  require 'frames/header.php'; ?>

<section id="corpo">

	<!--Menu Lateral-->
	<?php  require 'frames/menu.php'; ?>

	<!--Conteúdo-->
	<div class="conteudo">

		<!-- Menu rotativo -->
		<div class="cycle 
					cycle-slideshow
	    			data-cycle-fx="scrollHorz"
	    			data-cycle-timeout="6000"
	    			data-cycle-overlay-template="<a href='{{link}}'>{{title}}</A><br><br><p>{{desc}}</p>"
 	   				data-cycle-pager=".pager"
 	   				data-cycle-pager-template="<div class='pager-item'></div>"
 	   				">
		    <div class="cycle-overlay"></div>
		    <div class="pager"></div>
			
		    <img src="<?php echo BASE_URL; ?>assets/css/img/num01.jpg" data-link="#01" data-title="Faculdade de Ciências e Tecnologia" data-cycle-desc="A entrada da faculdade">
		    <img src="<?php echo BASE_URL; ?>assets/css/img/num02.jpg" data-link="#02" data-title="Biblioteca" data-cycle-desc="Possui horário de funcionamento em três períodos">
		    <img src="<?php echo BASE_URL; ?>assets/css/img/num03.jpg" data-link="#03" data-title="Pista de Atletismo" data-cycle-desc="Visão aérea da pista de atletismo"> 
		</div>

	</div>
</section>

<!--Rodapé-->
<?php require 'frames/footer.php'; ?>

</body>
</html>

