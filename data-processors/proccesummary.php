<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	$string = "SELECT reg_no,
						mortocyle_database.total_maintenance(reg_no) AS maint,
						mortocyle_database.total_fuel_cost(reg_no) AS fcost,
						mortocyle_database.total_cost(reg_no) AS tcost,
						mortocyle_database.kilometers_covered(reg_no) AS kmcovered,
						mortocyle_database.total_fuel_consumed(reg_no) AS fconsumed,
						mortocyle_database.kilometers_per_litre(reg_no) AS kmperlitre, 
						mortocyle_database.shillings_per_litre(reg_no) AS shsperlitre
						FROM mortocyle_database.details GROUP BY reg_no ORDER BY reg_no ASC;";
			
	$result = pg_query($database,$string) or die(pg_last_error());
			
	while($row = pg_fetch_array($result)){
		$resultsummary [] = array('regNumber' => $row['reg_no'],
								  'MCost' => $row['maint'],
								  'FuCost' => $row['fcost'],
								  'ToCost' => $row['tcost'],
								  'KilCovered' => $row['kmcovered'],
								  'fuconsumed' => $row['fconsumed'],
								  'kilPerLitre' => $row['kmperlitre'],
								  'shilperlitre' => $row['shsperlitre']);
	}	
		
?>