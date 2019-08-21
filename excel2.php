<?php
require_once 'condb.php';
require_once 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();

// 

for($i=1;$i<=3;$i++){
$spreadsheet->createSheet();
$sheet = $spreadsheet->getActiveSheet($i);
$spreadsheet->setActiveSheetIndex($i);

$sheet->setCellValue('A1', '');

$sheet->setCellValue('B1', 'Inspection Item');
$sheet->setCellValue('C1', 'Tool / Method');
$sheet->setCellValue('D1', 'STANDARD');
$sheet->setCellValue('E1', 'STANDARD');
$sheet->setCellValue('F1', 'A');
$sheet->setCellValue('G1', 'B');

$sql2 = "SELECT * FROM Question where groupq ='visy4_5'";
$result2 = $conn->query($sql2);
$num=1;
$lp=2;
$users = $result2->fetch_all(MYSQLI_ASSOC); //faster 

//print_r($users[1]);
    foreach($users as $u) {
        $asa=(string)$u["STANDARD_A"];
        $asb=(string)$u["STANDARD_A"];
        $sheet->setCellValue('A'.$lp, $num);
        $sheet->setCellValue('B'.$lp, $u['Question']);
        $sheet->setCellValue('C'.$lp, $u['Method']);
        $sheet->setCellValue('D'.$lp, $asa);
        $sheet->setCellValue('E'.$lp, $asb);


        $num++;
        $lp++;
}
$sheet->setCellValue('E'.$lp, "Inspector");
//   while($row2 = $result2->fetch_assoc()) {
//     $sheet->setCellValue('A'.$lp, $num.'.'.$row2['Question']);
//     $sheet->setCellValue('B'.$lp, $row2['Method']); 
//     $sheet->setCellValue('C'.$lp, $row2['STANDARD_A']);



//     $num++;
//     $lp++;
//   }

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
?>