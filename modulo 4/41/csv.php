<?php
require_once 'CSVParser.php';

$csv = new CSVParser('clientes.csv', ';');

try{
    
    $csv-> parse();
    echo '<pre>';

    while ($row = $csv->fetch()){
        //var_dump($row);
        print $row['Cliente'] . '-'.
              $row['Cidade'] . '<br>';
    }
}
catch (Exception $e){
    print $e->getMessage();
}