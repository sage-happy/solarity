<?php 
include('../php/connection.php');

$query = "SELECT * FROM public.performance";
$result = pg_query($conn, $query);
if(!$result){
    echo "Failed to fetch data.br>";
}

$filename ="C:/Users/Happy/Downloads/Solar_performance.xml";
$file = fopen($filename, 'w');

if (!$file){
    echo "Failure to open file.<br>";
}

$columnCount = pg_num_fields($result);
$columnHeaders = array();

for($i=0; $i<$columnCount; $i++){
    $columnHeaders[] = pg_field_name($result, $i);
}
fputcsv($file, $columnHeaders);

while($row = pg_fetch_assoc($result)){
    fputcsv($file, $row);
}
fclose($file);
pg_close($conn);
header('Location: ../landing.php#download-link');
exit();
?>