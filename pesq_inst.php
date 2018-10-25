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


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">







<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='pesq_41.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>PESQUISA DE INSTALAÇÃO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



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

<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
  .container-fluid
  {
  background-color: orange;
  }
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
        <a class="navbar-brand" href="#" style="color:black;"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">


       <li class="active"><a href="dashboard.php">VOLTAR</a></li>



    
      

       
    
      
    </ul>
  </div>
</nav>

 <span><strong>PESQUISA POR INSTALAÇÃO</strong></span><br><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_inst.php" style="margin-left:10%;">
     <div class="form-group">
      <label for="email">Digite a placa do veículo</label>
      <input type="text" class="form-control"  name="cpf" placeholder="Pesquisa" required >
    </div>
     

    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
      <th>CÓD INST</th>
          <th>NOME</th>
          <th>PLACA</th>
          <th>UF</th>
        
            <th>CONTATO</th> <!-- ROTA -->
            <th>MODELO</th>
            <th>ANO</th>
            <th>DATA INST</th>
            <th>DATA AG</th>
             <th>STATUS</th>
             

             <th>ENCERRAR</th>
             <th>REAGENDAR</th>
      
 



      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{



$cpf = $_POST['cpf'];



$sql = mysql_query ("select data_ag,data_ins,cpf,cod_ins,cliente.cod_cli,nome,uf,contato,mod_vei,ano_vei,instalacao.status from instalacao join cliente on instalacao.cod_cli=cliente.cod_cli where cliente.cpf = '$cpf';" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
 <td> <?php echo $dado ["cod_ins"];  ?></td>     
<td> <?php echo $dado ["nome"];  ?></td>
<td> <?php echo $dado ["cpf"];  ?></td>
<td> <?php echo $dado ["uf"];  ?></td>
<td> <?php echo $dado ["contato"];  ?></td>
<td> <?php echo $dado ["mod_vei"];  ?></td>
<td> <?php echo $dado ["ano_vei"];  ?></td>
<td> <?php echo $dado ["data_ins"];  ?></td>
<td> <?php echo $dado ["data_ag"];  ?></td>
<td> <?php echo $dado ["status"];  ?></td>











<?php if ($dado ["status"] == 'PENDENTE') { ?>

<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['cod_ins'];  ?>" >BAIXAR</button> </td>  <?php } else {?>   <td> </td> <?php } ?>

<?php if ($dado ["status"] == 'PENDENTE') { ?>
<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $dado ['cod_ins'];  ?>" >REAGENDAR</button> </td>  <?php } else {?>   <td> </td> <?php } ?>



<div class="modal fade" id="myModal<?php echo $dado ['cod_ins'];  ?>" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">BAIXAR INSTALAÇÃO:<h4>
         <form role="form" id="form" name="seachform" method="post" action="pesq_inst.php " >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="cod_cli" id="cod_cli" value="<?php echo $dado["cod_cli"] ?>" readonly required>
    <label for="email">CÓD. INST: </label>
    <input type="text" class="form-control" name="cod_ins" id="cod_ins" value="<?php echo $dado["cod_ins"] ?>" readonly required>

    
    <label for="email">NOME: </label>
    <input type="text" class="form-control" id="porta" value="<?php echo $dado["nome"] ?>" name="porta" readonly  required>
    <label for="email">MODELO: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["mod_vei"] ?>" name="cabo"   readonly required>
    <label for="email">ANO: </label>
    <input type="text" class="form-control"  value="<?php echo $dado["ano_vei"] ?>" name="ocupacao"   readonly required>
   
    
     
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > BAIXAR</button> 
 
  
</form>




        <!-- TESTE PARA FORM-->










         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



        

         
    
          
            

       
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</div>

<!-- MODAL REAGENDAMENTO -->


<div id="myModal2<?php echo $dado ['cod_ins'];  ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">REAGENDAR INSTALAÇÃO</h4>
      </div>
      <div class="modal-body">
      <form role="form" id="form" name="seachform" method="post" action="pesq_inst.php " >
  <div class="form-group" >

  
 
    <input type="hidden" class="form-control" name="cod_cli" id="cod_cli" value="<?php echo $dado["cod_cli"] ?>" readonly required>
    <input type="hidden" class="form-control" name="cod_ins" id="cod_ins" value="<?php echo $dado["cod_ins"] ?>" readonly required>

    
    <label for="email">NOME: </label>
    <input type="text" class="form-control" id="porta" value="<?php echo $dado["nome"] ?>" name="porta" readonly  required>
    <br><br><br>
    <label for="email">NOVO AGENDAMENTO: </label>
   
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
           <input class="form-control" id="date" name="date" required placeholder="DD/MM/AAAA" type="text" />
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
 
 <script>
   $(document).ready(function(){
 var date_input=$('input[name="date"]'); //our date input has the name "date"
 var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
 date_input.datepicker({
 format: 'yyyy-mm-dd',
 container: container,
 todayHighlight: true,
 autoclose: true,
 })
 })
 </script>
 
 
 
 
 
 </div>
     
 <button type="submit"  name="submit3" id="submit2" class="btn btn-default"  > REAGENDAR</button> 
 
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">FECHAR</button>
      </div>
    </div>

  </div>
</div>









<!--                              -->













      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }    }

    ?>



<?php



    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>

<?php

$cod_ins =$_POST['cod_ins'];
$cod_cli =$_POST['cod_cli'];
$data =$_POST['date'];






if (isset($_POST ['submit2']) )
{




$query = "update instalacao SET  status = 'ENCERRADA',data_ins = NOW() where cod_ins = '$cod_ins'";


$query2 = "update cliente SET  status = 'ATIVO' where cod_cli = '$cod_cli'";









$sql = mysql_query($query);
$sql2 = mysql_query($query2);


if($sql && $sql2 )
{
  
  
    echo ' <h2>BAIXA EFETUADA  COM SUCESSO!!';

  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=dashboard.php';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}


}


if (isset($_POST ['submit3']) )
{




$query = "update instalacao SET  data_ag = '$data' where cod_ins = '$cod_ins'";












$sql = mysql_query($query);



if($sql )
{
  
  
    echo ' <h2>REAGENDADA  COM SUCESSO!!';


   
   

    echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=dashboard.php';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO REAGENDAMENTO!!';

  
}


}



 

?>

</body>
</html> 

