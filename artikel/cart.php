
<meta charset="utf8">


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
  <div id="{$row['Cartsid_pk']}">
  {$b}
  {$row['Pris']}
  {$row['Antal']}
  <button type="button" class="btn" id="{$row['Cartsid_pk']}">knapp1</button>
  //<a href="delete.php?cartpk={$row['Cartsid_pk']}">delete</a>
  <br><br>

  </div>
CART;

}


 ?>

 <script>
 var classname = document.getElementsByClassName("btn");

 for (var i = 0; i < classname.length; i++) {
     classname[i].addEventListener('click', function(event){
      ajaxFunction(event.target);

    });
 }

 function ajaxFunction(element){
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


            var id=element.getAttribute("id");
            id=document.getElementById(id);

            console.log(id);
            id.parentNode.removeChild(id);


       }else{

       // om inte state är lika med 4

       }
   }
 ajaxRequest.open("GET", "delete.php?cartpk=" + element.getAttribute('id'), true);
 ajaxRequest.send(null);
 }


 </script>
