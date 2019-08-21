<?php
require_once('condb.php');
$sql = "SELECT * FROM mt_ch ";
$result = $conn->query($sql);
// while($row2 = $result->fetch_assoc()) {

//     echo($row2['as1'] );
// }
$output="";

$output.='<table>
<tr>
<th>Inspection Item</th>
<th>Tool / Method</th>
<th>STANDARD</th>
<th>STANDARD</th>
<th>A</th>
<th>B</th>

</tr>';



// while($row2 = $result->fetch_assoc()) {
//     $output.="<tr>";
//         $output .="<td>". $row2['id'] ."</td>";

//         $output.="<tr> ";
// }


$sql2 = "SELECT * FROM Question where groupq='visy1_3'";
$result2 = $conn->query($sql2);
$num=1;
  while($row2 = $result2->fetch_assoc()) {







$output.='<tr>
             <td>'. $num.".".$row2['Question'].'</td>
             <td >'. $row2['Method'].' </td>
             <td >'. $row2['STANDARD_A'] .'</td>
             <td >'.$row2['STANDARD_B'] .'</td>
             <td > '.
                 
                //  $myArray = explode(',', $row[$str]);
                //  $a=$myArray[0];
                //  $b=$myArray[1];

              $a .'
             </td>
             <td>'.$b.'</td>
           </tr>';

          
         $num=$num+1;
      

  }



$output.='</table>';





    header("Content-Type: application/xls"); 
    header('Content-Disposition: attachment; filename="myexcel.xls"'); //กำหนดชื่อไฟล์

echo $output;

?>