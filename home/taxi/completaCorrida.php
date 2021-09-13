<?php

include("topoLimpo.php"); 
include ("session.php");

$consulta=$_SESSION['usr'];    
$today = date("d/m/20y");
$dia=date('d');
$mes=date('m');
$anoReduzido=date('y'); 
$ano='20'.$anoReduzido;
?>
<head>  
</head>




<?php
    
    include("../conecta.php"); 

    if(isset($_POST['btnSubmit'])){
        $items = $_POST['array'];
        
        foreach ($items as $item){
            
            $arr = array();
            foreach ($item as $user){
                array_push($arr,$user);
            }
            
            $sql = "INSERT INTO completa (dataAtual, dia, mes, ano, nome, horaInicial, horaFinal)
                VALUES ('$today','$dia','$mes','$ano','$arr[1]','$arr[2]','$arr[3]' )";
        
            if ($con->query($sql) === TRUE) {
             

              ?>

              <script> alert("Gerenciamento Diário Adicionada com Sucesso"); 
              
             

               </script>


              <?php

            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }
    
?>















 <div class="alert alert-dark" role="alert">
  completando os para o seu genrenciamento diário
</div>



    <div class="container">
    <form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Data Atual</label>
      <input type="text" class="form-control" id="inputEmail4" name="array[0][dataAtual]" value="<?php echo $today; ?>" placeholder="<?php echo $today; ?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Dia</label>
      <input type="text" class="form-control" id="inputPassword4" name="dia" value="<?php echo $dia; ?>" placeholder="<?php echo $dia; ?>" readonly>
    </div>
  </div>



  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mês</label>
      <input type="text" class="form-control" id="inputEmail4" name="mes" value="<?php echo $mes; ?>" placeholder="<?php echo $mes; ?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ano</label>
      <input type="text" class="form-control" id="inputPassword4" name="ano" value="<?php echo $ano; ?>" placeholder="<?php echo $ano; ?>" readonly>    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mês</label>
      <input type="text" class="form-control" id="inputEmail4" name="mes" value="<?php echo $mes; ?>" placeholder="<?php echo $mes; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Ano</label>
      <input type="text" class="form-control" id="inputPassword4" name="ano" value="<?php echo $ano; ?>" placeholder="<?php echo $ano; ?>">    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Seu Nome</label>
    <input type="text" class="form-control" id="inputAddress" name="array[0][nome]" placeholder="Seu Nome" >
  </div>




  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Hora Inicial</label>
      <input type="time" class="form-control" id="inputEmail4" name="array[0][horaInicio]"  value="<?php echo $mes; ?>" placeholder="<?php echo $mes; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Hora Final</label>
      <input type="time" class="form-control" id="inputPassword4" name="array[0][horaFinal]" value="<?php echo $ano; ?>" placeholder="<?php echo $ano; ?>">    </div>
  </div>



  <?php 

/* 



<!--
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0 readonly>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Endereço 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>
  </div>
  <div class="form-group">
  -->

*/
?>

  </div>
  <button type="submit" name="btnSubmit" class="btn btn-primary">Cadastrar</button>
</form>

</div>












    


