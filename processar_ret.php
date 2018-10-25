

<?php
include "coon.php";


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>




<link rel="icon" href="img/logo_oi.png">
	

  <title>Sistema Limit Car</title>
  <link rel="icon" href="img/key.png">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  <!-- ///////PASTA BOOTSTRAP ////////////////////-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<?php

$id2 = $_GET['cpf'];
$seleciona_dados = mysql_query("select * from cliente where cpf = '".$_GET['cpf']."'");
$linha_recupera_dados = mysql_num_rows($seleciona_dados);
$lin_dado_cli = mysql_fetch_array($seleciona_dados);
if($linha_recupera_dados == 0 ){

echo '

	<form class="form" role="form" name="seachform" method="post" action="enviar_ret.php " >

   


   
      <div class="form-group">

       <label for="email">PLACA:</label>
      <input type="text" class="form-control" id="cpf" name="cpf"   onblur="completar_campos();" value="'.$id2.'" required  >
    </div>

        <div class="form-group">

         <div class="form-group">

<label for="email">CLIENTE NÃO CADASTRADO</label>
    </div>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>

';
}


else
{

echo '

  <form class="form" role="form" name="seachform" method="post" action="enviar_ret.php " >

   


   
      <div class="form-group">

       <label for="email">PLACA:</label>
      <input type="text" class="form-control" id="cpf" name="cpf"   onblur="completar_campos();" value="'.$id2.'" required  >
    </div>

        <div class="form-group">


       <div class="form-group">

       <label for="email">CÓDIGO DO CLIENTE:</label>
      <input type="text" class="form-control" id="cpf" name="cod_cli"  value="'.$lin_dado_cli['cod_cli'].'" required readonly >
    </div>

        <div class="form-group">

       <label for="email">NOME:</label>
      <input type="text" class="form-control" id="nome" name="nome"   value="'.$lin_dado_cli['nome'].'" required  readonly >
    </div>
    
      <div class="form-group">

       <label for="email">UF:</label>
      <input type="text" class="form-control" id="uf" name="uf"   value="'.$lin_dado_cli['uf'].'"required readonly >
    </div>
     
      <div class="form-group">

       <label for="email">ENDEREÇO:</label>
      <input type="text" class="form-control" id="endereco" name="endereco"   value="'.$lin_dado_cli['endereco'].'" required readonly >
    </div>
     
      <div class="form-group">

       <label for="email">BAIRRO:</label>
      <input type="text" class="form-control" id="bairro" name="bairro"  value="'.$lin_dado_cli['bairro'].'" required readonly >
    </div>
    
      <div class="form-group">

       <label for="email">CONTATO:</label>
      <input type="text" class="form-control" id="contato" name="contato"  value="'.$lin_dado_cli['contato'].'"  required  readonly >
    </div>
    
      <div class="form-group">

       <label for="email">MODELO VEÍCULO:</label>
      <input type="text" class="form-control" id="mod_vei" name="mod_vei"   value="'.$lin_dado_cli['mod_vei'].'" required readonly >
    </div>
   
      <div class="form-group">

       <label for="email">ANO VEÍCULO:</label>
      <input type="text" class="form-control" id="ano_vei" name="ano_vei" value="'.$lin_dado_cli['ano_vei'].'"  required readonly >
    </div>
      <div class="form-group">
    
    

      <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>
 
 


   
      

    



         
  





   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
';
}





  
  ?>

