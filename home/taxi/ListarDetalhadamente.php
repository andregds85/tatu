<!DOCTYPE html>
<html lang="pt-br">
   <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">
     
    <script language="JavaScript" type="text/javascript" src="cidades-estados-1.4-utf8.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
           
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGi2yFNYwFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php include ("title.php"); ?></title>
    </head>
  <body>

<?php include ("session.php");
      header("Content-Type: text/html; charset=ISO-8859-1");

include("topo.php");

$cod=$_GET['cod'];

?>

<!-- Topo da Página -->      
      
<?php  
include("../conecta.php");
$unidade="asdasda";      
      
?>
      
      
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Detalhamento</h1>
        <p class="lead">Detalhamento </p>
    </div>
</div>      
      
      
    
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">INTERNACAO</th>
      <th scope="col">CNS</th>
      <th scope="col">NOME DO PACIENTE</th>
    </tr>
 </thead>  
<?php          
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
 
    //seleciona todos os itens da tabela 
    $cmd = "select * from ocupainternadouti"; 
     
    $produtos = mysqli_query($con,$cmd); 

    //conta o total de itens 
    $total = mysqli_num_rows($produtos); 

    //seta a quantidade de itens por página, neste caso, 2 itens 
    $registros = 1000; 

    //calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 

    //variavel para calcular o início da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 
 
    //seleciona os itens por página 
   /* $cmd = "select * from fila where unidadeDesejada ='$unidade1'  limit $inicio,$registros"; */
    $cmd = "select * from ocupainternadouti where id ='$cod'";
 
    $produtos = mysqli_query($con,$cmd); 
    $total = mysqli_num_rows($produtos); 
     
    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
           
      echo "<tbody>";
      echo "<tr>";
      echo "<th scope='row'>";
      echo $produto['id']." - "; 
      echo "</th>";  
     
      echo "<td>";
      echo  $dataSol=$produto['internacao'];
      /*echo $solicitao=date('d/m/'.'20y', strtotime($dataSol));*/
      echo "</td>";
      echo "<td>";
      echo $produto['cns']." - "; 
      echo "</td>";
     
      echo "<td>";
      echo $produto['nomePac']." - ";    
      echo "</td>";
      echo "</tr>";  
        
      echo "<tr>";
      echo "<th scope='row'>";
        
      echo " - ";    
      echo "</th>";  
     
      
      echo "<td>";
      echo "<b>";    
      echo "IDADE";
      echo "</td>";
      echo "<td>";
      echo "</b>";
        
      echo "<b>";    
      echo "CONVENIO";
      echo"</td>";
      echo "</b>";
        
      echo "<b>";    
      echo "<td>";
      echo "<b>";    
      echo "TIPO DE LEITO";        
      echo"</td>";
      echo "</b>";       
      echo "</tr>";      
        
      echo"<tr>";
      echo "<th scope='row'>";
      echo "</th>";  
     
      echo "<td>";
      echo $produto['idade']." - "; 
      echo"</td>";
          
      echo "<td>";
      echo $produto['convenio']." - "; 
      echo"</td>";
     
      echo "<td>";
      echo $produto['tipoLeito']." - "; 
      echo"</td>";
      echo "</tr>";  
     
      echo"<tr>";
      echo "<th scope='row'>";
        
      echo " - ";    
      echo "</th>";  
     
      echo "<td>";
      echo "<b>";    
      echo "VM";
      echo "</td>";
      echo "<td>";
      echo "</b>";
        
      echo "<b>";    
      echo "HOSPITAL DE ORIGEM";
      echo"</td>";
      echo "</b>";
        
      echo "<b>";    
      echo "<td>";
      echo "<b>";    
      echo "CRIH";        
      echo"</td>";
      echo "</b>";       
      echo "</tr>";      
              
      echo"<tr>";
      echo "<th scope='row'>";
      echo "</th>";  
     
      echo "<td>";
      echo $produto['vm']." - "; 
      echo"</td>";
          
      echo "<td>";
      echo $produto['hospitalOrigem']." - "; 
      echo"</td>";
     
      echo "<td>";
      echo $produto['CRIH']." - "; 
      echo"</td>";
      echo "</tr>";     
        
      echo"<tr>";
      echo "<th scope='row'>";
      echo " - ";    
      echo "</th>";  
     
      echo "<td>";
      echo "<b>";    
      echo "UNIDADE DE DESTINO";
      echo "</td>";
      echo "<td>";
      echo "</b>";
        
      echo "<b>";    
      echo "STATUS"; 
      echo"</td>";
      
      echo "<td>";
      echo "<b>";         
      echo "OBSERVACAO";    
      echo "</b>";
      echo "</td>";

 
      echo"<tr>";
      echo "<th scope='row'>";
      echo "</th>";  
     
      echo "<td>";
      echo $produto['unidadeDestino']." - "; 
      echo"</td>";
          
      echo "<td>";
      echo $produto['status'].""; 
      echo"</td>";
     
      echo "<td>";
      echo $produto['obs']."";    
      echo"</td>";
        
        
       echo"<tr>";
      echo "<th scope='row'>";
      echo "</th>";  
     
      echo "<td>";
      echo"</td>";
          
      echo "<td>";
      echo"</td>";
     
      echo "<td>";
       echo "<a href='ExcluiPacinternado.php?us_id=$cod' class='btn btn-primary'>Apagar</a>";  
      echo"</td>";
        
      echo "</tr>";     
      echo"</tbody>"; 
      echo "<div class='card-body'>";
      echo "</div>";              
      echo "</div>";              
      } 
     echo "</div>";    
?>
     
<div class="container-fluid">
     
 
 <form class="was-validated"  name="regform" method="POST" action="updateDetalha.php" onsubmit="return valida()">

  <div class="form-group">
    <label for="exampleFormControlSelect2">Status do Paciente</label>
    <select  class="form-control" name="status" id="exampleFormControlSelect2">
      <option>CONFIRMADO</option>
      <option>DESCARTADO</option>
      <option>SUSPEITO</option>
      </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Observacao</label>
    <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    
     <input type="hidden" id="custId" name="cod" value="<?php echo $cod; ?>"</input>

   <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
    
</form>     
     
    
    
</div>     
   <br><br><br>  
     