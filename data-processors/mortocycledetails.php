<?php
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	$string = "SELECT morto_reg_no FROM mortocyle_database.log
				GROUP BY morto_reg_no 
				ORDER BY morto_reg_no ASC;";
	$result = pg_query($database,$string) or die(pg_last_error());
	
	while($row = pg_fetch_array($result)){
		$results[] = array('regNumber' => $row['morto_reg_no']);
	}
	
?>