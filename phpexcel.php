<?php
require_once 'PHPExcel/Classes/PHPExcel.php';
// incluir la librería PHPExcel

// definir el nombre del archivo de Excel y la hoja donde se buscarán los datos
$archivo_excel = 'estandar.xlsx';
$hoja_excel = 'BD';

// definir el parámetro de búsqueda
$parametro = 'valor_busqueda';

// crear un objeto PHPExcel para leer el archivo de Excel
$objPHPExcel = PHPExcel_IOFactory::load($archivo_excel);

// seleccionar la hoja de Excel donde se buscarán los datos
$objPHPExcel->setActiveSheetIndexByName($hoja_excel);
$hoja = $objPHPExcel->getActiveSheet();

// definir las columnas donde se buscará el parámetro
$columna_parametro = 'A';

// definir las columnas donde se encontrarán los datos buscados
$columna_dato1 = 'C';
$columna_dato2 = 'H';

// buscar los datos que coincidan con el parámetro
$fila = 1;
$datos_encontrados = array();
while ($hoja->getCell($columna_parametro . $fila)->getValue() != '') {
    if ($hoja->getCell($columna_parametro . $fila)->getValue() == $parametro) {
        $dato1 = $hoja->getCell($columna_dato1 . $fila)->getValue();
        $dato2 = $hoja->getCell($columna_dato2 . $fila)->getValue();
        $datos_encontrados[] = array('dato1' => $dato1, 'dato2' => $dato2);
    }
    $fila++;
}

// mostrar los datos encontrados en una tabla HTML
echo '<table>';
echo '<tr><th>Dato 1</th><th>Dato 2</th></tr>';
foreach ($datos_encontrados as $dato) {
    echo '<tr><td>' . $dato['dato1'] . '</td><td>' . $dato['dato2'] . '</td></tr>';
}
echo '</table>';
?>