<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	$sql = "SELECT reg_no, 
	mortocyle_database.kilometers_covered(reg_no) AS tkilometers FROM mortocyle_database.details GROUP BY reg_no ORDER BY reg_no ASC";
	
	$result = pg_query($database,$sql) or die(pg_last_error());
	
	while($row = pg_fetch_array($result)){
		$results[] = array('regNumber' => $row['reg_no'],
								  'tkms' => $row['tkilometers']);
		
	}
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-outputs/totalkilometers.php';
?>