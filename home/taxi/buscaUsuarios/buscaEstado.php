<? 

include("../../conecta.php");
$comando = mysql_query("select * from sfweb_estado ");

?>   <div class="form-row">
    <div class="col">
        <select id="inputState" name="estado" class="form-control">
        <option selected>Estado...</option>
            
            <?

              while ($linha = mysql_fetch_array($comando))
               {
                $id = $linha["id"];
                echo "<option>".$estado=$linha['nome']."</option>";
                
   
  }

?>
        </select>    </div>  