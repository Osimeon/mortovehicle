<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	$sql = "SELECT reg_no, 
	mortocyle_database.total_fuel_consumed(reg_no) AS fuelconsumed FROM mortocyle_database.details GROUP BY reg_no ORDER BY reg_no ASC";
	
	$result = pg_query($database,$sql) or die(pg_last_error());
	
	while($row = pg_fetch_array($result)){
		$results[] = array('regNumber' => $row['reg_no'],
								  'fuelConsumed' => $row['fuelconsumed']);
		
	}
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-outputs/fuelconsumption.php';
?>