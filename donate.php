<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
	$query = mysqli_query($con, "SELECT * FROM kick WHERE id = " .$_GET['id']. "");
	$query = mysqli_query($con, "UPDATE kick SET donated = donated + 10 WHERE id = " .$_GET['id']. " ");
	header("Location: index.php");
?>	
