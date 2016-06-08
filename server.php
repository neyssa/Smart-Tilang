<?php
	$var = $_GET['temperature'];

	$fileContent = "Temperature : " . $var;

	$fileStatus = file_put_contents('myFile.txt',$fileContent,FILE_APPEND);
	if($fileStatus != false) {
		echo "Sucess";
	} else {
		echo "Fail";
	}
?>
