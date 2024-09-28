<?php
$link = mysqli_connect("127.0.0.1","root","1");
if (!$link){
	die('Error' . mysqli_error());
}
echo "zaebis!";
mysqli_close($link);
?>
