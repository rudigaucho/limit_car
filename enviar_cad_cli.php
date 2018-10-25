



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


</head>



<body>








<?php

$cod_cli = (mt_rand(1,1010200));

$cpf =$_POST['cpf'];
$nome =$_POST['nome'];
$uf =$_POST['uf'];
$endereco =$_POST['endereco']; 
$bairro =$_POST['bairro'];
$contato =$_POST['contato'];
$mod_vei =$_POST['mod_vei'];
$ano_vei =$_POST['ano_vei'];
$data_ag =$_POST['date'];
$modalidade =$_POST['modalidade'];








$sql = mysql_query ("select * from cliente where cpf = '$cpf' " );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "CLIENTE JÁ CADASTRADO VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into CLIENTE (cod_cli,nome,cpf,uf,endereco,bairro,contato,mod_vei,ano_vei,modalidade,status)";

$query.= "values ('$cod_cli','$nome','$cpf','$uf','$endereco','$bairro','$contato','$mod_vei','$ano_vei','$modalidade','PENDENTE')";

$query2 = "insert into instalacao (cod_cli,data_soli,status,data_ag)";

$query2.= "values ('$cod_cli',NOW(),'PENDENTE','$data_ag')
";












$sql = mysql_query($query);

$sql2 = mysql_query($query2);

if($sql && $sql2)
{
  
  
      echo ' <h2>CADASTRADO COM SUCESSO!<br></h2> <h2 >ANOTE O CÓDIGO DO CLIENTE:</h2>  <br> <h2 style="color:red;" > '. $cod_cli. '</h2><br><br>

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