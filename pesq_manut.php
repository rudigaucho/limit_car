 <?php include "coon.php"; 





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
  <title>PESQUISA DE MANUTENÇÃO</title>
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

 <span><strong>PESQUISA POR MANUTENÇÃO</strong></span><br><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_manut.php" style="margin-left:10%;">
     <div class="form-group">
      <label for="email">Digite o cpf do cliente</label>
      <input type="text" class="form-control"  name="cpf" placeholder="Pesquisa" required >
    </div>
     

    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
      <th>CÓD MANUT</th>
          <th>NOME</th>
          <th>CPF</th>
          <th>UF</th>
        
            <th>CONTATO</th> <!-- ROTA -->
            <th>MODELO</th>
            <th>ANO</th>
            <th>DATA SOLI</th>
            <th>DATA ENCE</th>
             <th>STATUS</th>
             
             <th>OBS</th>
             <th>ENCERRAR</th>
      
 



      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{



$cpf = $_POST['cpf'];



$sql = mysql_query ("select data_enc,obs,manutencao.data,cpf,cod_manut,nome,uf,contato,mod_vei,ano_vei,manutencao.status from manutencao join cliente on manutencao.cod_cli=cliente.cod_cli where cliente.cpf = '$cpf';" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
 <td> <?php echo $dado ["cod_manut"];  ?></td>     
<td> <?php echo $dado ["nome"];  ?></td>
<td> <?php echo $dado ["cpf"];  ?></td>
<td> <?php echo $dado ["uf"];  ?></td>
<td> <?php echo $dado ["contato"];  ?></td>
<td> <?php echo $dado ["mod_vei"];  ?></td>
<td> <?php echo $dado ["ano_vei"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
<td> <?php echo $dado ["data_enc"];  ?></td>
<td> <?php echo $dado ["status"];  ?></td>









<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal2<?php echo $dado ['cod_manut'];  ?>" >OBS</button> </td> 


<?php if ($dado ["status"] == 'PENDENTE') { ?>

<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['cod_manut'];  ?>" >ENCERRAR</button> </td>  <?php } else {?>   <td> </td> <?php } ?>
 

<div class="modal fade" id="myModal2<?php echo $dado ['cod_manut'];  ?>" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">OBSERVAÇÃO:</h4>
      </div>
      <div class="modal-body">
        <p><?php echo $dado ["obs"];  ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
      </div>
    </div>

  </div>
</div>


<div class="modal fade" id="myModal<?php echo $dado ['cod_manut'];  ?>" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">BAIXAR MANUTENÇÃO<h4>
         <form role="form" id="form" name="seachform" method="post" action="pesq_manut.php " >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="cod_cli" id="cod_cli" value="<?php echo $dado["cod_cli"] ?>" readonly required>
    <label for="email">CÓD. MANUT: </label>
    <input type="text" class="form-control" name="cod_manut" id="cod_manut" value="<?php echo $dado["cod_manut"] ?>" readonly required>

    
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

$cod_manut =$_POST['cod_manut'];
$cod_cli =$_POST['cod_cli'];






if (isset($_POST ['submit2']) )
{




$query = "update manutencao SET  status = 'ENCERRADA',data_enc = NOW() where cod_manut = '$cod_manut'";












$sql = mysql_query($query);



if($sql )
{
  
  
    echo ' <h2>BAIXA EFETUADA  COM SUCESSO!!';

  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=dashboard.php';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}


}



 

?>

</body>
</html> 

