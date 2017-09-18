<?php
require 'dbconnect.php';

$pdo=anslutdb();
$result=$pdo->query('select * from artikel');

//print_r($result->fetch());

?>


<html lang="sv">
<head>
	<meta charset="utf-8"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	article{
		width:500px;

		background-color:#dddddd;
	}
	fieldset{

		width:600px;

	}
	legend{
		font-size:20px;
	}


	</style>



</head>



<body>

<?php

while(($data=$result->fetch())!==false){


echo<<<ARTIKEL
<fieldset>
		<legend>{$data['Art_namn']}</legend>
		<article>
			<div class="row">
				<div class="col-sm-6">
					<img src="bilder/{$data['Bild']}"/>

					<br><br>
					<form action="cart.php" method="GET">
							<input type="hidden" name="art_id" value="{$data['Artid_pk']}">
						<div class="form-group col-xs-5">
							<label for="exampleSelect1">Antal</label>
							<select class="form-control" id="antal" name="antal" >
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>

						<button type="submit" class="btn btn-primary">Köp</button>
					</form>

					pris per styck:{$data['Pris']}kr
				</div>
				<div class="col-sm-6">

				{$data['Info']}

				</div>
			</div>


		</article>

	</fieldset>
ARTIKEL;

}
?>
</body>


</html>
