<?php

$db= new mysqli('localhost','root','','badlogin');

if ($db->connect_errno >0){

	die('unable to connect to database['.$db->connect_error.']');

}

if (isset($_REQUEST["user"])&& isset($_REQUEST["pass"])){



		$sql="select * from user where '".$_REQUEST["user"]."' =username and '".$_REQUEST["pass"]."'=password";
		$result =mysqli_query($db,$sql);
		echo $sql;
	 if(!$result){
			echo"fel";
			exit();
		}

		$row =mysqli_fetch_array($result);
print_r($row);

		if($row){
			session_start();
			$_SESSION["userid"]=$_REQUEST["user"];
			header("Location:inloggad.php");
		}else{
			echo"fel lösenord";
		}
}else{
	header("Location:inlogg.html");
}
