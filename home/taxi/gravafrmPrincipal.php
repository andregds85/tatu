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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGi2yFNYwFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?php include ("title.php"); ?></title>
    </head>












<?php include ("session.php");

$internacao=$_POST['internacao'];
$cns=$_POST['cns'];
$nomePaciente=$_POST['nomePac'];
$idade=$_POST['idade'];
$convenio=$_POST['convenio'];
$tipoLeito=$_POST['tipoLeito'];
$vm=$_POST['vm'];
$hospitalOrigem=$_POST['hospitalOrigem'];
$CRIH=$_POST['CRIH'];
$unidadeDestino=$_POST['unidadeDestino'];
$status=$_POST['status'];

/*$datai=date('Y-m-d', strtotime($internacao));*/
$obs="Sem observação";  




include("../conecta.php");   
 
// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);

$dados=("insert into ocupainternadouti
(internacao,cns,nomePac,idade,convenio,tipoLeito,vm,hospitalOrigem,CRIH,unidadeDestino,status,obs) values('$internacao', '$cns','$nomePaciente','$idade','$convenio','$tipoLeito','$vm','$hospitalOrigem',' $CRIH ','$unidadeDestino', '$status','$obs')");  


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


