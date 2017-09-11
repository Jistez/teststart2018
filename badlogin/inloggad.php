<?php
session_start();

if (!isset($_SESSION["userid"])){

header("Location:inlogg.html");

}


?>

<html>
<body>

Hej

<?php

echo $_SESSION["userid"];

?>

du är nu inloggad<br><br>

<a href="logout.php">logga ut</a><br>

</body>
</html>
