<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
		$query = mysqli_query($con, "UPDATE kick SET title = '{$_GET["title"]}', descrip = '{$_GET["descrip"]}', goal = '{$_GET["goal"]}', img = '{$_GET["img"]}', place = '{$_GET["place"]}', user = '{$_GET["user"]}' WHERE id = " .$_GET['red']. " ");
		header("Location: lk.php")
?>