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
		echo json_encode( $dbarray,JSON_PRETTY_PRINT ); 
		
		
	}else{
	echo json_encode( array( "namn"=>"John","time"=>"2pm" ) );
	
	}
	
?>