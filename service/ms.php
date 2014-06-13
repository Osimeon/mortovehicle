<?php	
	//require_once("rest.inc.php");
	//include 'rest.inc.php';
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/service/rest.inc.php';
	include $_SERVER['DOCUMENT_ROOT'] . '/mortocycles/service/funcs.php';
	class API extends REST {
	
		public function __construct(){
			parent::__construct();
		}
		
		/*
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
		public function processApi(){
			$func = strtolower(trim(str_replace("/","",$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);				// If the method not exist with in this class, response would be "Page not found".
		}
		
		//Return Mortocycle Details
		private function getMortoDetails(){
			 //Accept only GET
			 if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			 }
			 $sql = "SELECT * FROM mortocyle_database.details";
			 $this->getData($sql);
		}
		
		//Returned Period In Analysis
		private function getAnalysisByPeriod(){
			 //Accept only GET
			 if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			 }
			 $sql = "SELECT morto_reg_no, analysisperiod, 
					mortocyle_database.total_maintenance_a(morto_reg_no, analysisperiod) AS maint,
					mortocyle_database.total_fuel_cost_a(morto_reg_no, analysisperiod) AS fcost,
					mortocyle_database.total_cost_a(morto_reg_no, analysisperiod) AS tcost,
					mortocyle_database.kilometers_covered_a(morto_reg_no, analysisperiod) AS kmcovered,
					mortocyle_database.total_fuel_consumed_a(morto_reg_no, analysisperiod) AS fconsumed,
					mortocyle_database.kilometers_per_litre_a(morto_reg_no, analysisperiod) AS kmperlitre, 
					mortocyle_database.shillings_per_litre_a(morto_reg_no, analysisperiod) AS shsperlitre
					FROM mortocyle_database.log 
					GROUP BY morto_reg_no, analysisperiod ORDER BY morto_reg_no, analysisperiod ASC";		
			 $this->getData($sql);
		}
		
		//Return General Analysis
		private function getAnalysis(){
			 //Accept Only GET
			 if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			 }
			 $sql = "SELECT reg_no,
						mortocyle_database.total_maintenance(reg_no) AS maint,
						mortocyle_database.total_fuel_cost(reg_no) AS fcost,
						mortocyle_database.total_cost(reg_no) AS tcost,
						mortocyle_database.kilometers_covered(reg_no) AS kmcovered,
						mortocyle_database.total_fuel_consumed(reg_no) AS fconsumed,
						mortocyle_database.kilometers_per_litre(reg_no) AS kmperlitre, 
						mortocyle_database.shillings_per_litre(reg_no) AS shsperlitre
						FROM mortocyle_database.details GROUP BY reg_no ORDER BY reg_no ASC";		
			 $this->getData($sql);
		}
		//Get Log Records (Pretty Heady Operation)
		private function getLogs(){
			 //Accept only GET
			 if($this->get_request_method() != "GET"){
				$this->response('',406,"");
			 }
			 
			 $sql = "SELECT * FROM mortocyle_database.log order by morto_reg_no";		
			 $this->getData($sql);
		}
		
		//Get Log Record Given RegNo
		private function getLogDetails(){
			//Accept only GET
			if($this->get_request_method() != "GET"){
					$this->response('',406,"");
			}  
			
			$morto_reg = /*(String)*/$this->_request['reg_no'];//request for the sanitized reg_no		   
			$sql = "SELECT * FROM mortocyle_database.log WHERE morto_reg_no = '".$morto_reg."'";		
			$this->getData($sql);	//get query results	
		}
		
		//process Query & Return 
		private function getData($sql){
			$obj = new MainFuncs(); 
			$query_result = $obj->runQuery($sql,'morto_dbms');//
			if(pg_num_rows($query_result) > 0){
				$result = array();
				while($rlt = pg_fetch_array($query_result, NULL, PGSQL_ASSOC)){
					$result[] = $rlt;
				}
				
				// If success everythig is good send header as "OK" and return list of users in JSON format
				$returnformat = 'json';
				$format = (string)@$this->_request['format'];
				
				if(!empty($format)){
					$returnformat = $format;
				}
				
				if($returnformat =='json'){
					$this->response($this->json($result), 200,$returnformat);
				}
				else{
					//Provide implementation for XML Here
				}
			}
			else{
				$this->response('',204,'');
			}
			pg_close($conn);
		}
				
		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}
	
	// Initiiate Library
	
	$api = new API;
	$api->processApi();
?>