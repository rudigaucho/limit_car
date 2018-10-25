



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='dashboard.php'",7000);
	
	
}


</script> 

<?php

session_start();




include "coon.php";








	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='dashboard.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>CADASTRO DE RETIRADA</title>


</head>



<body>








<?php

$cod_cli = (mt_rand(1,1010200));

$cpf =$_POST['cpf'];
$cod_cli =$_POST['cod_cli'];
$obs =$_POST['obs'];
$data =$_POST['date'];

$sql2 = mysql_query ("select * from retirada where cod_cli = '$cod_cli' and status = 'PENDENTE' " );
$row2 = mysql_num_rows($sql2);

$sql = mysql_query ("select * from cliente where cod_cli = '$cod_cli' and status = 'ATIVO' " );
$row = mysql_num_rows($sql);

$sql3 = mysql_query ("select * from manutencao where cod_cli = '$cod_cli' and status = 'PENDENTE' " );
$row3 = mysql_num_rows($sql3);

if  ($row2 >= 1)
{


echo "CLIENTE JÁ POSSUI RETIRADA EM ABERTO!";
   
  

  
}


else if  ($row3 >= 1)
{

	echo "CLIENTE  POSSUI MANUTENÇÃO EM ABERTO!";

}


 else if  ($row >= 1)
{



   
  

  




  



 



$query = "insert into retirada (cod_cli,data_soli,status,data_ag)";

$query.= "values ('$cod_cli',NOW(),'PENDENTE','$data')";



















$sql = mysql_query($query);




if($sql)
{
  
  
      echo ' <h2>CADASTRO DE RETIRADA REALIZADA COM SUCESSO!<br></h2> 

<a href="dashboard.php">VOLTAR </a>

 ';
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}







}

else

{


	echo "CLIENTE NÃO POSSUI INSTALAÇÕES ATIVAS OU POSSUI PENDENCIA DE RETIRADA, VERIFIQUE!";
}
?>

























</body>


</html>