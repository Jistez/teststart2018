<?php
	include("dbconnect.php");
	
	
	if($_REQUEST['test']!=""){
		
		$dbpdo=anslutdb();
		$testclean = filter_input(INPUT_GET, 'test', FILTER_SANITIZE_STRING);
		
		$testclean=$testclean."%";
		
		$sql="SELECT * FROM namn WHERE namn LIKE :username";
		
		
		
		
		$stmt=$dbpdo->prepare($sql);
		$stmt->bindParam(":username",$testclean,PDO::PARAM_STR);
		$stmt->execute(); 
		
		$dbarray=$stmt->fetchAll(PDO::FETCH_ASSOC);
		
		
		foreach ($dbarray as $link) {
			echo $link['namn']."</br>" ;
			
		}
		
	}
	
?>