<?php include ("session.php"); ?>

<head>  
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .form-group{
                padding: 10px;
            }
        </style>
    </head>
<?php include("topo.php"); ?>

<form method="post" action="recebe.php">
            <div id="formulario">



                 
      <div class="alert alert-light" role="alert">
 Adicione todas as suas corridas / para acionar mais corridas basta clicar no botão Adicionar corridas
</div>
<div class="alert alert-light" role="alert">
Se tiver 6 corridas aperte 6 vezes o botão Adicionar corridas</div>

                <div class="form-group">
                    <button type="button" id="add-campo"> Adicionar Corrida </button>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar">
            </div>
        </form>

        <script>
            var cont = 1;
            //https://api.jquery.com/click/
            $('#add-campo').click(function () {
                cont++;
                //https://api.jquery.com/append/
                $('#formulario').append('<div class="form-group " id="campo' + cont + '"><label>Destino: </label><input type="text" name="destino[]" placeholder="Especifique o Destino"> <button type="button" id="' + cont + '" class="btn-apagar"> Remover Corrida</button></div>');
                $('#formulario').append('<div class="form-group " id="campo' + cont + '"><label>Pagamento: </label><input type="text" name="pagamento[]" placeholder="Forma de Pagamento"> <button type="button" id="' + cont + '"');
                $('#formulario').append('<div class="form-group" id="campo' + cont + '"><label>Valor: </label><input type="text" name="valor[]" placeholder="Valor"> <button type="button" id="' + cont + '"');


            });

            $('form').on('click', '.btn-apagar', function () {
                var button_id = $(this).attr("id");
                $('#campo' + button_id + '').remove();
                $('#campo' + button_id + '').remove();
                $('#campo' + button_id + '').remove();

            });
        </script>
      

     






  
      

      
       <?php include("rodapeLimpo.php"); ?>
      

  </body>
</html>