<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	if(isset($_POST['action']) and $_POST['action'] == 'oksave'){
		
		$regNumber = pg_escape_string($_POST['regNo']);
		$cdate = pg_escape_string($_POST['date']);
		$oilType = pg_escape_string($_POST['oiltype']);
		$oilQuantity = pg_escape_string($_POST['oilquantity']);
		$oilCost = pg_escape_string($_POST['oilcost']);
		$outsourceMaterial = pg_escape_string($_POST['outsourcmaterial']);
		$materialCost = pg_escape_string($_POST['materialcost']);
		$labourCost = pg_escape_string($_POST['labourcost']);
		$desWork = pg_escape_string($_POST['deswork']);
		$ordometerReading = pg_escape_string($_POST['creading']);
		$durWeek = pg_escape_string($_POST['duweek']);		
		
		$sql = "INSERT INTO mortocyle_database.costs_a VALUES 
				('$regNumber',
				'$cdate',
				'$oilType',
				'$oilQuantity',
				'$oilCost',
				'$outsourceMaterial',
				'$materialCost',
				'$labourCost', 
				'$desWork' ,
				'$ordometerReading',
				'$durWeek')";
				
		pg_query($database,$sql) or die(pg_last_error());
		header('Location: /mortocycles/data-inputs/costs.php');
	}
	
?>