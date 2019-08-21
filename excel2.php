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

$sql = "SELECT * FROM visy1_3 where id ='8'";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM Question where groupq ='visy1_3'";
$result2 = $conn->query($sql2);


$num2=1;
$lp2=2;

$data = $result->fetch_all(MYSQLI_ASSOC); //faster 
$data2 = $result2->fetch_all(MYSQLI_ASSOC); //faster 

//print_r($users[1]);
foreach($data as $u1) {
    foreach($data2 as $u) {
        $asa=(string)$u["STANDARD_A"];
        $asb=(string)$u["STANDARD_A"];
        $sheet->setCellValue('A'.$lp2, $num2);
        $sheet->setCellValue('B'.$lp2, $u['Question']);
        $sheet->setCellValue('C'.$lp2, $u['Method']);
        $sheet->setCellValue('D'.$lp2, $asa);
        $sheet->setCellValue('E'.$lp2, $asb);

        
            $str='as'.$num2;
            $myArray = explode(',', $u1[$str]);
            $a=(string)$myArray[0];
            $b=(string)$myArray[1];
            $sheet->setCellValue('F'.$lp2, $a);
            $sheet->setCellValue('G'.$lp2, $b);

            $num2++;
            $lp2++;
        }

       
        $sheet->setCellValue('G'.$lp2, $u1['Inspector']);

}

$sheet->setCellValue('E'.$lp2, "Inspector");



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