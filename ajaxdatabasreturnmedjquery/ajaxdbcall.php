<?php
	echo"<html>";
	echo"<head>";
	echo"<meta charset=\"utf-8\">";
	echo"</head>";
	echo"<body>";
	echo"<form name=\"myForm\" method=\"GET\">";
	echo"sök: <input type=\"text\" id=\"target\" name=\"username\" autocomplete=\"off\" /> <br/>";
	echo"<input type=\"hidden\" name=\"time\" />  ";
	echo"</form>";
	echo"<div id =\"ajaxsvar\"></div> ";
	
	?>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
	$( "#target" ).keyup(function() {
		$.get( "dbsvar.php", {test: $( "#target" ).val() }, function( data ) {
			
			var size=data.length;
			var newtext="";
			console.log(size);
			for (i = 0; i < size; i++) { 
			
				newtext=newtext+""+ data[i].namn+ "<br>" ;
			}
			
			$( "#ajaxsvar" ).html( newtext );
			
			
			
		}, "json" );
	
	});
	</script>
	
<?php
	echo"</body>";
	echo"</html>";
?>