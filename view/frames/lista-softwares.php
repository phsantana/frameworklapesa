<?php
	$list = ["Software_01","Software_02","Software_03","Software_04",];
	$i = 0;
	foreach ($list as $value) {
		$i++;
		echo "<li class="."list-software".">$value</li>";
		if( $i == 3 ){
			echo "<li class="."list-software".">Outros Softwares ...</li>";
			break;
		}
	}
?>