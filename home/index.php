<?php include("nav.php"); ?>


<!-- PRIMEIRO MODULO -->


<div class="card">
  <div class="card-header">
    Módulo 
  </div>
  <div class="card-body">
    <h5 class="card-title">Login - Autenticação </h5>
    <p class="card-text">Módulo de Login Para acessar o sistema basta se autenticar aqui</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExemploModalCentralizado">
 Clique aqui para Entrar
</button>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Login - Autenticação </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          
        
    <form class="form-inline my-2 my-lg-0"  method="post" action="taxi/valida_usuario.php">
    
     
              
         <div class="form-group">	  
 <input id="inputEmail" class="form-control" name="email"  placeholder="Digite seu E-mail" type="email" 	      data-error="Por favor, informe um e-mail correto." required>	  
        <div class="help-block with-errors"></div></div>    
              
              
         <div class="form-group">	   
<input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Digite sua Senha..."  	      data-minlength="6" required>	 
    <span class="help-block">  </span>  </div>     
              
      
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logar</button>
         
    </form>
      </div>
    </div>
  </div>
</div>
  </div>
</div>      




<!-- Modal 1  -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Login - Autenticação </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          
        
  <form class="form-inline my-2 my-lg-0"  method="post" action="home/valida_usuario.php">
    
     
              
         <div class="form-group">	  
 <input id="inputEmail" class="form-control" name="email"  placeholder="Digite seu E-mail" type="email" 	      data-error="Por favor, informe um e-mail correto." required>	  
        <div class="help-block with-errors"></div></div>    
              
              
              
         <div class="form-group">	   
<input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Digite sua Senha..."  	      data-minlength="6" required>	 
    <span class="help-block">  </span>  </div>     
              
               
            
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logar</button>
         
    </form>
      </div>
    </div>
  </div>
</div>
  </div>
</div>      



<img src="logo/1.jpg" class="rounded float-left" alt="..." width="100%" height="100%">

<?php include("footer.php"); ?>