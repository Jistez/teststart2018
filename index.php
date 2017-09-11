


<?php


if(isset($_GET["ord1"])){

$ord1_dirty=$_GET["ord1"];
$ord1_clean=filter_input(INPUT_GET,"ord1", FILTER_SANITIZE_STRING);


echo htmlspecialchars($ord1_dirty, ENT_COMPAT, 'UTF-8')." detta var ett fint ord";


echo htmlspecialchars($ord1_clean, ENT_COMPAT, 'UTF-8')." detta var ett fint ord";



}else{

echo <<< FORMNAME

<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<form action="index.php" method="GET">
<div class="col-sm-5">
<label for="word">ord</label>
<input type="text" value="ange ett ord" name="ord1" id="word" class="form-control">

<input type="submit" value="send form"  class="btn btn-primary">
</div>
</form>

FORMNAME;


}



?>