<?php 


$comando = "SELECT * FROM hospitalar_usuarios";
$res = mysqli_query($con, $comando);

          echo  "<div class='container-fluid'>";   
              while ($linha = mysqli_fetch_array($res))
               {
                 $id = $linha["id"];
                 $nome=$linha["nome"];
                 $sobrenome=$linha["sobrenome"];
                 $usuario=$linha["email"];
                 $senha=$linha["senha"];
               
                          
  
               
               echo "<div class='card text-center'>";
               echo "<div class='card-header'>";
               echo "Nome : ";
               echo  $nome;
               echo "  ";
               echo $sobrenome;
               echo"</div>";  
                  
               
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>Usuário: $usuario</h5>";
   
  
                  
                  
    echo "<div class='card-body'>";
   
                  
    echo "<a href='ExcluiUsHosp.php?us_id=$id' class='btn btn-primary'>Apagar</a>";
    echo "</div>";              
    echo "</div>";              
   
                  
 
              
    echo "<div class='card-footer text-muted'>";
    echo  "</div>";
    echo "</div>";
                  
    
            
       }
echo "</div>;"

?>
         