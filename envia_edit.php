



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



$cpf =$_POST['cpf'];
$nome =$_POST['nome'];
$uf =$_POST['uf'];
$endereco =$_POST['endereco'];
$bairro =$_POST['bairro'];
$contato =$_POST['contato'];
$mod_vei =$_POST['mod_vei'];
$ano_vei =$_POST['ano_vei'];





$query = "UPDATE cliente SET  nome = '$nome', uf ='$uf', endereco = '$endereco', bairro = '$bairro',contato = '$contato', mod_vei = '$mod_vei',ano_vei = '$ano_vei' WHERE cpf = '$cpf'" ;





$sql = mysql_query($query);



if($sql)
{
  
  
      echo ' <h2>EDITADO COM SUCESSO!<br></h2> <br> <a href="dashboard.php">VOLTAR </a>';
  

  
}
else
{
  
  echo "<h2>Erro na edição!</h2> ";
  
}








?>

























</body>


</html>