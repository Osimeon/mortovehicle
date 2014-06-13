<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	$sql = "SELECT morto_reg_no,
	        SUM(fuel_cost_in_kshs) AS FuelCost, 
			SUM(fuel_quantity) AS FuelQ,
			SUM(kilometers_covered) AS KmsCovered,
			DATE_PART('MONTH',date_refilled_to_full_tank) AS Month, 
			DATE_PART('YEAR',date_refilled_to_full_tank) AS Year,
			analysisperiod AS Analysis 
	        FROM mortocyle_database.log 
			GROUP BY morto_reg_no,Month,Year,Analysis  
			ORDER BY morto_reg_no,Month ASC;";
	
	$result = pg_query($database,$sql) or die(pg_last_error());
	
	while($row = pg_fetch_array($result)){
		$results[] = array('regNo' => $row['morto_reg_no'], 
						   'fuelCost' => $row['fuelcost'],
						   'fquantity' => $row['fuelq'],
						   'kilocovered' => $row['kmscovered'],
					       'monthNumber' => $row['month'],
					       'yearNumber' => $row['year'],
						   'analyze' => $row['analysis']);
	}
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-outputs/monthlyanalysisoutput.php';
?>
