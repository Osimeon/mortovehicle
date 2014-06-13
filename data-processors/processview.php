<?php
	if (isset($_POST['action']) and $_POST['action'] == 'Details'){
		include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
		$regNumber = $_REQUEST['regID'];
		
		$string = "SELECT morto_reg_no, analysisperiod, 
					mortocyle_database.total_maintenance_a('$regNumber', analysisperiod) AS maint,
					mortocyle_database.total_fuel_cost_a('$regNumber', analysisperiod) AS fcost,
					mortocyle_database.total_cost_a('$regNumber', analysisperiod) AS tcost,
					mortocyle_database.kilometers_covered_a('$regNumber', analysisperiod) AS kmcovered,
					mortocyle_database.total_fuel_consumed_a('$regNumber', analysisperiod) AS fconsumed,
					mortocyle_database.kilometers_per_litre_a('$regNumber', analysisperiod) AS kmperlitre, 
					mortocyle_database.shillings_per_litre_a('$regNumber', analysisperiod) AS shsperlitre
					FROM mortocyle_database.log WHERE morto_reg_no = '$regNumber' 
					GROUP BY morto_reg_no, analysisperiod ORDER BY morto_reg_no, analysisperiod ASC;";
		
		$result = pg_query($database,$string) or die(pg_last_error());
		
		while($row = pg_fetch_array($result)){
			$results [] = array('regNumber' => $row['morto_reg_no'], 'analysis' => $row['analysisperiod'],'MCost' => $row['maint'],
							'FuCost' => $row['fcost'],'ToCost' => $row['tcost'],
							'KilCovered' => $row['kmcovered'],'fuconsumed' => $row['fconsumed'],
							'kilPerLitre' => $row['kmperlitre'],'shilperlitre' => $row['shsperlitre']);
		}
	}
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-outputs/viewsummary.php';
?>