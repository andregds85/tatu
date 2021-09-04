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


<?php include ("session.php");

$internacao=$_POST['internacao'];
$nomePaciente=$_POST['nome'];
$status=$_POST['status'];    
$dataAlta=$_POST['dataAlta'];
$obs=$_POST['obs'];
$grafico="";

/*$datai=date('Y-m-d', strtotime($internacao));*/

include("../conecta.php");   
 
$dados=("insert into altaUtiLc(internacao,nome,dataAlta,obs,status,grafico) values('$internacao','$nomePaciente', '$dataAlta','$obs','$status','$grafico')");  

// executa a consulta
$resDados=mysqli_query($con, $dados);
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


