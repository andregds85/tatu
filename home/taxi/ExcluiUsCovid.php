<?php include ("session.php"); ?>

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
      
<title><?php include("title.php"); ?>)</title>
 </head>
 <body>
 
<!-- Topo da Página -->      
      
<?php include("topo.php"); 

 
$us_id=$_GET['us_id'];
  

include("../conecta.php");

 
// executa a comando
$sql = "delete from  usuarios where id = $us_id";
$res = mysqli_query($con, $sql);
 

 
    ?>  
      
      <!-- Fluid Jumbotron --> 
      
 <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
      <div class="container-fluid">
</div>      
  
    <h1 class="display-4">Mensagem</h1>
    <?php      
          if ($res)
  {
     ?>
  <div class="alert alert-primary" role="alert">
 Usuario  apagado com sucesso.</div>
    </div>
              
              
    <?php          
              
  }
  else
   {  
    ?>  

            
  <div class="alert alert-primary" role="alert">
 Usuario  apagado com sucesso.</div>
    </div>
             
 
      
      
      
 <?php
      
   }  
          
          
     include("rodapeLimpo.php"); ?>
    
      
      
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>







