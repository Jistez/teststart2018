<?php
require 'dbconnect.php';
session_start();
$_SESSION["userid"]=session_id();

    $pdo1=anslutdb();
echo $_SESSION["userid"];


if(isset($_GET['antal'] )&& isset($_GET['art_id']) ){


    $clean_antal=filter_INPUT(INPUT_GET ,'antal', FILTER_SANITIZE_STRING);
    $clean_art_id=filter_INPUT(INPUT_GET, 'art_id', FILTER_SANITIZE_STRING);

    $sth = $pdo1->prepare('insert into Carts  (Antal,Sessionid,Artid_fk) values (:antal,:session,:artid)');

    $sth->bindParam(':antal', $clean_antal);
    $sth->bindParam(':session', $_SESSION["userid"]);
    $sth->bindParam(':artid',$clean_art_id);
    $sth->execute();

}



$sth = $pdo1->prepare('select * from Carts,artikel where Artid_fk=Artid_pk and Sessionid= :session');


$sth->bindParam(':session', $_SESSION["userid"]);
$sth->execute();







while(($row=$sth->fetch())!==false){

  
  $b=htmlspecialchars($row['Info'], ENT_QUOTES);
echo <<<CART

{$b}




{$row['Pris']}
{$row['Antal']}

<a href="delete.php?cartpk={$row['Cartsid_pk']}">delete</a>
<br><br>


CART;




}





//tabell vem=sessionsid,antal, art_id_fk


//session
//tvätta
// dbanslutning
// använder pdo bindparam
//lagra artikel i db
//skriva ut korgen
// del länk <a href="delete.php?{$data['cartidpk']}">delete</a>
//kasssa länk


 ?>
