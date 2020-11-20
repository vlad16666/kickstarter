<!DOCTYPE html>
<html>
<head>
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="col-12 bg-light">
		<div class="row">
			<div class="col-2 pt-3">
				<a href="" class="text-dark ml-3">Explore</a>
				<a href="" class="text-dark ml-3">Start a project</a>
			</div>
			<div class="col-8 text-center">
				<img src="logo.png" class="w-25">
				<p>#BlackLivesMatter</p>
			</div>
			<div class="col-2 text-left pt-3">
				<a href="" > <i class="fa fa-search"></i> Search</a>
				<a href=""><img src="lk.png" class="rounded-circle" ></a>

			</div>
		</div>
	</div>
	<div class="col-7 mx-auto text-center pt-3">
		<form action="insert.php" method="GET">
			<input type="" name="title" class="form-control col-7 mx-auto" placeholder="Название">
			<textarea name="descrip" class="form-control col-7 mx-auto mt-3" placeholder="Описание"></textarea>
			<input type="" name="goal" class="form-control col-7 mx-auto mt-3" placeholder="Необходимая сумма(только цифры)">
			<input type="" name="img" class="form-control col-7 mx-auto mt-3" placeholder="Обложка(адрес картинки)">
			<input type="" name="place" class="form-control col-7 mx-auto mt-3" placeholder="Город">
			<input type="" name="user" class="form-control col-7 mx-auto mt-3" placeholder="User">
			<button class="btn btn-success col-7 mt-3 mx-auto">Добавить проект</button>
		</form>
	</div>
	<?php 
					$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
					$query = mysqli_query($con, "SELECT * FROM kick WHERE user = 'Erik' ");

	?>	
	<div class="col-12 text-center mt-4">
		<h1>My project</h1>
	</div>
	<?php 
	 			//цикл начинается
		 		for($i=0;$i<$query->num_rows;$i++){
		 			$stroka = $query->fetch_assoc();
	?>
			<div class="col-8 bg-light mx-auto mt-4">
				<div class="col-12 text-center">
					<h1><?php echo $stroka["title"]; ?></h1>
					<p><?php echo $stroka["descrip"]; ?></p>
				</div>
				<div class="row">
					<div class="col-8" style="height: 500px;background-image:url(<?php echo $stroka["img"]?>); background-size: 100%;" ></div>
					<div class="col-4 text-center">
						<div class="col-12 mt-3">
							<h1 class="text-success">Собрано</h1>
							<p class="text-success">
								<?php echo $stroka["donated"];?>
							</p>					
						</div>
						<div class="col-12 mt-3">
							<h1>Необходимая сумма</h1>
							<?php echo $stroka["goal"]; ?>
						</div>
						<form action="redact.php" method="GET">
							<input type="" class="d-none" name="red" value="<?php echo $stroka["id"] ?>">
							<a href="redact.php"><button class="btn btn-success col-8 mt-3">Редактировать</button></a>
						</form>
						<form ction="delete.php" method="GET">
							<input type="" class="d-none" name="idd" value="<?php echo $stroka["id"] ?>">
							<a href="delete.php"><button class="btn btn-danger col-8 mt-3">Удалить проект</button></a>
						</form>
						
					</div>
				</div>
			</div>
				





	<?php }; ?> 
</body>
</html>