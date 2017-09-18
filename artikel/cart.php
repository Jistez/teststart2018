<?php

session_start();
$_SESSION["userid"]=session_id();

clean_antal=filter_var (INPUT_GET ,"antal", FILTER_SANITIZE_STRING);
clean_art_id=filter_var (INPUT_GET ,"art_id", FILTER_SANITIZE_STRING);











//tabell vem=sessionsid,antal, art_id_fk


//session
//vätta
// dbanslutning
// använder pdo bindparam
//lagra artikel i db
//skriva ut korgen
//kasssa länk


 ?>
