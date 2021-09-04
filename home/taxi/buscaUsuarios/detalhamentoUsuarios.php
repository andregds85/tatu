<?php 

$comando20 = "SELECT * FROM usuarios";
$res = mysqli_query($con, $comando20);


        echo  "<div class='container-fluid'>";   
          while ($linha = mysqli_fetch_array($res))
                  
                      
               {
                 $id = $linha["id"];
                 $nome=$linha["nome"];
                 $sobrenome=$linha["sobrenome"];
                 $usuario=$linha["usuario"];
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
    
    echo "</h5>";
   
  
                  
                  
    echo "<div class='card-body'>";
   
                  
    echo "<a href='ExcluiUsCovid.php?us_id=$id' class='btn btn-primary'>Apagar</a>";
    echo "</div>";              
    echo "</div>";              
   
                  
                  
                  
    echo "<div class='card-footer text-muted'>";
    echo  "</div>";
    echo "</div>";
                  
                  
                
            
       }
echo "</div>;"

?>
         