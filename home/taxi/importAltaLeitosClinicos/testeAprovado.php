<?php
//include("../../conecta.php");

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'cirugias';

$numSol="123154645";
$dataSol="2020-10-10"; 
$cnsP="1235464";    
$nomePac="Fulano da S";
$unitDesj="Hospital";    
$codSigTap="dasdasdas";  
$cidade="aweqweqeqe";    
$obs="asdasdasdada";    
$status="sdaasaa";
    
// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);
 
$dados=("insert into  fila(numeroSolicitacao, dataSolicitacao,cns, nomePaciente,unidadeDesejada,codSigtap,municipioSolicitante,obs,status) values ('$numSol','$dataSol','$cnsP','$nomePac','$unitDesj','$codSigTap','$cidade','$obs','$status')");

 $resDados = mysqli_query($con, $dados);

 if($resDados){
    
     echo  "Cadastro Efetuado com sucesso";
               
  }else{
        echo "erro no cadastro";
    }
?>