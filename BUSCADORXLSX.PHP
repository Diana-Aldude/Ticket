<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" target="_blank" method="post">
<label for="">ruc:</label>
<input id="" name="ruc" type="text" value=""/>

<input type="submit" value="Submit"/></form>



<?php
require 'vendor/autoload.php'; // incluir la librería

use PhpOffice\PhpSpreadsheet\IOFactory;



if(isset($_POST['ruc'])){
$ruc=$_POST['ruc'];


// Cargar el archivo de Excel
$spreadsheet = IOFactory::load('estandar.xlsx');

// Obtener la hoja de trabajo
$worksheet = $spreadsheet->getActiveSheet();

// Buscar el valor "buscarValor" en la columna "A"
$buscarValor = $ruc;
$filaEncontrada = null;
$ultimaFila = $worksheet->getHighestRow();
for ($fila = 1; $fila <= $ultimaFila; $fila++) {
    $celda = $worksheet->getCell('A' . $fila);
    $valorCelda = $celda->getValue();
    if ($valorCelda == $buscarValor) {
        $filaEncontrada = $fila;
        break;
    }
}

// Si se encuentra la fila, obtener el valor de la celda en la columna "B" en esa fila
if ($filaEncontrada != null) {
    $celdaH = $worksheet->getCell('H' . $filaEncontrada);
    $emailcae = $celdaH->getValue();
    echo "Valor encontrado en la fila " . $filaEncontrada . " en la columna H: " . $emailcae;
} else {
    echo "Valor no encontrado en la columna A";
}

}

?>

</body>
</html>