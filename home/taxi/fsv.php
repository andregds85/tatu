<?php include ("session.php");  

$consulta=$_SESSION['usr'];      

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
 <!-- Estilo de fotter -->
 <link href="css/estiloFoter.css" rel="stylesheet">
 
 <title><?php include("title.php"); ?></title>
  </head>
  <body>
 <!-- Topo da Página -->      
<?php 
include("topo.php"); 
include("../conecta.php");
      

$comando20 = "SELECT * FROM usuarios where usuario ='$consulta'";
$res = mysqli_query($con, $comando20);
      
      while ($linha = mysqli_fetch_array($res))
                                
               {
                 $id = $linha["id"];
                 $nome=$linha["nome"];
                 $sobrenome=$linha["sobrenome"];
         
              echo "<div class='alert alert-dark' role='alert'>";
              $hoje = date('d/m/Y');
              echo " Olá ";
              echo "$nome";
          
              echo "<br>";
              echo "<p>$sobrenome";

              echo "</p>";
              echo "Tenha um Bom";
              echo "<br>";
              echo $hoje;
              echo"</div>";  
      }
  
     


      
?>
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="container-fluid">
 <img src="logo/1.jpg" width="180" height="180" alt="..." class="rounded-circle">
</div>      

    <h1 class="display-4" >Taxi Floripa</h1>
    <h3>Baixe o aplicativo para Android </h3>
    <a href="app/taxifloripa.apk">Download</a>
    <p class="lead"></p>
  </div>
  </div>
    
      
        
  <?php include("rodapeLimpo.php"); ?>
       
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>