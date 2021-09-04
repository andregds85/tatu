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
    <h1 class="display-4">Covid 19</h1>
    <p class="lead">CADASTRO ALTA UTI PARA LEITO CLINICO</p>
  </div>
  </div>
   </div>    
             
 <div class="container-fluid">    
 <form class="was-validated"  name="regform" method="POST" action="gravafrmAltaLeitosUti.php" onsubmit="return valida()">
 
  <!-- Número da Solicitação  e Data da Solicitação -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="data da internação">Data da Internação</label>
      <input type="date" name="internacao" data-minlength="5"  class="form-control" id="cnome" placeholder="Data da Internação" required minlength="3">
      <div class="invalid-feedback">Favor preencher a data da internação</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="Nome do Paciente">Nome do Paciente</label>
      <input type="text" name="nome" data-minlength="5"  class="form-control" id="cnome" placeholder="Nome do paciente" required minlength="3">
    <div class="invalid-feedback">Favor preencher o nome do paciente</div> 
  </div>
      </div>
    
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nome do Paciente">STATUS</label>
      <select  class="form-control" name="status" id="exampleFormControlSelect2">
      <option>ESCOLHA</option>
      <option>ALTA</option>
      <option>VAZIO</option>      
      </select>  
      <div class="invalid-feedback">Favor preencher o convênio</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="Nome da Solicitação">OBSERVACAO</label>
     <textarea class="form-control" name="obs" id="exampleFormControlTextarea1" rows="3"></textarea>
    <div class="invalid-feedback">  </div> 
    </div>
  </div>
      
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="data da internação">Data da Alta</label>
      <input type="date" name="dataAlta" data-minlength="5"  class="form-control" id="cnome" placeholder="Data da Internação" minlength="3">
  </div>
     
    </div> 
     
       
   
           
    <div class="form-row">
      <label for="#"></label>
      <input type="hidden" name="#"   class="form-control" id="cnome" placeholder="">
    <div class="invalid-feedback"></div>     
    </div>   
       
     
    <div class="form-row">
    <div class="form-group col-md-6">
     <input type="submit" class="btn btn-primary" Value="Cadastrar">
    </div>
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