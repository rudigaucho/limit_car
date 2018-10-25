<?php include "coon.php";
include "dados_graficos.php";
 ?>


<?php 


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

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['passeio',<?php echo $passeio ?>],
          ['empresa',<?php echo $empresa ?>],
          ['caminhao',<?php echo $caminhao ?>],
          ['maquina',<?php echo $maquina ?>],
          ['moto',<?php echo $moto ?>],
          ['onibus',<?php echo $onibus ?>],
          ['trator',<?php echo $trator ?>],
          ['nautico',<?php echo $nautico ?>],
          ['outros',<?php echo $outros ?>]

        ]);

        var options = {
          title: 'Modalidades  ',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    


<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Ativos', 'Retiradas', ''],
          ['JAN', <?php echo $atv_jan ?>, <?php echo $ret_jan ?>, 0],
          ['FEV', <?php echo $atv_fev ?>, <?php echo $ret_fev ?>, 0],
          ['MAR', <?php echo $atv_mar ?>, <?php echo $ret_mar ?>, 0],
          ['ABR', <?php echo $atv_abr ?>, <?php echo $ret_abr ?>, 0],
          ['MAI', <?php echo $atv_mai ?>, <?php echo $ret_mai ?>, 0],
          ['JUN', <?php echo $atv_jun ?>, <?php echo $ret_jun ?>, 0],
          ['JUL', <?php echo $atv_jul ?>, <?php echo $ret_jul ?>, 0],
          ['AGO', <?php echo $atv_ago ?>, <?php echo $ret_ago ?>, 0],
          ['SET', <?php echo $atv_set ?>, <?php echo $ret_set ?>, 0],
          ['OUT', <?php echo $atv_out ?>, <?php echo $ret_out ?>, 0],
          ['NOV', <?php echo $atv_nov ?>, <?php echo $ret_nov ?>, 0],
          ['DEZ', <?php echo $atv_dez ?>, <?php echo $ret_dez ?>, 0]
        ]);

        var options = {
          chart: {
            title: 'Ativos / Retiradas',
            subtitle: 'Controle de clientes  <?php echo date('Y') ?>',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
              
              
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INSTALAÇÃO   <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      
                        <li>
                            <a href="cad_cli.php"><i class="glyphicon glyphicon-pencil"></i> Cadastro</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="pesq_cli.php"><i class="glyphicon glyphicon-search"></i> Busca Cliente</a>
                        </li>
                        <li class="divider"></li>
                          <li>
                            <a href="pesq_inst.php" ><i class="glyphicon glyphicon-search"></i> Busca Inst</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">MANUTENÇÃO   <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      
                        <li>
                            <a href="cad_manut.php"><i class="glyphicon glyphicon-pencil"></i> Cadastro</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="pesq_manut.php"><i class="glyphicon glyphicon-search"></i> Busca Manut</a>
                        </li>
                       
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">RETIRADA   <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      
                        <li>
                            <a href="cad_ret.php"><i class="glyphicon glyphicon-pencil"></i> Cadastro</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="pesq_ret.php"><i class="glyphicon glyphicon-search"></i> Busca Ret</a>
                        </li>
                       
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGOUT   <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      
                        <li>
                            <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Sair</a>
                        </li>
                       
                       
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
      
  
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Controle</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> LimitCar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->
                 
                <div class="col-lg-6" id="columnchart_material" style="width: 50%; height: 400px;"></div><br><br><br>
                <div  class="col-lg-6" id="piechart_3d" style="width: 50%; height: 400px;" ></div><br><br><br>
           
               <div class="col-lg-12" style="border: 1px black solid;">
                <label>INSTALAÇÕES PENDENTES</label>
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
      <th>CLIENTE</th>
          <th>DATA SOLICITAÇÃO</th>
          <th>DATA AGENDAMENTO</th>
          <th>ENDEREÇO</th>
          <th>BAIRRO</th>
        
            <th>CONTATO</th> <!-- ROTA -->
            <th>MODELO</th>
            <th>ANO</th>
            
             

      
 



      </tr>
    </thead>
  
  <?php








$sql = mysql_query ("select * from instalacao join cliente on instalacao.cod_cli=cliente.cod_cli where cliente.status = 'PENDENTE' ;" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
  <td> <?php echo $dado ["nome"];  ?></td>  
  <td> <?php echo $dado ["data_soli"];  ?></td> 
  <td> <?php echo $dado ["data_ag"];  ?></td>   
  <td> <?php echo $dado ["endereco"];  ?></td> 
  <td> <?php echo $dado ["bairro"];  ?></td>  
  <td> <?php echo $dado ["contato"];  ?></td> 
  <td> <?php echo $dado ["mode_vei"];  ?></td> 
  <td> <?php echo $dado ["ano_vei"];  ?></td> 
     

















      </tr> 


<?php

} } 

    ?>
  


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>



                 







                <!-- /.row -->


              <div style="border: 1px black solid;" class="col-lg-12" >
                <br><br><br><br><label>MANUTENÇÕES PENDENTES</label>
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
      <th>CLIENTE</th>
      <th>DATA SOLICITAÇÃO</th>
      <th>DATA AGENDAMENTO</th>
      <th>ENDEREÇO</th>
      <th>BAIRRO</th>
        
      <th>CONTATO</th> <!-- ROTA -->
      <th>OBS</th>
           
            
             

      
 



      </tr>
    </thead>
  
  <?php








$sql = mysql_query ("select * from manutencao join cliente on manutencao.cod_cli=cliente.cod_cli where manutencao.status = 'PENDENTE'" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="danger">
      
 <td> <?php echo $dado ["nome"];  ?></td>  
 <td> <?php echo $dado ["data"];  ?></td> 
 <td> <?php echo $dado ["data_ag"];  ?></td>    
 <td> <?php echo $dado ["endereco"];  ?></td> 
 <td> <?php echo $dado ["bairro"];  ?></td>  
 <td> <?php echo $dado ["contato"];  ?></td> 
 <td> <?php echo $dado ["obs"];  ?></td> 
    
     

















      </tr> 


<?php

} } 

    ?>
  


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>



 <div class="col-lg-12" style="border: 1px black solid; ">
               <br><br><br><br> <label>RETIRADAS PENDENTES</label>
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
      <th>CLIENTE</th>
      <th>DATA SOLICITAÇÃO</th>
      <th>DATA AGENDAMENTO</th>
      <th>ENDEREÇO</th>
      <th>BAIRRO</th>
        
      <th>CONTATO</th> <!-- ROTA -->
      <th>MODELO</th>
           
            
             

      
 



      </tr>
    </thead>
  
  <?php








$sql = mysql_query ("select * from retirada join cliente on retirada.cod_cli=cliente.cod_cli where retirada.status = 'PENDENTE'" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="warning">
      
 <td> <?php echo $dado ["nome"];  ?></td>  
 <td> <?php echo $dado ["data_soli"];  ?></td> 
 <td> <?php echo $dado ["data_ag"];  ?></td>      
 <td> <?php echo $dado ["endereco"];  ?></td> 
 <td> <?php echo $dado ["bairro"];  ?></td>  
 <td> <?php echo $dado ["contato"];  ?></td> 
 <td> <?php echo $dado ["mod_vei"];  ?></td> 
    
     

















      </tr> 


<?php

} } 

    ?>
  


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>




               
                

</body>

</html>
