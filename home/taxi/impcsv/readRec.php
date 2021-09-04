<?php
include("../conecta.php");
/*include("../../topo.php");*/
?>
<div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
    <h1 class="display-4"> Importando dados  </h1>
     <p class="card-text"> Dados do CSV importado com Sucesso
       </p>
      <p class="card-text"> <a href="../fsv.php">Voltar</a>
       </p>
  </div>
  </div>
   </div>
    
<?php

$row = 1;
/* $obs="Sem Vizualização";
$status="Pendente"; */
  
    
$nome_arquivo= 'uploads/dados.csv';

$objeto= fopen($nome_arquivo, 'r');

if (($handle = fopen($nome_arquivo, "r")) !== FALSE) {

 while(($dados = fgetcsv($handle, 1000, ",")) !== FALSE) {
        
     
/* $internacao=date('y/m/d', strtotime($dados[0])); */
 /*$Nascimento=date('Y-m-d', strtotime($dados[7])); */      
        

/* Calculo da idade */ 
/*$date = new DateTime($Nascimento);
$interval = $date->diff( new DateTime( date('Y-m-d') ) );

$idade=$interval->format( '%Y');   */
     
 
        
 $sql=("insert into estabsaude(cnes, nomef, uf, municipio) values ('$dados[0]','$dados[1]','$dados[2]','$dados[3]')");      
        
 
 $resDados = mysqli_query($con, $sql);
  echo '<pre>';
  print_r($dados);
  echo '</pre>';
}
fclose($objeto);
}
    
include("../rodapeLimpo.php");    
?>



    
    
