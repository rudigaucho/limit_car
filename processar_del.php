

<?php
include "coon.php";


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}

$id2 = $_GET['cpf'];
$seleciona_dados = mysql_query("select * from cliente where cpf = '".$_GET['cpf']."'");
$linha_recupera_dados = mysql_num_rows($seleciona_dados);
$lin_dado_cli = mysql_fetch_array($seleciona_dados);
if($linha_recupera_dados == 0 ){

echo '

	<form class="form" role="form" name="seachform" method="post" action="enviar_cad_manut.php " >

   


   
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

  <form class="form" role="form" name="seachform" method="post" id="form" action="envia_del.php " >

   


   
      <div class="form-group">

       <label for="email">PLACA:</label>
      <input type="text" class="form-control" id="cpf" name="cpf"   onblur="completar_campos();" value="'.$id2.'" required  >
    </div>

        <div class="form-group">


       

        <div class="form-group">

       <label for="email">NOME:</label>
      <input type="text" class="form-control" id="nome" name="nome"   value="'.$lin_dado_cli['nome'].'" required  readonly  >
    </div>
    
      <div class="form-group">

       <label for="email">UF:</label>
      <input type="text" class="form-control" id="uf" name="uf"   value="'.$lin_dado_cli['uf'].'"required readonly  >
    </div>
     
      <div class="form-group">

       <label for="email">ENDEREÇO:</label>
      <input type="text" class="form-control" id="endereco" name="endereco"   value="'.$lin_dado_cli['endereco'].'" required readonly  >
    </div>
     
      <div class="form-group">

       <label for="email">BAIRRO:</label>
      <input type="text" class="form-control" id="bairro" name="bairro"  value="'.$lin_dado_cli['bairro'].'" required readonly >
    </div>
    
      <div class="form-group">

       <label for="email">CONTATO:</label>
      <input type="text" class="form-control" id="contato" name="contato"  value="'.$lin_dado_cli['contato'].'"  required readonly  >
    </div>
    
      <div class="form-group">

       <label for="email">MODELO VEÍCULO:</label>
      <input type="text" class="form-control" id="mod_vei" name="mod_vei"   value="'.$lin_dado_cli['mod_vei'].'" required readonly >
    </div>
   
      <div class="form-group">

       <label for="email">ANO VEÍCULO:</label>
      <input type="text" class="form-control" id="ano_vei" name="ano_vei" value="'.$lin_dado_cli['ano_vei'].'"  required readonly >
    </div   >   
    
    <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>
    ';} ?>  

    


 

