<?php
$filteredData=substr($_POST['image_code'], strpos($_POST['image_code'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
//file_put_contents('img.png', $unencodedData);
$file_path="screenshot/";

$filename = date("YmdHis").".png";

array_map('unlink', glob($file_path."/*.png"));
file_put_contents($file_path."/".$filename, $unencodedData);
echo "downloadimage.php?file=".$filename;
?>