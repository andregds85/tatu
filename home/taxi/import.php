<?php include ("session.php");  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
      
 <!-- Estilo de foter -->
 <link href="css/estiloFoter.css" rel="stylesheet">
 
 <title><?php include("title.php"); ?></title>
  </head>
  <body>
 
<!-- Topo da Página -->      
      
<?php 
      
include("topo.php"); 
include("../conecta.php");

 
?>
      
  <!-- Fluid Jumbotron --> 
      
 <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
     

    <h1 class="display-4">Estabelecimentos de  Saúde .CSV</h1>
    <p class="lead">Estabelecimentos de Saúde importar para o sistema </p>
  </div>
  </div>
   </div> 
      
      
  <!-- tempo do Cadastro -->      
<div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
    <h1 class="display-4">Passo 1 - Limpe o Diretório. </h1>
     <p align="center">Limpe o diretório clicando aqui <a href="impcsv/apagar.php">Limpar Diretório</a> 
       </p>
  </div>
</div>
</div>     
       
<!-- tempo do Cadastro -->      
<div class="container-fluid">      
<div class="jumbotron jumbotron-fluid">
<div class="container">
<h1 class="display-4">Passo 2 - Importar o arquivo .CVS
</h1>
<form method="post" action="impcsv/recebe_upload.php" enctype="multipart/form-data">
<label>Arquivo:</label>
<input type="file" name="arquivo" />
<input type="submit" value="Enviar" />
</form>
</div>     
<br>
 <p align="center">Antes de importar o CSV, limpe o diretório clicando aqui <a href="impcsv/apagar.php">Limpar Diretório</a> </p>
 </div>
 </div>
 </div>    
 <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
    <h1 class="display-4">Modelo de .CSV  </h1>
     <p class="card-text">A importação dos .CSV foram feitos especificamente para esses modelos. 
       </p>
     
  <p class="card-text"><a href="modelo/ESTABELECIMENTOS%20DE%20SA%C3%9ADE.csv">Modelo </a>
  </p>
     

     
  </div>
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