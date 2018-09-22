<?php include "coon.php"; 


session_start();


?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
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
  <title>CADASTRO DE CLIENTE LIMIT CAR</title>
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
 <span><strong>CADASTRO DE CLIENTE LIMIT CAR</strong></span>
  <ul class="nav nav-tabs">
    
  
    
 


  </ul>
  <br>
  <form class="form" role="form" name="seachform" method="post" action="enviar_cad_cli.php " >

   

    <div class="form-group">

       <label for="email">NOME:</label>
      <input type="text" class="form-control" id="nome" name="nome"   required >
    </div>
   
      <div class="form-group">

       <label for="email">PLACA VEÍCULO:</label>
      <input type="text" class="form-control" id="cpf" name="cpf"   required >
    </div>
    
      <div class="form-group">

       <label for="email">UF:</label>
      <input type="text" class="form-control" id="uf" name="uf"   required >
    </div>
     
      <div class="form-group">

       <label for="email">ENDEREÇO:</label>
      <input type="text" class="form-control" id="endereco" name="endereco"   required >
    </div>
     
      <div class="form-group">

       <label for="email">BAIRRO:</label>
      <input type="text" class="form-control" id="bairro" name="bairro"   required >
    </div>
    
      <div class="form-group">

       <label for="email">CONTATO:</label>
      <input type="text" class="form-control" id="contato" name="contato"   required >
    </div>
    
      <div class="form-group">

       <label for="email">MODELO VEÍCULO:</label>
      <input type="text" class="form-control" id="mod_vei" name="mod_vei"   required >
    </div>
   
      <div class="form-group">

       <label for="email">ANO VEÍCULO:</label>
      <input type="text" class="form-control" id="ano_vei" name="ano_vei"   required >
    </div>

       <div class="form-group">
  <label for="sel1">MODALIDADE:</label>
  <select class="form-control "  name="modalidade"  >


    <option value="PASSEIO">  PASSEIO </option>
<option value="EMPRESA" > EMPRESA  </option>
<option value="CAMINHAO">  CAMINHAO </option>
<option value="MAQUINA" > MAQUINA  </option>
<option value="MOTO" > MOTO  </option>
<option value="ONIBUS" > ONIBUS  </option>
<option value="TRATOR" > TRATOR  </option>
<option value="NAUTICO" > NAUTICO  </option>
<option value="OUTROS" > OUTROS  </option>


</select>
</div>
    
 <div class="form-group">


<label  for="data">
       DATA DO AGENDAMENTO
      </label>
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 
  <div class="row">
  
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="data_ag" name="data_ag" placeholder="DD/MM/AAAA" type="text"/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'dd/mm/yyyy',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>





</div>

   
      

    



         
  





   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

