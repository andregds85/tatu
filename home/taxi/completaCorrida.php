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





<SCRIPT> 
<!--
function valida()
{
 if(document.regform.nome.value=="" || document.regform.nome.value.length < 4)
{
alert( "Preencha campo título corretamente!" );
regform.nome.focus();
return false;
}

if(document.regform.quantidade.value=="")
{
alert( "Preencha campo quantidade corretamente!" );
regform.quantidade.focus();
return false;
}



 return true;
 
    }
 
//-->
</SCRIPT>







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
            
            $sql = "INSERT INTO completa (dataAtual, dia, mes, ano, nome, horaInicial, horaFinal,codPlaca,kInicial,kfinal,gnv,gasolina,lavacao,outros,vale,comissao)
                VALUES ('$today','$dia','$mes','$ano','$arr[1]','$arr[2]','$arr[3]','$arr[4]','$arr[5]','$arr[6]','$arr[7]','$arr[8]','$arr[9]','$arr[10]','$arr[11]','$arr[12]')";
        
            if ($con->query($sql) === TRUE) {
             
              ?>

              <script> alert("Gerenciamento Diário Cadastrado com Sucesso"); 
              
             
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
    <form action="" method="post" NAME="regform" onsubmit="return valida()">>
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



  <div class="form-group">
    <label for="inputAddress">Código da Placa</label>
    <input type="text" class="form-control" id="inputAddress" name="array[0][codPlaca]" placeholder="" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Kilometro Inicial</label>
      <input type="text" class="form-control" id="inputEmail4" name="array[0][kInicial]"   placeholder="" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />
   </div>


  <div class="form-group col-md-6">
      <label for="inputPassword4">Kilometro Final</label>
      <input type="text" class="form-control" id="inputPassword4" name="array[0][kfinal]"  placeholder="" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" />    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">GNV</label>
      <input type="text" class="form-control" onkeyup="k(this);" id="inputEmail4" name="array[0][gnv]"   placeholder="" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
    </div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Gasolina</label>
      <input type="text" class="form-control"  onkeyup="k(this);" id="inputPassword4" name="array[0][gasolina]"  placeholder="" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">    </div>
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Lavação</label>
      <input type="text" class="form-control"  onkeyup="k(this);" id="inputEmail4" name="array[0][lavacao]"   placeholder="" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
    </div>


    <div class="form-group col-md-6">
      <label for="inputPassword4">Outros</label>
      <input type="text" class="form-control"  onkeyup="k(this);" id="inputPassword4" name="array[0][outros]"  placeholder="" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">    </div>
   </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Vale</label>
      <input type="text" class="form-control"  onkeyup="k(this);" name="array[0][vale]"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57">
  </div>



  <div class="form-group col-md-6">
      <label for="inputPassword4">Comissão</label>
  <select id="Dia" class="form-control" name="array[0][comissao]">
                            <option selected></option>
                            <option value="1%">1%</option>
                            <option value="2%">2%</option>
                            <option value="3%">3%</option>
                            <option value="4%">4%</option>
                            <option value="5%">5%</option>
                            <option value="6%">6%</option>
                            <option value="7%">7%</option>
                            <option value="8%">8%</option>
                            <option value="9%">9%</option>
                            <option value="10%">10%</option>
                            <option value="11%">11%</option>
                            <option value="12%">12%</option>
                            <option value="13%">13%</option>
                            <option value="14%">14%</option>
                            <option value="15%">15%</option>
                            <option value="16%">16%</option>
                            <option value="17%">17%</option>
                            <option value="18%">18%</option>
                            <option value="19%">19%</option>
                            <option value="20%">20%</option>
                            <option value="21%">21%</option>
                            <option value="22%">22%</option>
                            <option value="23%">23%</option>
                            <option value="24%">24%</option>
                            <option value="25%">25%</option>
                            <option value="26%">26%</option>
                            <option value="27%">27%</option>
                            <option value="28%">28%</option>
                            <option value="29%">29%</option>
                            <option value="30%">30%</option>
                            <option value="31%">31%</option>
                            <option value="32%">32%</option>
                            <option value="33%">33%</option>
                            <option value="34%">34%</option>
                            <option value="35%">35%</option>
                            <option value="36%">36%</option>
                            <option value="37%">37%</option>
                            <option value="38%">38%</option>
                            <option value="39%">39%</option>
                            <option value="40%">40%</option>
                            <option value="41%">41%</option>
                            <option value="42%">42%</option>
                            <option value="43%">43%</option>
                            <option value="44%">44%</option>
                            <option value="45%">45%</option>
                            <option value="46%">49%</option>
                            <option value="47%">47%</option>
                            <option value="48%">48%</option>
                            <option value="49%">49%</option>
                            <option value="50%">50%</option>
                            <option value="51%">51%</option>
                            <option value="52%">52%</option>
                            <option value="53%">53%</option>
                            <option value="54%">54%</option>
                            <option value="55%">55%</option>
                            <option value="56%">56%</option>
                            <option value="57%">57%</option>
                            <option value="58%">58%</option>
                            <option value="59%">59%</option>
                            <option value="60%">60%</option>
                            <option value="61%">61%</option>
                            <option value="62%">62%</option>
                            <option value="63%">63%</option>
                            <option value="64%">64%</option>
                            <option value="65%">65%</option>
                            <option value="66%">66%</option>
                            <option value="67%">67%</option>
                            <option value="68%">68%</option>
                            <option value="69%">69%</option>
                            <option value="70%">70%</option>
                            <option value="71%">71%</option>
                            <option value="72%">72%</option>
                            <option value="73%">73%</option>
                            <option value="74%">74%</option>
                            <option value="75%">75%</option>
                            <option value="76%">76%</option>
                            <option value="77%">77%</option>
                            <option value="78%">78%</option>
                            <option value="79%">79%</option>
                            <option value="80%">80%</option>
                            <option value="81%">81%</option>
                            <option value="82%">82%</option>
                            <option value="83%">83%</option>
                            <option value="84%">84%</option>
                            <option value="85%">85%</option>
                            <option value="86%">86%</option>
                            <option value="87%">87%</option>
                            <option value="88%">88%</option>
                            <option value="89%">89%</option>
                            <option value="90%">90%</option>
                            <option value="91%">91%</option>
                            <option value="92%">92%</option>
                            <option value="93%">93%</option>
                            <option value="94%">94%</option>
                            <option value="95%">95%</option>
                            <option value="96%">96%</option>
                            <option value="97%">97%</option>
                            <option value="98%">98%</option>
                            <option value="99%">99%</option>
                            <option value="100%">100%</option>
                        </select> 
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












    


