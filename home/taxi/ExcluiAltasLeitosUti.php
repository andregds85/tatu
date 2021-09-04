<?php include ("session.php"); ?>

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
 
<!-- Topo da Página -->      
      
<?php include("topo.php"); 

 
$us_id=$_GET['us_id'];
  

include("../conecta.php");

 
// executa a comando
$sql = "delete from  altautilc where id = $us_id";
$res = mysqli_query($con, $sql);
 

 
    ?>  
      
  
  
    <h1 class="display-4">Mensagem</h1>
    <?php      
          if ($res)
  {

    ?><div class="alert alert-primary" role="alert">
Paciente apagado com sucesso.</div>          
   <?php           
              
              
  }
  else
   {  
    ?>  

            
<div class="alert alert-primary" role="alert">
erro ao apagar.</div> 
    </div>
  </div>
   </div>  
 <?php
      
   }
          
          
     include("rodapeLimpo.php"); ?>
    
 
  
  </body>
</html>







