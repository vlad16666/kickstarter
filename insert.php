<?php 
	$connect = mysqli_connect("127.0.0.1","root","","kickstarter"); 
	$zapros_vstavit = "INSERT INTO kick (title,descrip,goal,img,user,place) VALUES(' " . $_GET["title"] . "', '" . $_GET["descrip"] . "', '" . $_GET["goal"] . "', '" . $_GET["img"] . "', '" . $_GET["user"] . "', '" . $_GET["place"] . "')";
	$zapros_new = mysqli_query($connect,$zapros_vstavit);
	header("Location: lk.php")
?>