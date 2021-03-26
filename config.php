<?php 
$con=mysqli_connect('localhost','root','','mbd');
if (!$con) {
    echo "Error: " . mysqli_connect_error();
	exit();
}
//echo 'Connected to MySQL';
?>