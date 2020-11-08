<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="log.png">
	<style type="text/css">

	</style>
</head>
<body>
	<div class="col-6 mx-auto mt-2">
		<div class="d-flex col-12">
			<div class="col-2 back">
				<img src="5.png" class="w-50">
			</div>
			<h2 class="text-center col-8">Новая публикация</h2>
		</div>
		

		<form action="add.php" method="GET">
			<div class="d-flex">
				<div class="col-2 mt-5">
					<img src="corpse.jpg" class="w-100 rounded-circle">
				</div>
				<div class="col-9 mt-5">
					<div class="form-group">
					   <input type="" class="form-control" name="user" placeholder="Введите ваш nickname">
					</div>
					<div class="form-group">
					   <input type="" class="form-control" name="img" placeholder="Выберите файл">
					</div>
					<div class="form-group">
					   <input type="" class="form-control" name="text" placeholder="Введите подпись">
					</div>
					<button class="btn">Добавить</button>
				</div>
			</div>
			
		</form>
	</div>
	
	<script type="text/javascript">
		let back = document.querySelector('.back')
		back.onclick = function(){
			document.location.href = "index.php";
		}
	</script>
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>