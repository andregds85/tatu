<?php 
include("session.php");
include("topo.php");
include("../conecta.php");


 $grafico=$_POST["grafico"];
 $cod=$_POST["cod"];


    
$comando = ("update altautilc set grafico = '$grafico'   where id='$cod'"); 
$resDados=mysqli_query($con, $comando);
 if($resDados){
 
              
 echo "<div class='alert alert-primary' role='alert'>
        Atualizado com sucesso
                  </div>";
             
              include("rodapeLimpo.php");
              exit;
              
    }else{
        echo "erro no cadastro";
    }
?>






















?>