<?php
include('config.php');
$ni	= $_GET['ni'];
$sql 	= 'DELETE from `user` where nim="'.$ni.'"';
$query	= mysqli_query($con, $sql);
header('location: page-admin.php?page=data-user');
?>