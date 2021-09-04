<?php include ("session.php"); 
header("Content-Type: text/html; charset=ISO-8859-1");


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Language" content="pt-br">
     
    <script language="JavaScript" type="text/javascript" src="cidades-estados-1.4-utf8.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      
  <meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php include ("title.php"); ?></title>
    </head>
  <body>
 
<!-- Topo da Página -->      
<?php include("topo.php"); 
include("../conecta.php");
?>

     
     
     
<?php          
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
 
    //seleciona todos os itens da tabela 
    $cmd = "select * from ocupainternadouti"; 
    $produtos = mysqli_query($con,$cmd); 
    $produtosdesc = mysqli_query($con,$cmd); 
    $produtossusp = mysqli_query($con,$cmd); 

     
    //conta o total de itens 
    $total = mysqli_num_rows($produtos); 
    $totaldesc = mysqli_num_rows($produtosdesc); 
    $totalsusp = mysqli_num_rows($produtossusp); 

     

    //seta a quantidade de itens por página, neste caso, 2 itens 
    $registros = 10000; 
    $registrosdesc = 10000; 
    $registrossusp = 10000; 

     
     
     
     
    //calcula o número de páginas arredondando o resultado para cima 
    $numPaginas = ceil($total/$registros); 
    $numPaginasdesc = ceil($totaldesc/$registrosdesc); 
    $numPaginassusp = ceil($totalsusp/$registrossusp); 


    //variavel para calcular o início da visualização com base na página atual 
    $inicio = ($registros*$pagina)-$registros; 
 
    //seleciona os itens por página 
    $cmd = "select * from ocupainternadouti where status='CONFIRMADO' ORDER BY nomePac ASC limit $inicio,$registros"; 
    
     
    $cmddesc = "select * from ocupainternadouti where status='DESCARTADO' ORDER BY nomePac ASC limit $inicio,$registros";  
     
     
     $cmdsusp = "select * from ocupainternadouti where status='SUSPEITO' ORDER BY nomePac ASC limit $inicio,$registros";  
     
     
     
    $produtos = mysqli_query($con,$cmd);
    $produtosdesc = mysqli_query($con,$cmddesc); 
    $produtossusp = mysqli_query($con,$cmdsusp); 
 
    echo "<b>";
    $confirmados = mysqli_num_rows($produtos); 
    $descartados = mysqli_num_rows($produtosdesc);
    $suspeito = mysqli_num_rows($produtossusp);  

    
     
?>
     
     <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Confirmados',  <?php echo $confirmados; ?>],
          ['Suspeitos',    <?php echo $suspeito; ?>],
          ['Descartados',  <?php echo $descartados; ?>],    
        ]);

        var options = {
          title: 'INTERNACOES EM  UTI - MONITORADAS PELA CERIH ',
            subtitle: 'Pacientes internados em leitos de Uti Suspeitos / Confirmados/Descartados',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
       <div class="container-fluid">    

    <div id="piechart" style="width: 900px; height: 500px;"></div>
      
      </div>    
       <div class="container-fluid">  
       <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Confirmados</th>
      <th scope="col">Suspeitos</th>
      <th scope="col">Descartados</th>
    </tr>
 </thead>  
     
 <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo $confirmados; ?></td>
      <td> <?php echo $suspeito; ?></td>
      <td><?php echo $descartados; ?></td>
    </tr>

  </tbody>
</table>     
     
      </div>
      
      
      <?php /*
      
      $var=date("m");
switch ($var) {
    case 01
        echo "<p>Janeiro</p>".date('Y');
        break;
    case 02
        echo "<p>Fevereiro</p>" . " ".date(Y);
        break;
    case 03
        echo "<p>Março</p>" . " ".date(Y);
        break;
    case 04
        echo "<p>Abril</p>" . " ".date(Y);
        break;
    case "Friday":
        echo "<p>Friday is like a superhero that always arrives just in time to stop me from savagely beating one of my coworkers with a keyboard. </p>";
        break;
    case "Saturday":
        echo "<p>Q: Why do brunettes know so many blonde jokes?</p>
                    <p>A: It gives them something to do on Saturday night.</p> ";
        break;
    case "Sunday":
        echo "Wherever you go, no matter what the weather, always bring your own sunshine.";
        break;
    default:
        echo "<p>Please Enter A day Of The Week</p>";
}  */
?>
      
      
      
      
      
      
       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['<?php  echo date("m"); ?>', 'Confirmados', 'Suspeitos', 'Descartados'],
          ['<?php  echo date("Y"); ?>', <?php echo $confirmados; ?>, <?php echo $suspeito; ?>, <?php echo $descartados; ?>]
        ]);

        var options = {
          chart: {
            title: 'INTERNACOES EM  UTI - MONITORADAS PELA CERIH ',
            subtitle: 'Pacientes internados em leitos de Uti Suspeitos / Confirmados/Descartados',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
      
      
       <div class="container-fluid">  
       <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Confirmados</th>
      <th scope="col">Suspeitos</th>
      <th scope="col">Descartados</th>
    </tr>
 </thead>  
     
 <tbody>
    <tr>
      <th scope="row"></th>
      <td><?php echo  $confirmados; ?></td>
      <td> <?php echo $suspeito; ?></td>
      <td><?php echo  $descartados; ?></td>
    </tr>

  </tbody>
</table>     
 </div>
      
       
 <!-- https://developers.google.com/chart/interactive/docs/gallery/map -->     
      
  </body>
</html>
      
      
      
      
      
      
      
      