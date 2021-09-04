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
    <p class="lead">Cadastro de pacientes internados em leitos de Uti Suspeitos / Confirmados</p>
  </div>
  </div>
   </div>    
      
       
 <div class="container-fluid">    
 <form class="was-validated"  name="regform" method="POST" action="gravafrmPrincipal.php" onsubmit="return valida()">
 
  <!-- Número da Solicitação  e Data da Solicitação -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="data da internação">Data da Internação</label>
      <input type="date" name="internacao" data-minlength="5"  class="form-control" id="cnome" placeholder="Data da Internação" required minlength="3">
      <div class="invalid-feedback">Favor preencher a data da internação</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="Cns">CNS</label>
      <input type="text" name="cns" data-minlength="5"  class="form-control" id="cnome" placeholder="cns" required minlength="3">
    <div class="invalid-feedback">Favor preencher o cns</div> 
  </div>
      </div>
    
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cns do Paciente da Solicitação">Nome do Paciente</label>
      <input type="text" name="nomePac" data-minlength="5"  class="form-control" id="cnome" placeholder="Nome do Paciente" required minlength="3">
      <div class="invalid-feedback">Favor preencher o nome do Paciente</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="Nome da Solicitação">idade</label>
      <input type="number" name="idade" data-minlength="1"  class="form-control" id="cnome" placeholder="Idade do Paciente" required minlength="1">
    <div class="invalid-feedback">Favor preencher a Idade do Paciente</div> 
    </div>
  </div>
     
     

      <!-- Número da Solicitação  e Data da Solicitação -->    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Convenio">Convênio</label>
     <select  class="form-control" name="convenio" id="exampleFormControlSelect2">
      <option>ESCOLHA</option>
      <option>SUS</option>
      <option>PRIVADO/CONVÊNIO</option>
      </select>  
      <div class="invalid-feedback">Favor preencher o convênio</div>
  </div>
      
      
      
  <div class="form-group col-md-6">
      <label for="TIPO DE LEITO">Tipo de Leito</label>
      <select  class="form-control" name="tipoLeito" id="exampleFormControlSelect2">
      <option>ESCOLHA</option>
      <option>UTI ADULTO</option>
      <option>UTI PEDIATRICA</option>
      <option>UTI NEONATAL</option>      
      </select>
      <div class="invalid-feedback">Favor preencher o Tipo do Leito</div> 
  </div>
      
 
  <div class="form-group col-md-6">
   <div class="form-group">
    <label for="VM">vm </label>
   <select  class="form-control" name="vm" id="exampleFormControlSelect2">
      <option>ESCOLHA</option>
      <option>SIM</option>
      <option>NÃO</option>
      <option>NI</option>
   
      </select>
  </div>
    </div> 
    
      
      
  <div class="form-group col-md-6">
   <div class="form-group">
    <label for="HOSPITAL DE ORIGEM">Hospital de Origem</label>
    <input type="text" name="hospitalOrigem" data-minlength="5"  class="form-control" id="cnome" placeholder="Hospital de Origem" required minlength="3">   
  
  </div>
    </div> 
 </div>
      
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="CRIH">CRIH</label>
      <select class="form-control" name="CRIH" id="exampleFormControlSelect2">
      <option>ESCOLHA</option>
      <option>FOZ</option>
      <option>GRANDE OESTE</option>
      <option>GRANPOLIS</option>
      <option>MEIO OESTE</option>
      <option>NORTE/NORDESTE</option>
      <option>SERRA</option>
      <option>SUL</option>
      <option>VALE</option>
     </select>  
      <div class="invalid-feedback">Favor preencher a CRIH</div>
  </div>
      
  <div class="form-group col-md-6">
      <label for="UNIDADE DE DESTINO">Unidade de Destino</label>
    <input type="text" name="unidadeDestino" data-minlength="5"  class="form-control" id="cnome" placeholder="Unidade de Destino" required minlength="3">   
  <div class="invalid-feedback">Favor preencher a Unidade de Destino</div> 
  </div>
  </div>  
       
     
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="cns do Paciente da Solicitação">Status</label>
      <select class="form-control" name="status" id="exampleFormControlSelect2">
      <option>ESCOLHA</option>
    <option>CONFIRMADO</option>
      <option>DESCARTADO</option>
      <option>SUPEIRO</option>
      </select>  
      <div class="invalid-feedback">Favor preencher o status do Paciente</div>
  </div>
      
  
  <div class="form-group col-md-6">
      <label for="#"></label>
      <input type="hidden" name="#" data-minlength="1"  class="form-control" id="cnome" placeholder="" >
    <div class="invalid-feedback"></div> 
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