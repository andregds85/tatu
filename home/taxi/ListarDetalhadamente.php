<?php
include ("session.php"); 
include ("topoLimpo.php");
header("Content-Type: text/html; charset=ISO-8859-1");
$id=$_GET['cod'];
include("../conecta.php");
       
?>
  
 

<?php          
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
 
    //seleciona todos os itens da tabela 
    $cmd = "select * from corridas"; 
    $produtos = mysqli_query($con,$cmd); 

    //conta o total de itens 
    $total = mysqli_num_rows($produtos); 

    //seta a quantidade de itens por página, neste caso, 2 itens 
    $registros = 10000; 

    //calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

 
    //seleciona os itens por página 
    $cmd = "select * from corridas where Id = '$id'";  
    $produtos = mysqli_query($con,$cmd); 
    $total = mysqli_num_rows($produtos); 
     
    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
             
      echo "<a href='ListarDetalhadamente.php?cod=$produto[Id]'>"; 
      $produto['Id'];  
      echo "</a>";     

      $data=$produto['data']; 
   
      $produto['destino']; 
     
      $produto['valor']; 
    
  } 

  $money[] = array();



echo "<table>";

  //seleciona todos os itens da tabela 
  $cmd = "select * from corridas"; 
  $produtos = mysqli_query($con,$cmd); 

  //conta o total de itens 
  $total = mysqli_num_rows($produtos); 

  //seta a quantidade de itens por página, neste caso, 2 itens 
  $registros = 10000; 

  //calcula o número de páginas arredondando o resultado para cima 
  $numPaginas = ceil($total/$registros); 


  //seleciona os itens por página 
  $cmd = "select * from corridas where data = '$data'";  
  $produtos = mysqli_query($con,$cmd); 
  $total = mysqli_num_rows($produtos); 
  $vetor[] = array();
  $soma=0;
  //exibe os produtos selecionados 
?>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Data</th>
      <th scope="col">Destino</th>
      <th scope="col">Pagamento</th>
      <th scope="col">Valor</th>
      <th scope="col">Soma</th>
    </tr>
 </thead> 

<?php

    $cartao=0;
    $dinheiro=0;

  while ($produto = mysqli_fetch_array($produtos)) { 
           
    echo "<tbody>";
    echo"<tr>";
    echo "<td>";
    echo $produto['data']; 
    echo"</td>";
    echo "<td>";
    echo $produto['destino']; 
    echo"</td>";    
    echo "<td>";
    echo $produto['pagamento'];
      
    echo"</td>";   
    echo "<td>";
    echo $produto['valor']; 
    $float = floatval($produto['valor']);
    echo "<td>";
    echo $soma = $soma + $float;       
    echo "</tr>";     
    $vetor[]=$produto['valor']; 
    echo"</td>";



    if ($produto['pagamento']=="dinheiro"){

      $dinheiro=$dinheiro+$float;
      $money[] =$dinheiro;


    }

    if ($produto['pagamento']=="cartao"){

      $cartao=$cartao+$float;

    }



    echo "</tr>";        
    echo"</tbody>"; 


} 

?>
<table class="table table-hover">
<thead>
  <tr>
  <th scope="col">Total no Cartao </th>
    <th scope="col">Total no Dinheiro</th>
    <th scope="col">Total no Dia</th>

  </tr>

<?php


echo "<tr>";
echo "<td scope='col'>";
echo $cartao;
echo "</td>";
 
echo "<td scope='col'>";
echo $dinheiro;
echo "</td>";

echo "<td scope='col'>";
echo $soma;
echo "</td>";

echo "</tr>";


?>


<input type="button" value="inprimir" onclick="window.print()"/>


<?php 


echo "</table>";

echo "<hr>";

echo "<table>";

  //seleciona todos os itens da tabela 
  $cmd = "select * from completa"; 
  $produtos = mysqli_query($con,$cmd); 

  //conta o total de itens 
  $total = mysqli_num_rows($produtos); 

  //seta a quantidade de itens por página, neste caso, 2 itens 
  $registros = 10000; 

  //calcula o número de páginas arredondando o resultado para cima 
  $numPaginas = ceil($total/$registros); 


  //seleciona os itens por página 
  $cmd = "select * from completa where dataAtual	 = '$data'";  
  $produtos = mysqli_query($con,$cmd); 
  echo "<b>";
  $total = mysqli_num_rows($produtos); 
  echo "<br>";
  $vetor[] = array();
  $soma=0;
  //exibe os produtos selecionados 
?>
  <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">COD/PLACA</th>
      <th scope="col">Hora Inical</th>
      <th scope="col">Hora Final</th>
    </tr>
 </thead> 

<?php

    $cartao=0;
    $dinheiro=0;

  while ($produto = mysqli_fetch_array($produtos)) { 
           
    echo "<tbody>";
    echo"<tr>";
    echo "<th scope='row'>";
    echo $produto['codPlaca'];  
    echo "</a>";     
    echo "</th>";  
    echo "<td>";
    echo $produto['horaInicial']; 
    $hi=$produto['horaInicial']; 
    echo"</td>";
    echo "<td>";
    echo $produto['horaFinal']; 
    $hf=$produto['horaFinal']; 
    echo"</td>";    

    
$string1 = strtotime($hi);
$string2 = strtotime($hf);


?>

<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Horas Trabalhadas</th>
      <th scope="col">Minutos Trabalhados</th>
      <th scope="col">Segundos Trabalhados</th>

    </tr>
 </thead> 


 <?php 


$intervalo  = abs($string2 - $string1);

$minutos   = round($intervalo / 60, 2);

$horas   = round($minutos / 60, 2);


echo "<tbody>";
echo"<tr>";
echo "<th scope='row'>";
echo $horas;  
echo "</a>";     
echo "</th>";  
echo "<td>";
echo $minutos; 
echo"</td>";
echo "<td>";
echo $intervalo;
echo"</td>";    
echo"</tr>";
echo "</table>";


?>


<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Motorista</th>
      <th scope="col">Kilometro Inicial</th>
      <th scope="col">Kilometro Final</th>
    </tr>
 </thead> 

<?php

echo "<tbody>";
echo"<tr>";
echo "<th scope='row'>";
echo $produto['nome'];  
echo "</a>";     
echo "</th>";  
echo "<td>";
echo $inicio=$produto['kInicial'];  
$k1 = floatval($produto['kInicial']);
echo"</td>";
echo "<td>";
echo $fim=$produto['kfinal'];  
$k2 = floatval($produto['kfinal']);

echo"</td>";    
echo"</tr>";
echo "</tbody>";
echo "</table>";


?>


<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Total de Kilometros</th>
      <th scope="col">GNV</th>
      <th scope="col">Gasolina</th>
    </tr>
 </thead> 

<?php

echo "<tbody>";
echo"<tr>";
echo "<th scope='row'>";
$tk=$k2-$k1;
echo $tk;
echo "</th>";  
echo "<td>";
echo $gnvl=$produto['gnv'];  
$gnv = floatval($gnvl);

echo"</td>";
echo "<td>";
echo $gasolina1=$produto['gasolina'];  
$gasolina = floatval($gasolina1);
echo"</td>";    
echo"</tr>";
echo "</tbody>";
echo "</table>";

?>

<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Lavagem</th>
      <th scope="col">Outros</th>
      <th scope="col">Total(GNV+GASOL+LAV+OUTR)</th>
    </tr>
 </thead> 

<?php

echo "<tbody>";
echo"<tr>";
echo "<td>";
echo $lavacaol=$produto['lavacao'];  
$lavacao = floatval($lavacaol);
echo "</th>";  
echo "<td>";
echo $outrosl=$produto['outros'];  
$outros = floatval($outrosl);
echo"</td>";
echo "<td>";

$totalDespesa = $gnv+$gasolina+$lavacao+$outros; 
echo $totalDespesa;

echo"</td>";    
echo"</tr>";
echo "</tbody>";
echo "</table>";


?>


<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Vale</th>
      <th scope="col">Total (Corridas - Vale)</th>
      <th scope="col">Porcentagem da Comissao</th>

      <th scope="col">Comissao</th>
    </tr>
 </thead> 

<?php

echo "<tbody>";
echo"<tr>";
echo "<td>";
echo $vale1=$produto['vale'];  
$vale = floatval($vale1);
echo "<td>";
$meuArray=array_sum($vetor);
echo $v=$meuArray-$vale;
echo"</td>";


echo "<td>";
echo $c=$produto['comissao'];  
echo"</td>";


echo "<td>";
$co=$produto['comissao']; 
$com = floatval($co);

echo ($v * $com)/100;
echo"</td>";    
echo"</tr>";
echo "</tbody>";
echo "</table>";


?>

<table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">Diaria</th>
      <th scope="col">Liquido</th>
      <th scope="col">Envelope</th>

    </tr>
 </thead> 


<?php

echo "<tbody>";
echo"<tr>";
echo "<td>";
$comissao=($v * $com)/100;
$diaria=$comissao-$vale;
echo $diaria;
echo "</td>";


echo "<td>";
$comissao=($v * $com)/100;
$diaria=$comissao-$vale;
echo $tudo=array_sum($vetor)-$totalDespesa-$diaria;
echo "</td>";


echo "<td>";
$envelope=$tudo-(array_sum($money));

echo ($envelope);

echo "</td>";

echo"</tr>";
echo "</tbody>";
echo "</table>";

} 



?>