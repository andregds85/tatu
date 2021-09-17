<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php include("title.php"); ?></title>
    <script src="js/validator.js"></script>
    <body>
         
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="fsv.php">TaxiFloripa.ml </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="fsv.php">Inicio <span class="sr-only">(Página atual)</span></a>
      </li>
     



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Destino das Corridas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      
           <a class="dropdown-item" href="CadastrodeCorridas.php">Cadastro de Destino das Corridas</a>
           <a class="dropdown-item" href="ListarCorridas.php">Listar Destino das Corridas</a>
        </div>
      </li>
      
   



    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Completando Corridas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="completaCorrida.php">Completando Corrida</a>
   
      
                 
            
     
        </div>
          
        
           
           
        
        
        
        
        
           
        
        
        
        
        
          
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="frmCadastraUsCovid.php">Cadastro de usuarios </a>


             <a class="dropdown-item" href="ListarUScovid.php">Listar  usuarios </a>
            
            
     
        </div>
      </li>
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        
           
     </ul>
    <form class="form-inline my-2 my-lg-0"  method="post" action="sair.php">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
    </form>
  </div>
</nav>
      