<?php include ("session.php"); 
include("topoLimpo.php"); 
include("../conecta.php"); 

/* criar um vetor Vazio */ 
  $destino = array();
  $pagamento =array();
  $valor =array();

  $destino[]=$_POST["destino"];
  $pagamento[]=$_POST["pagamento"];
  $valor[]=$_POST["valor"];

 
 $total = $valor[]=$_POST["valor"];
 echo "soma(a) = ".array_sum($total)."\n";


 include("rodapeLimpo.php"); ?>
 