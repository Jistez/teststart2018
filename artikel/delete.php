<?php
session_start();
include "dbconnect.php";
/*
session_destroy();
session_start();
session_regenerate_id();
$_SESSION["userid"]=session_id();

header("Location:cart.php");
*/

//tvätta
//sql fråga med vilken pk
//prepare


$pk_clean=filter_INPUT(INPUT_GET,"cartpk",FILTER_SANITIZE_STRING);

$pdo=anslutdb();

$sth=$pdo->prepare("delete from carts where Cartsid_pk=:pk");

$sth->bindParam(":pk",$pk_clean);

$sth->execute();

header("Location:cart.php");
?>
