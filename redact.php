<!DOCTYPE html>
<html>
<head>
	<title>Редактирование</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
		$query = mysqli_query($con, "SELECT * FROM kick WHERE id = " .$_GET['red']. "");
		for($i=0;$i<$query->num_rows;$i++){
			$stroka = $query->fetch_assoc();
		}
	 ?>

		 		


	<div class="col-7 mx-auto text-center pt-3">
		<form action="update.php" method="GET">
			<input type="" name="title" class="form-control col-7 mx-auto" placeholder="Название" value="<?php echo $stroka["title"] ?>">
			<input name="descrip" class="form-control col-7 mx-auto mt-3" placeholder="Описание"  value="<?php echo $stroka["descrip"] ?>"></input>
			<input type="" name="goal" class="form-control col-7 mx-auto mt-3" placeholder="Необходимая сумма(только цифры)"  value="<?php echo $stroka["goal"] ?>">
			<input type="" name="img" class="form-control col-7 mx-auto mt-3" placeholder="Обложка(адрес картинки)"  value="<?php echo $stroka["img"] ?>">
			<input type="" name="place" class="form-control col-7 mx-auto mt-3" placeholder="Город"  value="<?php echo $stroka["place"] ?>">
			<input type="" name="user" class="form-control col-7 mx-auto mt-3" placeholder="User"  value="<?php echo $stroka["user"] ?>">
			<input type="" class="d-none" name="red" value="<?php echo $stroka["id"] ?>">
			<button class="btn btn-primary col-7 mt-3 mx-auto">Сохранить изменения</button>

		</form>
	</div>
</body>
</html>
