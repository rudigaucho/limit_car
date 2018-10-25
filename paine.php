<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php
include "coon.php";

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>







<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">








  <link rel="icon" href="img/logo_oi.png">







</head>



<body>



<?php

session_start();
if(!isset($_SESSION["senha"]) && !isset($_SESSION["login"]))
{
	header("Location: index.html");
	exit;
	
	
}

else
{


	
	header("Location: dashboard.php");
}









	

	
	




?>

 





















</body>

</html>