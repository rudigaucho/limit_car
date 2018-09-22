<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$host = "localhost";
$user = "root";
$pass = "";
$database ="limit_car";
$connection = mysql_connect($host,$user,$pass,$database) or die (mysql_error());
mysql_select_db($database)or die (mysql_error());


$con = new PDO ("mysql:host=$host;port=3306;dbname=$database",$user,$pass);


$con->exec("SET CHARACTER SET utf8");



/*


$host = "db4free.net";
$user = "rudinei_feijo";
$pass = "1590101";
$database ="dbprimarios";
$connection = mysql_connect($host,$user,$pass,$database) or die (mysql_error());
mysql_select_db($database)or die (mysql_error());



$host = "mysql.hostinger.com.br";
$user = "u213856303_rudin";
$pass = "1597ru";
$database ="u213856303_pri";
$connection = mysql_connect($host,$user,$pass,$database) or die (mysql_error());
mysql_select_db($database)or die (mysql_error());
*/
?>



<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>




