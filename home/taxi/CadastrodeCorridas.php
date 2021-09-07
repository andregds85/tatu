<?php

include("topoLimpo.php"); 
include ("session.php");

echo $consulta=$_SESSION['usr'];    
$today = date("d/m/20y");
$dia=date('d');
$mes=date('m');
$anoReduzido=date('y'); 
$ano='20'.$anoReduzido;





?>
<head>  
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .form-group{
                padding: 10px;
            }
        </style>
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
            
            $sql = "INSERT INTO corridas (Name, pagamento, valor, usuario,data,dia,mes,ano)
                VALUES ('$arr[0]', '$arr[1]', '$arr[2]','$consulta','$today','$dia','$mes','$ano')";
        
            if ($con->query($sql) === TRUE) {
                echo "Novo Registro foi Inserido";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }
    
?>


<SCRIPT> 
function k(i) {
	var v = i.value.replace(/\D/g,'');
	v = (v/100).toFixed(2) + '';
	v = v.replace(".", ",");
	v = v.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");
	v = v.replace(/(\d)(\d{3}),/g, "$1.$2,");
	i.value = v;
}
</script>
<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4 text-center">Controle de Corridas<br>Cadastre todas as corridas do dia</h1><hr>
      <form action="" method="post">

        <div id="main">
          <div class="card mb-3">
            <div class="card-body text-right">
              <button type="button" class="btn btn-success" id="add">Adicionar Corrida</button>
            </div>
          </div>
          <div class="card mb-3 clone">
            <div class="card-body">
              <div class="form-group form-check text-right">
                <button type="button" class="remove btn btn-danger d-none">Remover</button>
              </div>
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="array[0][name]">
              </div>
              <div class="form-group">
                <label for="pagamento">Forma de Pagamento:</label>
                <input type="text" class="form-control" name="array[0][pagamento]">
              </div>
              <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" class="form-control"  onkeyup="k(this);" name="array[0][valor]" placeholder="Valor" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
              </div>
                
            </div>
          </div>
        </div>

          <button type="submit" name="btnSubmit" class="btn btn-primary">Cadastrar</button>
      </form> 
    </div> 
  </div>
  
  <!-- Custome -->
  <script src="script.js"></script>
</body>
</html>



