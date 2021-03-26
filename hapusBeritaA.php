<?php
include('config.php');
$ni	= $_GET['ni'];
$sql 	= 'DELETE from `berita` where b_id="'.$ni.'"';
$query	= mysqli_query($con, $sql);
header('location: page-admin.php?page=berita');
?>