<?php
require_once 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();

// 

for($i=1;$i<=3;$i++){
$spreadsheet->createSheet();
$sheet = $spreadsheet->getActiveSheet($i);
$spreadsheet->setActiveSheetIndex($i);
$sheet->setCellValue('A1', 'Inspection Item');
$sheet->setCellValue('B1', 'Tool / Method');
$sheet->setCellValue('C1', 'STANDARD');
$sheet->setCellValue('D1', 'STANDARD');
$sheet->setCellValue('E1', '');
$sheet->setCellValue('F1', 'A');
$sheet->setCellValue('G1', 'B');

$spreadsheet->getSheet(0);
$a=(string)($i);
$sheet->setTitle($a);
}
$spreadsheet->setActiveSheetIndex(0);

$writer = new Xlsx($spreadsheet);

$filename = 'hello world';


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
header('Cache-Control: max-age=0');
$writer->save('php://output');