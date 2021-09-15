<?php
include ("session.php"); 
include ("topoLimpo.php");
header("Content-Type: text/html; charset=ISO-8859-1");
echo $id=$_GET['cod'];
include("../conecta.php");
       
?>
  
 
 <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Data</th>
      <th scope="col">Destino</th>
      <th scope="col">Valor</th>
    </tr>
 </thead>  
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
    echo "<b>";
    echo "Total de Registros : ".$total = mysqli_num_rows($produtos); 
    echo "<br>";
     
    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
             
      echo "<tbody>";
      echo"<tr>";
      echo "<th scope='row'>";
      echo "<a href='ListarDetalhadamente.php?cod=$produto[Id]'>"; 
      echo $produto['Id'];  
      echo "</a>";     
      echo "</th>";  
      echo "<td>";
      echo $data=$produto['data']; 
      echo"</td>";
      echo "<td>";
      echo $produto['destino']; 
      echo"</td>";    
      echo "<td>";
      echo $produto['valor']; 
      echo"</td>";
      echo "</tr>";        
      echo"</tbody>";  
  } 


echo "</table>";

echo "<hr>";

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
  echo "<b>";
  echo "Total de Corridas : ".$total = mysqli_num_rows($produtos); 
  echo "<br>";
  $vetor[] = array();
  $soma=0;
  //exibe os produtos selecionados 
?>
  <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col">ID</th>
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
    echo "<th scope='row'>";
    echo "<a href='ListarDetalhadamente.php?cod=$produto[Id]'>"; 
    echo $produto['Id'];  
    echo "</a>";     
    echo "</th>";  
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
  echo "Total de Corridas : ".$total = mysqli_num_rows($produtos); 
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
      <th scope="col">Total em Horas</th>
      <th scope="col">Total em Minutos</th>
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


$intervalo  = abs($string2 - $string1);
var_dump('Diferença em segundos: ' . $intervalo);

$minutos   = round($intervalo / 60, 2);
var_dump('Diferença em minutos: ' . $minutos);

$horas   = round($minutos / 60, 2);
var_dump('Diferença em horas: ' . $horas);

    echo "<td>";
    var_dump($horas);
    echo"</td>";    

} 

?>