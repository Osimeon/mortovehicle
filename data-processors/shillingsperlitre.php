<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	$sql = "SELECT reg_no, 
	mortocyle_database.shillings_per_litre(reg_no) AS shsperlitre FROM mortocyle_database.details GROUP BY reg_no ORDER BY reg_no ASC";
	
	$result = pg_query($database,$sql) or die(pg_last_error());
	
	while($row = pg_fetch_array($result)){
		$results[] = array('regNumber' => $row['reg_no'],
								  'kshsperlitre' => $row['shsperlitre']);
		
	}
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-outputs/litrespershilling.php';
?>