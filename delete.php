<?php  
	$connect = mysqli_connect("127.0.0.1","root","","kickstarter"); 
	$text_zaprosa = "DELETE FROM kick WHERE id = " .$_GET['idd']. "  ";
	$zapros = mysqli_query($connect,$text_zaprosa);
	header("Location: lk.php");
?>