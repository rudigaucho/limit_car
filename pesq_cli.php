<?php include "coon.php"; 

session_start();


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

document.getElementById("form").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var pt = document.getElementById("pt").value;

con_consulta.open("GET","processar.php?pt="+pt,true);
con_consulta.send(null);






}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio Caixa Fechada</x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='dashboard.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>PESQUISA DE CLIENTES</title>
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

   
      
      <li class="active"><a href="dashboard.php">Voltar</a></li>
       

       
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

 <span><strong>PESQUISA DE CLIENTES</strong></span><br><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_cli.php" style="margin-left:10%;">
    <div class="form-group">
   

    </div>
     
  <div class="form-group">
      <label for="email">Digite o Nome do cliente</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Pesquisa" >
    </div>
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
        <th>CÓDIGO</th>
        <th>NOME</th>
     
         <th>CPF</th>
        <th>UF</th>
          <th>ENDEREÇO</th>
         <th>BAIRRO</th>
         <th>CONTATO</th>
         <th>MODELO DO VEÍCULO</th>
         <th>ANO DO VEÍCULO</th>
        <th>STATUS</th>



      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{



$nome = $_POST['nome'];
$sql = mysql_query ("select  * from cliente  where nome like '%$nome%' " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("select  count(*) as conta from script  where ccto = '$ccto' or cliente like '%$ccto%'  ; " );



$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
<td> <?php echo $dado ["cod_cli"];  ?></td>
<td> <?php echo $dado ["nome"];  ?></td>
<td> <?php echo $dado ["cpf"];  ?></td>
 <td> <?php echo $dado ["uf"];  ?></td>
 <td> <?php echo $dado ["endereco"];  ?></td>
 <td> <?php echo $dado ["bairro"];  ?></td>
 <td> <?php echo $dado ["contato"];  ?></td>
  <td> <?php echo $dado ["mod_vei"];  ?></td>
   <td> <?php echo $dado ["ano_vei"];  ?></td>
    <td> <?php echo $dado ["status"];  ?></td>








<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">SCRIPT<h4>
        
        
<p> <br> <strong><?php echo $dado ["script"];  ?></strong></p>

        
     
        
        </h4>
        <div class="modal-body">



   

         

        <form method="post" action="busca_pendente.php">
          
            

        </div>

         <div class="modal-body">
      



   

        <form method="post" action="busca_pendente.php">
          
            

        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          </form>
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
   } }   

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>





</body>
</html>

