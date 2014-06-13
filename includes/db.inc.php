<?php

	$database = pg_connect("host=127.0.0.1 port=5432 dbname=morto_dbms user=postgres password=postgres");
	
	if(!$database){
		echo "Echo Connection Failed!";
		exit;
	}
	
?>