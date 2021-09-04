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

$cod=$_GET['us_id'];

?>

<!-- Topo da Página -->      
      
<?php  
include("../conecta.php");
$unidade="asdasda";      
      
?>
      
      
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">status para gerar grafico</h1>
        <p class="lead">status para gerar grafico </p>
    </div>
</div>      
      
      
    
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">INTERNACAO</th>
      <th scope="col">DATA ALTA</th>
      <th scope="col">NOME DO PACIENTE</th>
      <th scope="col">GRAFICO</th>    
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
    $cmd = "select * from altautilc where id ='$cod'";
 
    $produtos = mysqli_query($con,$cmd); 
    $total = mysqli_num_rows($produtos); 
     
    //exibe os produtos selecionados 
    while ($produto = mysqli_fetch_array($produtos)) { 
           
      echo "<tbody>";
      echo "<tr>";
      echo "<th scope='row'>";
      echo $produto['id']." - "; 
      $cod=$produto['id'];    
      echo "</th>";  
     
      echo "<td>";
        $dataSol=$produto['internacao'];
      echo $solicitao=date('d/m/'.'20y', strtotime($dataSol));
      echo "</td>";
      echo "<td>";
      $dataSol1=$produto['dataAlta'];
      echo $solicitao=date('d/m/'.'20y', strtotime($dataSol1));
      echo "</td>";
     
      echo "<td>";
      echo $produto['nome']." - ";    
      echo "</td>";
      
      echo "<td>";
      echo $produto['grafico']." - ";    
      echo "</td>";    
        
        
      echo "</tr>";  
        
      echo "<tr>";
      echo "<th scope='row'>";
        
      echo " - ";    
      echo "</th>";  
     
         
     
   
      echo "</tr>";     
      echo"</tbody>"; 
      echo "<div class='card-body'>";
      echo "</div>";              
      echo "</div>";              
      } 
     echo "</div>";    
?>
     
<div class="container-fluid">
     
 
 <form class="was-validated"  name="regform" method="POST" action="updategAltaUti.php" onsubmit="return valida()">

  <div class="form-group">
    <label for="exampleFormControlSelect2">Status para o grafico</label>
    <select  class="form-control" name="grafico" id="exampleFormControlSelect2">
      <option>CONFIRMADO</option>
      <option>SUSPEITO</option>
      </select>
  </div>

    
     <input type="hidden" id="custId" name="cod" value="<?php echo $cod; ?>"</input>

   <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
    
</form>     
     
    
    
</div>     
   <br><br><br>  
     