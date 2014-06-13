<?php

	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	
	$details = "SELECT * FROM mortocyle_database.details ORDER BY reg_no ASC";
	$detailsresult = pg_query($database,$details) or die(pg_last_error());
	
	while($row_a = pg_fetch_array($detailsresult)){
		$mortodetails[] = array('regNumber' => $row_a['reg_no'],
						  'dept' => $row_a['dept'],
						  'office' => $row_a['morto_desc_type'],
						  'desc' => $row_a['morto_desc_type'],
						  'purchdate' => $row_a['purch_date'],
						  'purchcost' => $row_a['purch_cost'],
						  'cardNumber' => $row_a['fuel_card_no'],
						  'staff1' => $row_a['staff_incharge1'],
						  'staff2' => $row_a['staff_incharge2'],
						  'staff3' => $row_a['staff_incharge3'],
						  'engNumber' => $row_a['engine_number'],
						  'frameNumber' => $row_a['frame_number'],
						  'logBookNumber' => $row_a['log_book_number'],
						  'insurance' => $row_a['insurance_provider'],
						  'expdate' => $row_a['insurance_expiry_date']);
	}
	
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/data-outputs/mortodetailsview.php';
?>