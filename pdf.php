<?php
include'db.php';
require "vendor/autoload.php";
$result = $conn -> query("select * from photographs");
$pdf = new TCPDF();
$pdf ->AddPage();
$pdf ->setFont('times','b','12');
$html='<table cellpadding="5" border="1">
<tr>
<td>ID</td>
<td>USER_ID</td>
<td>TITLE</td>
<td>NAME</td>
<td>CATEGORY</td>
<td>DESCRIPTION</td>
<td>IMAGE_NAME</td>
<td>CREATED_AT</td>
</tr>
';
while ($row = $result ->fetch_assoc()) {
    $html.='
    <tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['user_id'].'</td>
    <td>'.$row['photo_title'].'</td>
    <td>'.$row['photographer_name'].'</td>
    <td>'.$row['category'].'</td>
    <td>'.$row['description'].'</td>
    <td>'.$row['image'].'</td>
    <td>'.$row['created_at'].'</td>
    </tr>
    ';
}

$html.='</table>';
$pdf -> writeHTML($html,true,false,true,false,"");
$pdf->output("photo.pdf", 'D');

?>
