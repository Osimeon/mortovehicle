<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	if(isset($_POST['action']) and $_POST['action'] == 'oksave'){
		$regNu = pg_escape_string($_POST['regNo']);
		$dateRe = pg_escape_string($_POST['date']);
		$fquantity = pg_escape_string($_POST['fquantity']);
		$cureading = pg_escape_string($_POST['creading']);
		$prereading = pg_escape_string($_POST['preading']);
		$klmcovered = pg_escape_string($_POST['kmcovered']);
		$klmperlitre = pg_escape_string($_POST['kmperlitre']);
		$fucost = pg_escape_string($_POST['fcost']);
		$durweek = pg_escape_string($_POST['duweek']);
		
		$sql = "INSERT INTO mortocyle_database.log_a VALUES
		('$regNu',
		'$dateRe',
		'$fquantity',
		'$cureading',
		'$prereading',
		'$klmcovered',
		'$klmperlitre',
		'$fucost',
		'$durweek')";
		
		pg_query($database,$sql) or die(pg_last_error());
		header('Location: /mortocycles/data-inputs/logging.php');
	} 
?>