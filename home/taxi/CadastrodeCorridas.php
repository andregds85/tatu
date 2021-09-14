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
            
            $sql = "INSERT INTO corridas (destino, pagamento, valor, usuario,data,dia,mes,ano)
                VALUES ('$arr[0]', '$arr[1]', '$arr[2]','$consulta','$today','$dia','$mes','$ano')";
        
            if ($con->query($sql) === TRUE) {
             

              ?>

              <script> alert("Destino Adicionada com Sucesso"); 
              </script>


              <?php

            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }
    
?>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "Você Selecionou: " +x;
  document.querySelector('input[name="array[0][pagamento]"]').value = x;
}
</script>



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





<script>

function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}

</script>






<!DOCTYPE html>
<html>
<head>
  <title>Destino das Corridas</title>
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
      <h1 class="display-4 text-center">Destino das Corridas<br>Cadastre todas as corridas do dia</h1><hr>
      <form action="" method="post">

        <div id="main">
          <div class="card mb-3">
            <div class="card-body text-right">
            </div>
          </div>
          <div class="card mb-3 clone">
            <div class="card-body">
              <div class="form-group form-check text-right">
                <button type="button" class="remove btn btn-danger d-none">Remover</button>
              </div>
              <div class="form-group">
                <label for="name">Destino:</label>
                <input type="text" class="form-control" name="array[0][destino]">
              </div>
              <div class="form-group">

                <label for="pagamento">Forma de Pagamento:</label><br>


<select id="mySelect" onchange="myFunction()">
<option value=""></option>
  <option value="dinheiro">Dinheiro</option>
  <option value="cartao">Cartão</option>
</select>

<p>Selecione a Forma de Pagamento</p>

<p id="demo"></p>
<input id="demo" type="text" class="form-control" name="array[0][pagamento]" value="">

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

