<?php include "coon.php"; ?>


<?php 


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
<link rel="icon" href="logo.png">






<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='dashboard.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>PESQUEISA DE MATERIAL</title>
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
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li><a href="#"></a></li> 
      <li class="active"><a href="dashboard.php">Voltar</a></li>
    
   <li class="active"><a href="#">Logout</a></li>
    </ul>

  </div>

</nav>
 

  <span style="margin-left: 15%;"><strong> PESQUISA DE INSTALAÇÃO</strong></span><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_ins.php" >
    <div class="form-group">
   


     
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div style="float:left;" class="bootstrap-iso ">
   <div class="container">
  <div class="row">

   <div class="form-group">
      <label for="email">CÓD CLIENTE OU NOME</label>
      <input type="text" class="form-control" id="cli" name="cli" placeholder="Pesquisa" >
    </div>
   


  <label for="sel1">STATUS:</label>
  <select class="form-control " id="status" name="status"  >

       <option value="_" selected>  TODAS</option>
    <option value="PENDENTE">  PENDENTE</option>
    <option value="ATIVO">  ATIVO</option>
<option value="CANCELADA" > CANCELADA  </option>
</select>




  
    
</select>


  <br><br><br><br>
    
    <button type="submit"  name="submit" id="submit" class="btn btn-primary" style="float:right;" >Busca</button> 

     </div>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
           <th>CLIENTE</th>
           <th>DATA SOLICITAÇÃO</th>
           <th>DATA INSTALAÇÃO</th>
           <th>ENDEREÇO</th>
           <th>BAIRRO</th>
            <th>CONTATO</th>
            <th>VEÍCULO</th>
            <th>ANO</th>
             <th>DATA INST</th>
            <th>STATUS</th>
            <th>ATUALIZAR</th>
        
              
        
        
        
 
      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{



$cli = $_POST['cli'];
$status = $_POST['status'];

$sql = mysql_query ("SELECT * FROM CLIENTE   JOIN INSTALACAO ON INSTALACAO.COD_CLI = CLIENTE.COD_CLI where cliente.nome like '%$cli%' and cliente.status like '%$status%'" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("SELECT * FROM CLIENTE   JOIN INSTALACAO ON INSTALACAO.COD_CLI = CLIENTE.COD_CLI where cliente.nome like '%$cli%' and cliente.status like '%$status%'" );



$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      

<td> <?php echo $dado ["nome"];  ?></td>
<td> <?php echo $dado ["data_soli"];  ?></td>

<td> <?php echo $dado ["data_ins"];  ?></td>
<td> <?php echo $dado ["endereco"];  ?></td>
<td> <?php echo $dado ["bairro"];  ?></td>
<td> <?php echo $dado ["contato"];  ?></td>
<td> <?php echo $dado ["mod_vei"];  ?></td>
<td> <?php echo $dado ["ano_vei"];  ?></td>
<td> <?php echo $dado ["data_ins"];  ?></td>
<td> <?php echo $dado ["status"];  ?></td>






<td><a  data-toggle="modal" href="#myModal<?php echo $dado ['cod_ins'];  ?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </a></td>

  




<div class="modal fade" id="myModal<?php echo $dado ['cod_ins'];  ?>" role="dialog">
    <div class="modal-dialog">
    </div>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">OBSERVAÇÕES<h4>
          <p><strong>CODIGO INSTALAÇÃO:</strong> <?php echo $dado ["cod_ins"];  ?></p><br>
          <p><strong>CODIGO DO CLIENTE:</strong> <?php echo $dado ["cod_cli"];  ?></p><br>
        
        
        <form role="form" id="form" name="seachform" method="post" action="pesq_ins.php " >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="cod_ins" id="cod_ins" value="<?php echo $dado["cod_ins"] ?>" readonly required>
</div>
<div class="form-group" >
 
    <input type="hidden" class="form-control" name="cod_cli" id="cod_cli" value="<?php echo $dado["cod_cli"] ?>" readonly required>
</div>
  <div class="form-group" >
      <select class="form-control " id="status2" name="status2"  >

       
   
    <option value="ATIVO">  INSTALADO</option>
<option value="CANCELADA" > CANCELADA  </option>
</select>
</div>
    
     
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > Atualizar</button> 
 
  
</form>
          
            

        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



        </div>
      </div>
      
    </div>
  </div>





  
</div>



  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   } }   

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>



<?php










if (isset($_POST ['submit2']) )
{

$cod_cli =$_POST['cod_cli'];
$cod_ins =$_POST['cod_ins'];
$status2 =$_POST['status2'];

$query = "update instalacao SET  data_ins = NOW(),status = '$status2' where cod_ins = '$cod_ins'  ";


$query2 = "update cliente SET  status = '$status2' where cod_cli = '$cod_cli'  ";







$sql = mysql_query($query);
$sql2 = mysql_query($query2);


if($sql && $sql2)
{
  
  
    echo ' <h2>ATUALIZADA  COM SUCESSO!!';

  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=dashboard.php">';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}


}



 

?>



</body>
</html>

