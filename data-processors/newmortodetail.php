<?php 

	//include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/includes/db.inc.php';
	$dsn = 'pgsql:host=localhost port=5432 dbname=morto_dbms user=postgres password=postgres';
	
	try{
		$dsn = new PDO($dsn);
	}
	
	catch(PDOException $e){
		echo 'Connection failed: ' . $e->getMessage();
	}
	
	$staffid = 1620;
	$staffname = "Herbert Kisara";
	$stafflocation = "Kisumu";
	
	try{
		$dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = 'INSERT INTO mortocyle_database.mortocycle_users (staff_id, staff_name, staff_location) VALUES
				(:id, :name, :location)';
		
		$stmt = $dsn->prepare($sql);
		$stmt->bindParam(':id',$staffid);
		$stmt->bindParam(':name',$staffname);
		$stmt->bindParam(':location',$stafflocation);
		$stmt->execute();
	}
	
	catch(PDOException $e){
		echo 'PDO Exception Caught.';
		echo 'Error with the database: <br />';
		echo 'SQL Query: ', $sql;
		echo 'Error: ' . $e->getMessage();
	}
?>