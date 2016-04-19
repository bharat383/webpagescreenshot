<?php

class Screenshot 
{
	function SaveScreenshot()
	{
		$filteredData=substr($_POST['image_code'], strpos($_POST['image_code'], ",")+1);

		//Decode the string
		$unencodedData=base64_decode($filteredData);

		//Save the image
		if(!file_exists("screenshot/")) {mkdir("screenshot");}
		$file_path="screenshot/";

		$filename = date("YmdHis").".png";

		array_map('unlink', glob($file_path."/*.png"));
		file_put_contents($file_path."/".$filename, $unencodedData);
		echo "downloadimage.php?file=".$filename;		
	}

}

$Screenshot  = new Screenshot();
if(isset($_REQUEST['image_code']) && $_REQUEST['image_code']!="")
{
	$Screenshot->SaveScreenshot();
}
?>
