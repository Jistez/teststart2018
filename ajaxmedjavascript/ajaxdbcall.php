<?php
	echo"<html>";
	echo"<head>";
	echo"<link href=\"layout.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo"<meta charset=\"utf-8\">";
	echo"</head>";
	echo"<body>";
	echo"<form name=\"myForm\" method=\"GET\">";
	echo"sök: <input type=\"text\" id=\"username\" \" name=\"username\" autocomplete=\"off\" /> <br/>";
	echo"<input type=\"hidden\" name=\"time\" />  ";
	echo"</form>";
	echo"<div id =\"ajaxsvar\"></div> ";
	
	
	?>
	<script>
	document.getElementById('username').addEventListener('keyup', function() {
		
		ajaxFunction();
		
		});
	
	
	
	function ajaxFunction(){
	var ajaxRequest;

	try{
		ajaxRequest=new XMLHttpRequest();
		} catch (e){
			try{
			ajaxRequest=new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e){
						try{
						ajaxRequest=new ActiveXObject("Microsoft.XMLHTTP");
						}catch(e){
							alert("fel");
							return false;
							}
			}
		}
		ajaxRequest.onreadystatechange=function(){
		
				/*
							state  Description
					0      The request is not initialized
					1      The request has been set up
					2      The request has been sent
					3      The request is in process
					4      The request is complete
				*/
			if(ajaxRequest.readyState==4){
				document.myForm.time.value=ajaxRequest.responseText;
				document.getElementById("ajaxsvar").innerHTML=ajaxRequest.responseText;
				}else{
				//document.getElementById("ajaxsvar").innerHTML="loader.gif";
				// om inte state är lika med 4	

				}
		}
	ajaxRequest.open("GET", "dbsvar.php?test=" + document.myForm.username.value, true);
	ajaxRequest.send(null);
}
	
	
	</script>
	
<?php
	
	echo"</body>";
	echo"</html>";
	
?>