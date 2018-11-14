<?php include "coon.php"; 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>


  <script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.querySelector("#dinamico").innerHTML = con_consulta.responseText;


document.getElementById("loading").style.display = "none";

}

}

var cpf = document.getElementById("cpf").value;

con_consulta.open("GET","processar_edit.php?cpf="+cpf,true);
con_consulta.send(null);






}
</script>
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">






<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='cad_mat.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>EDITAR CLIENTE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
           
      

        
      <li class="active"><a href="dashboard.php">Voltar</a></li>

                </ul>
            </div>

        </div>
    </div>

    <div class="container">
 <span><strong>EDITAR CLIENTE</strong></span>
  <ul class="nav nav-tabs">
    
 
    
 


  </ul>
  <br>
  <div class="col-sm-8  col-md-offset-2" id="teste" >
  <img src="img/loading.gif" id="loading" style="display:none; width:50px;height:50px;" />   
  <div ></div>
  <form class="form" role="form" name="seachform" method="post" id="form" action="envia_edit.php " >

  



    <div id="dinamico">
 
       <div class="form-group">
 
        <label for="email">PLACA:</label>
       <input type="text" class="form-control" id="cpf" name="cpf"   onblur="completar_campos();" required  >
     </div>
 
         
 
 
         <div class="form-group">
 
        <label for="email">NOME:</label>
       <input type="text" class="form-control" id="nome" name="nome"   required   >
     </div>
     
       <div class="form-group">
 
        <label for="email">UF:</label>
       <input type="text" class="form-control" id="uf" name="uf"   required  >
     </div>
      
       <div class="form-group">
 
        <label for="email">ENDEREÇO:</label>
       <input type="text" class="form-control" id="endereco" name="endereco"   required  >
     </div>
      
       <div class="form-group">
 
        <label for="email">BAIRRO:</label>
       <input type="text" class="form-control" id="bairro" name="bairro"   required  >
     </div>
     
       <div class="form-group">
 
        <label for="email">CONTATO:</label>
       <input type="text" class="form-control" id="contato" name="contato"   required   >
     </div>
     
       <div class="form-group">
 
        <label for="email">MODELO VEÍCULO:</label>
       <input type="text" class="form-control" id="mod_vei" name="mod_vei"   required  >
     </div>
    
       <div class="form-group">
 
        <label for="email">ANO VEÍCULO:</label>
       <input type="text" class="form-control" id="ano_vei" name="ano_vei"   required  >
     </div>
    </div>
     
       
     
 
 
 
 
    
       
 
     
 
 
 
          
   
 
 
 
 
 
    
     
    
  
    
 
  
    
      
 
      
 
         
    
 
   
 
   
     
    
      
 
     
     
   
   
     
     
 
 
     
   </form>
 

  
     </div>
  
</div>




</body>
</html>

