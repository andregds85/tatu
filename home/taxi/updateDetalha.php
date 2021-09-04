<?php 
include("session.php");
include("topo.php");
include("../conecta.php");


 $status=$_POST["status"];
 $obs=$_POST["obs"];
 $cod=$_POST["cod"];


    
$comando = ("update ocupainternadouti set obs = '$obs', 
                                
status = '$status'   where id='$cod'");

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








