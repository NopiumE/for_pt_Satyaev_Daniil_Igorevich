<?php
$link = mysqli_connect("10.10.0.2","root","1");
if (!$link){
	die('Error' . mysqli_error());
}
echo "zaebis!";
mysqli_close($link);
?>
