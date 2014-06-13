<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	$sql = "SELECT reg_no, 
	mortocyle_database.total_cost(reg_no) AS tcost FROM mortocyle_database.details GROUP BY reg_no ORDER BY reg_no ASC";
	
	$result = pg_query($database,$sql) or die(pg_last_error());
	
	while($row = pg_fetch_array($result)){
		$results[] = array('regNumber' => $row['reg_no'],
								  'ttlcost' => $row['tcost']);
		
	}
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-outputs/finalcost.php';
?>