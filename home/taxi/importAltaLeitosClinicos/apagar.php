<?php

include("../../topo.php");


?>
<div class="container-fluid">      
  <div class="jumbotron jumbotron-fluid">
  <div class="container">
 <h1>
    <h1 class="display-4"> Apagando Dados  </h1>
     <p class="card-text"> Diretório Uploads limpo
       </p>
      <p class="card-text"> <a href="../fsv.php">Voltar</a>
       </p>
  </div>
  </div>
   </div>


<?php





function deletar($pasta){ 
  $iterator= new RecursiveDirectoryIterator($pasta,FilesystemIterator::SKIP_DOTS);
  $rec_iterator = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::CHILD_FIRST);
  foreach($rec_iterator as $file){ 
    $file->isFile() ? unlink($file->getPathname()) : rmdir($file->getPathname()); 
  } 
  rmdir($pasta); 
}
// EXEMPLO DE UTILIZACAO
deletar('uploads');


include("../rodapeLimpo.php");

?>