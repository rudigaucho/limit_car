<?php 






//  QUERY PARA ALIMENTAÇÃO DO GRAFICO MESAL ATIVO
$sql1 = mysql_query ("select COUNT(*) AS atv_jan from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '01'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $atv_jan = $dado["atv_jan"];

 }

 $sql2 = mysql_query ("select COUNT(*) AS atv_fev from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '02'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql2 )){


  $atv_fev = $dado["atv_fev"];

 }


 $sql3 = mysql_query ("select COUNT(*) AS atv_mar from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '03'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql3 )){


  $atv_mar = $dado["atv_mar"];

 }

 $sql4 = mysql_query ("select COUNT(*) AS atv_abr from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '04'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql4 )){


  $atv_abr = $dado["atv_abr"];

 }


 $sql5 = mysql_query ("select COUNT(*) AS atv_mai from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '05'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql5 )){


  $atv_mai = $dado["atv_mai"];

 }

 $sql6 = mysql_query ("select COUNT(*) AS atv_jun from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '06'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql6 )){


  $atv_jun = $dado["atv_jun"];

 }
 $sql7 = mysql_query ("select COUNT(*) AS atv_jul from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '07'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql7 )){


  $atv_jul = $dado["atv_jul"];
 }


 $sql8 = mysql_query ("select COUNT(*) AS atv_ago from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '08'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql8 )){


  $atv_ago = $dado["atv_ago"];
 }


 $sql9 = mysql_query ("select COUNT(*) AS atv_set from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '09'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql9 )){


  $atv_set = $dado["atv_set"];
 }

 $sql10 = mysql_query ("select COUNT(*) AS atv_out from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '10'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql10 )){


  $atv_out = $dado["atv_out"];
 }

 $sql11 = mysql_query ("select COUNT(*) AS atv_nov from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '11'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql11 )){


  $atv_nov = $dado["atv_nov"];
 }


 $sql12 = mysql_query ("select COUNT(*) AS atv_dez from instalacao where status = 'ATIVO' AND MONTH(data_soli) = '12'  and year(data_soli) = year(NOW());" );
 while ($dado = mysql_fetch_assoc($sql12 )){


  $atv_dez = $dado["atv_dez"];
 }


//     QUERY PARA ALIMENTAÇÃO DO GRAFICO MESAL RETIRADOS





$sql13 = mysql_query ("select COUNT(*) AS ret_jan from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '01'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql13 )){


 $ret_jan = $dado["ret_jan"];
}

$sql14 = mysql_query ("select COUNT(*) AS ret_fev from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '02'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql14 )){


 $ret_fev = $dado["ret_fev"];
}

$sql15 = mysql_query ("select COUNT(*) AS ret_mar from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '03'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql15 )){


 $ret_mar = $dado["ret_mar"];
}

$sql16 = mysql_query ("select COUNT(*) AS ret_abr from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '04'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql15 )){


 $ret_abr = $dado["ret_abr"];
}


$sql17 = mysql_query ("select COUNT(*) AS ret_mai from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '05'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql15 )){


 $ret_mai = $dado["ret_mai"];
}


$sql18 = mysql_query ("select COUNT(*) AS ret_jun from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '06'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql18 )){


 $ret_jun = $dado["ret_jun"];
}

$sql19 = mysql_query ("select COUNT(*) AS ret_jul from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '07'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql19 )){


 $ret_jul = $dado["ret_jul"];
}


$sql20 = mysql_query ("select COUNT(*) AS ret_ago from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '08'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql20 )){


 $ret_ago = $dado["ret_ago"];
}


$sql21 = mysql_query ("select COUNT(*) AS ret_set from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '09'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql21 )){


 $ret_set = $dado["ret_set"];
}

$sql22 = mysql_query ("select COUNT(*) AS ret_out from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '10'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql22 )){


 $ret_out = $dado["ret_out"];
}


$sql23 = mysql_query ("select COUNT(*) AS ret_nov from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '11'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql23 )){


 $ret_nov = $dado["ret_nov"];
}


$sql24 = mysql_query ("select COUNT(*) AS ret_nov from instalacao where status = 'ENCERRADA' AND MONTH(data_soli) = '12'  and year(data_soli) = year(NOW())" );
while ($dado = mysql_fetch_assoc($sql24 )){


 $ret_dez = $dado["ret_dez"];
}



// QUERY PARA ALIMENTAÇÃO DO GRAFICO MODALIDADE



$sql25 = mysql_query ("select count(*) as passeio from cliente where modalidade = 'passeio' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql25 )){


 $passeio = $dado["passeio"];
}


$sql26 = mysql_query ("select count(*) as empresa from cliente where modalidade = 'empresa' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql26 )){


 $empresa = $dado["empresa"];
}

$sql27 = mysql_query ("select count(*) as caminhao from cliente where modalidade = 'caminhao' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql27 )){


 $caminhao = $dado["caminhao"];
}


$sql28 = mysql_query ("select count(*) as maquina from cliente where modalidade = 'maquina' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql28 )){


 $maquina = $dado["maquina"];
}


$sql30  = mysql_query ("select count(*) as moto from cliente where modalidade = 'moto' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql30 )){


 $moto = $dado["moto"];
}

$sql31  = mysql_query ("select count(*) as onibus from cliente where modalidade = 'onibus' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql31 )){


 $onibus = $dado["onibus"];
}


$sql32  = mysql_query ("select count(*) as trator from cliente where modalidade = 'trator' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql32 )){


 $trator = $dado["trator"];
}

$sql33  = mysql_query ("select count(*) as nautico from cliente where modalidade = 'nautico' and status = 'ATIVO'" );
while ($dado = mysql_fetch_assoc($sql33 )){


 $nautico = $dado["nautico"];
}


$sql34  = mysql_query ("select count(*) as outros from cliente where modalidade = 'outros'and status = 'ATIVO' " );
while ($dado = mysql_fetch_assoc($sql34 )){


 $outros = $dado["outros"];
}










?>