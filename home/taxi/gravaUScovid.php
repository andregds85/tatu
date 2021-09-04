<?php  include ("session.php"); 

 $nome=$_POST["nome"];
 $sobrenome=$_POST["sobrenome"];
 $usuario=$_POST["usuario"];
 $senha=$_POST["Senha"];
 $repetirSenha=$_POST["repetirSenha"];
 $gravaSenha=md5($senha);   
      
    
include("../conecta.php");   

 
// executa a consulta
$sql = "SELECT * FROM usuarios";
$res = mysqli_query($con, $sql);
 
// conta o número de registros
$total = mysqli_num_rows($res);
 
 "Total de Resultados: " . $total . "<br>";
 

     
     $compara=$usuario;
 
      
      while ($linha = mysqli_fetch_array($res))
{
    $usuario1= $linha['usuario']; 
 
          if($compara==$usuario1){ 

              
               include("topo.php");
              
            echo "<div class='alert alert-primary' role='alert'>
Cadastro Negado - Seu E-Mail ja consta no Sistema.
</div>";
              
              
               echo "<br>";
             echo "<div class='alert alert-primary' role='alert'>
             <a href='frmCadastra.php'>Voltar</a>
             </div>";
            
              include("rodapeLimpo.php");
              exit;
            
          }
          
      }
      
                
          if ($senha == $repetirSenha)
          {
              
              echo "";
          }else{
              include("topo.php");
              
            echo "<div class='alert alert-primary' role='alert'>
        Senhas Diferentes
                  </div>";
            
              
             
              echo "<br>";
           echo "<a href='frmCadastra.php'>Voltar</a>";
              include("rodapeLimpo.php");
              exit;
          }
          
$dados=("insert into usuarios(nome, sobrenome,usuario, senha) values ('$nome','$sobrenome','$usuario','$gravaSenha')");

// executa a consulta
$resDados = mysqli_query($con, $dados);
 
    if($resDados){
        
       include("topo.php");
              
            echo "<div class='alert alert-primary' role='alert'>
        Cadastro Efetuado com sucesso
                  </div>";
              
  
              include("rodapeLimpo.php");
              exit;
        
            
        
    }else{
        echo "erro no cadastro";
    }


 
 
 
          

    ?>  
      

            

