<?php include("session.php"); ?>

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title><?php include ("title.php"); ?></title>
      
</head>
<body>
 
<!-- Topo da Página -->      
      
<?php include("topo.php"); ?>
      <p></p>
      
      <!-- Fluid Jumbotron --> 
      
  <div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Covid19</h1>
    <p class="lead">Cadastro de Usuários</p>
  </div>
  </div>
   </div>    
      
      
   <!-- Inserir Usuário -->      
      
 <div class="container-fluid">    

  <form class="was-validated"  name="regform" method="POST" action="gravaUScovid.php" onsubmit="return valida()">
 
  <!-- nome e sobrenome -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" name="nome" data-minlength="5"  class="form-control" id="cnome" placeholder="Nome" required minlength="3">
      <div class="invalid-feedback">Favor preencher o nome</div>
    
        
    </div>
      
    <div class="form-group col-md-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" name="sobrenome" class="form-control" id="cnome" placeholder="Sobrenome" required minlength="3">
      <div class="invalid-feedback">Favor preencher o Sobrenome</div>  
              
    </div>
    </div>

      
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">E-mail</label>
      <input type="text" name="usuario"  class="form-control" id="cnome" placeholder="E-mail" required minlength="6">
      <div class="invalid-feedback">Favor preencher o E-mail</div>
    
        
    </div>
      
   
      
      <!-- nome e sobrenome -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Senha">Senha</label>
      <input type="password" name="Senha" class="form-control" id="cnome" placeholder="Senha" required minlength="6">
      <div class="invalid-feedback">Favor preencher a senha</div>
    
        
    </div>
      
    <div class="form-group col-md-6">
      <label for="sobrenome">Repetir a Senha</label>
      <input type="password" class="form-control" id="cnome" name="repetirSenha" placeholder="repetir senha" required minlength="6">
      <div class="invalid-feedback">Favor repetir a Senha</div>  
              
    </div>
    </div> 
      </div>
      
      
       <!-- nome e sobrenome -->    
  <div class="form-row">
    <div class="form-group col-md-6">
 
      
        
        
  
        
        
 
      
      <div class="form-row">
    <div class="form-group col-md-6">
     
     
    
        
    </div>
      
      <div class="form-row">
    <div class="form-group col-md-6">
     
      
        
    </div>
       
     
      
   


      
      
      
      
    
    </div>

      
 
       <div class="form-row">
    <div class="form-group col-md-6">

     <input type="submit" class="btn btn-primary" Value="Cadastrar">
        
    </div>
      
      
     

   </form>
      
       
     
      </div>     

      
     
      
       <?php include("rodapeLimpo.php"); ?>
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>