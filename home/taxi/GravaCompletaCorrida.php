<?php

include("topoLimpo.php"); 
include ("session.php");

$consulta=$_SESSION['usr'];    
$today = date("d/m/20y");
$dia=date('d');
$mes=date('m');
$anoReduzido=date('y'); 
$ano='20'.$anoReduzido;


$nome=$_POST['nome'];
$horaInicial=$_POST['horaInicio'];
$horaFinal=$_POST['horaFinal'];
$codPlaca=$_POST['codPlaca'];
$kInicial=$_POST['kInicial'];
$kfinal=$_POST['kfinal'];
$gnv=$_POST['gnv'];
$gasolina=$_POST['gasolina'];
$lavacao=$_POST['lavacao'];
$outros=$_POST['outros'];
$vale=$_POST['vale'];
$comissao=$_POST['comissao'];




include("../conecta.php");   
      
        $dados = "INSERT INTO completa (dataAtual, dia, mes, ano, nome, horaInicial, horaFinal, codPlaca,kInicial,kfinal,gnv,gasolina,lavacao,outros,vale,comissao)
            VALUES ('$today','$dia','$mes','$ano','$nome','$horaInicial','$horaFinal','$codPlaca','$kInicial','$kfinal','$gnv','$gasolina','$lavacao','$outros','$vale','$comissao')";
    
            $resDados=mysqli_query($con, $dados);
                if($resDados){   ?>

<div class="alert alert-dark" role="alert">
  Cadastro efetuado com Sucesso.
</div>

<?php

        }

?>