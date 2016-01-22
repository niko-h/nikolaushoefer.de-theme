<style>
	body {
		background-color: #485f34;
	}
	.logo .st0 {
		fill: #485f34;
	}	
	#menu #menu_list .menulink.active {
		color: #485f34;
	}
</style>

<?php 
	foreach ($f as $e) {
		if($e['Sichtbar'] == 'true') {
			echo "
			<div class=\"programmwrapper list-container\">
				<h1>".$e['Name']."</h1>
				<div class=\"program-description\">
					".$e['Beschreibung']."
				</div>
			</div>
			";
		}
	}
?>
