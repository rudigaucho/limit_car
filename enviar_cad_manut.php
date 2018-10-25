



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

<title>CADASTRO CLIENTE</title>

<!-- ///////PASTA BOOTSTRAP ////////////////////-->
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>



<body>








<?php

$cod_cli = (mt_rand(1,1010200));

$cpf =$_POST['cpf'];
$cod_cli =$_POST['cod_cli'];
$obs =$_POST['obs'];
$data =$_POST['date'];



$sql2 = mysql_query ("select * from cliente where cod_cli = '$cod_cli' and status != 'ATIVO' " );
$row2 = mysql_num_rows($sql2);



$sql = mysql_query ("select * from manutencao where cod_cli = '$cod_cli' and status = 'pendente' " );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "CLIENTE JÁ POSSUI MANUTENÇÃO EM ABERTO!";
   
  

  
}

else if ($row2 >= 1)

{

echo "CLIENTE NÃO ESTA ATIVO!";

}




 else
 {

  



 



$query = "insert into manutencao (cod_cli,data,status,obs,data_ag)";

$query.= "values ('$cod_cli',NOW(),'PENDENTE','$obs', '$data')";














$sql = mysql_query($query);



if($sql)
{
  
  
      echo ' <h2>CADASTRADO COM SUCESSO!<br></h2> 

<a href="dashboard.php">VOLTAR </a>

 ';
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




}



?>

























</body>


</html>