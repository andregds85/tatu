
<?php  
include("../conecta.php");
/* https://www.codexworld.com/export-data-to-csv-file-using-php-mysql/ 
Lugar onde o código está*/

 $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

 $registros = 10000; 

 $inicio = ($registros*$pagina)-$registros; 



//get records from database
$query = $db->query("select * from ocupainternadouti where status='DESCARTADO' ORDER BY id ASC limit $inicio,$registros");

if($query->num_rows > 0){
    $delimiter = ";";
    $filename = "leitosUtiDescartado" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('id', 'internacao', 'cns', 'nomePac', 'idade', 'convenio','	tipoLeito','vm','hospitalOrigem','CRIH','unidadeDestino','status','obs');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['id'], $row['internacao'], $row['cns'], $row['nomePac'],$row['idade'],$row['convenio'],$row['tipoLeito'],$row['vm'],$row['hospitalOrigem'],$row['CRIH'],$row['unidadeDestino'],$row['status'],$row['obs']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>