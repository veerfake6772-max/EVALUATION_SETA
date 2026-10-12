
<?php
include 'db.php';
header('content-type:photo/csv');
header('content-disposition:attachment;filename=blog.csv');
$output=fopen("php://output",'w');
fputcsv($output,array("id","user_id","photo_title","photographer_name","category","description","image","created_at"));
$result = $conn -> query("select * from photographs");
while($row = $result -> fetch_assoc()) {
    fputcsv($output,$row);
}

?>
