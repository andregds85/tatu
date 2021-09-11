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
        <a class="dropdown-item" href="import.php">Listar Completando Corrida</a>
        <a class="dropdown-item" href="import.php">Importar estabelecimento de Saude</a>
   
      
                 
            
     
        </div>
      </li>
        
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        CadastrodeCorridas.php          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="frmCadastra.php">Cadastro de Pacientes Internados em Leitos de Uti Confirmados/Suspeitos/Descartados</a>
           
            
           <a class="dropdown-item" href="listarPacientesUti.php">Listar  Pacientes Internados em Leitos de Uti Confirmados/Suspeitos/Descartados</a>    
            
            
            
           
            
     <a class="dropdown-item" href="confirmadosLuti.php">Listar  Pacientes Internados em Leitos de Uti Confirmados</a>    
            
         
     <a class="dropdown-item" href="descartadosLuti.php">Listar  Pacientes Internados em Leitos de Uti Descartados</a>      
            
      <a class="dropdown-item" href="suspeitosLuti.php">Listar  Pacientes Internados em Leitos de Uti Suspeitos</a>        
            
      <a class="dropdown-item" href="grafico.php">Grafico</a>             
     
         
            
             <a class="dropdown-item" href="importLeitosUti.php">importar Pacientes Internados em Leitos de Uti Confirmados/Suspeitos/Descartados</a>
            
          
               
          <a class="dropdown-item" href="exportaCovidConfirmados.php">Exporta Pacientes Internados em Leitos de Uti Confirmados</a>
            
           <a class="dropdown-item" href="exportaCovidSuspeitos.php">Exporta Pacientes Internados em Leitos de Uti Suspeitos</a>  
            
           <a class="dropdown-item" href="exportaCovidDescartados.php">Exporta Pacientes Internados em Leitos de Uti Descartados</a>  
            
          <a class="dropdown-item" href="exportaCovidConfirmadosSuspeitosDescartados.php">Exporta Pacientes Internados em Leitos de Uti Confirmados/Suspeitos/Descartados</a>      
            
            
        
                     
             
            
            
            
          <a class="dropdown-item" href="https://drive.google.com/file/d/1VhBvhY0mAap-tUwoPf_9OwD9S71zlkkg/view?usp=sharing">Video como importar os Pacientes Internados em Leitos de Uti Confirmados/Suspeitos</a>      
            
        </div>
      </li>                         
        
           
        
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Alta Uti Leitos clinicos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="frmCadastraAltaUti.php">Cadastro Alta Uti Leitos Clinicos </a>


             <a class="dropdown-item" href="listarAltasLeitosclinicos.php">Listar  Alta Uti Leitos Clinicos </a>
           
              <a class="dropdown-item" href="importAltaLeitosClinicos.php">importar Alta em Leitos de Clinicos</a>    
              
            
             <a class="dropdown-item" href="graficoAltaLeitoClinico.php">Grafico</a> 
            
            
            
            <a class="dropdown-item" href="https://drive.google.com/file/d/11LofhOtr8exJV6AjN8YeJw_cZAftmNqd/view?usp=sharing">Video mostrando como Construir gráfico Alta em Leitos de Clinicos</a> 
            
            
            
            
            <a class="dropdown-item" href="https://drive.google.com/file/d/1LtY7Sx7fZoRRBHKeYcZttdT55AxIh1aQ/view?usp=sharing">Video mostrando como importar Alta em Leitos de Clinicos</a>    
            
            
     
        </div>
      </li>
        
        
        
        
        
        
        
        
        
           
        
        
        
        
        
          
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
      