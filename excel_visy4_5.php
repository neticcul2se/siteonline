<?php
require_once 'condb.php';
require_once 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
$spreadsheet = new Spreadsheet();

$dates  = mysqli_real_escape_string($conn, $_REQUEST['datepicker1']);
$md  = mysqli_real_escape_string($conn, $_REQUEST['md']);

// 
$i=1;
if($md=='date'){
    $i=1;


}elseif($md=='month'){
    $select_month  = mysqli_real_escape_string($conn, $_REQUEST['select_month']);
         if($select_month=='01' ||$select_month=='03' ||$select_month=='05' ||$select_month=='07' ||$select_month=='08' ||$select_month=='10' ||$select_month=='12' )
         {
            $i=31;
         }elseif($select_month=='04' || $select_month=='06' || $select_month=='09' || $select_month=='11'){
            $i=30;
         }elseif($select_month=='02'){
            $i=29;
         }
        
}


for($l=1;$l<=$i;$l++){
  

$spreadsheet->createSheet();
$sheet = $spreadsheet->getActiveSheet($l);
$spreadsheet->setActiveSheetIndex($l);

$sheet->setCellValue('A1', '');
$sheet->setCellValue('B1', 'Inspection Item');
$sheet->setCellValue('C1', 'Tool / Method');
$sheet->setCellValue('D1', 'STANDARD');
$sheet->setCellValue('E1', 'STANDARD');
$sheet->setCellValue('F1', 'A');
$sheet->setCellValue('G1', 'B');

    if($md=='date'){

    $sql = "SELECT * FROM visy4_5 where addtime	 ='$dates'";
    $result = $conn->query($sql);


    }elseif($md=='month'){
        $dates  = mysqli_real_escape_string($conn, $_REQUEST['select_month']);
        $y=date("Y");
        if($l<10){
        $strdate='0'.$l.'/'.$dates.'/'.$y;
        }else{
            $strdate=$l.'/'.$dates.'/'.$y;

        }

        $sql = "SELECT * FROM visy4_5 where addtime like '$strdate'";
        $result = $conn->query($sql);
    }
    $data = $result->fetch_all(MYSQLI_ASSOC); //faster
//  echo $sql;
$sql2 = "SELECT * FROM Question where groupq ='visy4_5'";
$result2 = $conn->query($sql2);


$num2=1;
$lp2=2;

$data2 = $result2->fetch_all(MYSQLI_ASSOC); //faster 


// print_r($data[3]);

foreach($data2 as $u) {
    $asa=(string)$u["STANDARD_A"];
    $asb=(string)$u["STANDARD_B"];
    $sheet->setCellValue('A'.$lp2, $num2);
    $sheet->setCellValue('B'.$lp2, $u['Question']);
    $sheet->setCellValue('C'.$lp2, $u['Method']);
    $sheet->setCellValue('D'.$lp2, $asa);
    $sheet->setCellValue('E'.$lp2, $asb);

    foreach($data as $u1) {

        $str='as'.$num2;
        $myArray = explode(',', $u1[$str]);
        $a=(string)$myArray[0];
        $b=(string)$myArray[1];
        $sheet->setCellValue('F'.$lp2, $a);
        $sheet->setCellValue('G'.$lp2, $b);

       

        }
            $num2++;
            $lp2++;
       
    }
    $sheet->setCellValue('G'.$lp2, $u1['Inspector']);




$sheet->setCellValue('E'.$lp2, "Inspector");



//   while($row2 = $result2->fetch_assoc()) {
//     $sheet->setCellValue('A'.$lp, $num.'.'.$row2['Question']);
//     $sheet->setCellValue('B'.$lp, $row2['Method']); 
//     $sheet->setCellValue('C'.$lp, $row2['STANDARD_A']);



//     $num++;
//     $lp++;
//   }

$spreadsheet->getSheet(0);
$y=date("Y");
if($md=='date'){
$newDate = str_replace('/', '-', $dates );
$a=(string)($newDate);

}else{
$a=(string)($l.'-'.$select_month.'-'.$y);
}
$sheet->setTitle($a);
}
$spreadsheet->setActiveSheetIndex(0);

$writer = new Xlsx($spreadsheet);
if($md=='date'){
    $newDate = str_replace('/', '-', $dates );
$filename = 'visy4_5_'.$newDate;
}else{
    $filename = 'visy4_5_month_'.$select_month;


}


header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
header('Cache-Control: max-age=0');
$writer->save('php://output');

?>