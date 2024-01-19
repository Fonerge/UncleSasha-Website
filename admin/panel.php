<?php
	require_once('db.php');
	session_start();
	$foods = get_all();
	$orders = get_orders();
?>
<?php if (!empty($_SESSION['auth'])): ?>
<!DOCTYPE html>
<html>
<head>
	<title>Админ панель</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="nofollow">
	<meta http-equiv="refresh" content="20">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
	<style type="text/css">
		input, textarea, select {
			width: 80%;
			padding: 5px;
		}
		.order-board {
			border: 1px solid #000;
			border-radius: 3px;
			height: 350px;
		}
		.menu-board {
			border: 1px solid #000;
			border-radius: 3px;
			height: 250px;
		}
	</style>
</head>
<?php
	if (isset($_POST['submit'])){
		$f_name = $_POST['name'];
		$f_description = $_POST['decription'];
		$f_price = $_POST['price'];
		$f_category = $_POST['category'];

		$countfiles = count($_FILES['file']['name']);
		$photo_array = array($_FILES['file']['name']);
   		for($i=0; $i<$countfiles; $i++){
     		$path = 'assets/uploads/'. time() . $_FILES['file']['name'][$i];
     		move_uploaded_file($_FILES['file']['tmp_name'][$i],'../' . $path);
  		}

  		if ($countfiles == 1){
			mysqli_query($data, "INSERT INTO `menu` (`id`, `food_name`, `food_discription`, `food_price`, `food_category`, `food_image`)
        	VALUES (NULL,'$f_name', '$f_description', '$f_price', '$f_category', '$path')") or die (mysqli_error($data));
        	header('Location: panel.php');
		}

	}

	if (isset($_GET['del_order'])) {
		$id = $_GET['del_order'];
		mysqli_query($data, "DELETE FROM `orders` WHERE `id` = $id");
		header('Location: panel.php');
	}

	if (isset($_GET['del_food'])) {
		$id = $_GET['del_food'];
		mysqli_query($data, "DELETE FROM `menu` WHERE `id` = $id");
		header('Location: panel.php');
	}
?>
<body>
	<div class="container">
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
			<form class="ml-auto" action="logout.php" method="POST">
				<button type="submit" class="btn btn-outline-primary">Выйти</button>
			</form>
		</header>
	</div>
	<main class="mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mt-4">
					<form action="" method="POST" enctype="multipart/form-data">
						<h3>Создать продукт в меню</h3>
						<div class="col-md-12 mt-2">
							<label>Название</label><br>
							<input type="text" name="name" placeholder="..." required>
						</div>
						<div class="col-md-12 mt-4">
							<label>Описание</label><br>
							<textarea type="text" name="decription" placeholder="..." required></textarea>
						</div>
						<div class="col-md-12 mt-4">
							<label>Цена, ₺</label><br>
							<input type="number" name="price" placeholder="..." required>
						</div>
						<div class="col-md-12 mt-4">
							<label>Категория</label><br>
							<select name="category" required>
								<option>...</option>
								<option>Пельмени</option>
								<option>Супы</option>
								<option>Салаты</option>
								<option>Гарниры</option>
								<option>Напитки</option>
							</select>
						</div>
						<div class="col-md-12 mt-4">
							<input multiple type="file" name="file[]">
						</div>
						<div class="col-md-12 mt-4">
							<button type="submit" name="submit" class="btn btn-primary" style="width: 80%;">Создать</button>
						</div>
					</form>
				</div>
				<div class="col-lg-6 mt-4">
					<h3>Заказы</h3>
					<div class="col-md-12 mt-2 order-board" style="overflow-y: scroll;">
						<?php foreach($orders as $order){ ?>
						<div style="width: 100%; height: 140px; border-bottom: 1px dotted; padding: 10px;">
							<div class="d-flex flex-column bd-highlight">
							  	<div class="bd-highlight"><b>Имя:</b> <span><?= $order['name']; ?></span></div>
							  	<div class="bd-highlight"><b>Телефон:</b> <span><?= $order['phone']; ?></span></div>
							  	<div class="bd-highlight"><b>Мессенджер:</b> <span><?= $order['messenger']; ?></span></div>
							  	<a class="btn btn-outline-danger mt-2" href="?del_order=<?= $order['id']; ?>">Удалить</a>
							</div>
						</div>
						<?php } ?>
					</div>

					<h3 class="mt-2">Меню</h3>
					<div class="col-md-12 mt-2 menu-board" style="overflow-y: scroll;">
						<?php foreach($foods as $food){ ?>
						<div style="width: 100%; height: 110px; border-bottom: 1px dotted; padding: 10px;">
							<img src="../<?= $food['food_image'] ?>" width="130" height="85" style="float: left; margin-right: 20px; border-radius: 5px;">
							<div class="d-flex flex-column bd-highlight">
							  	<div class="bd-highlight"><span><b>Название:</b> <?= $food['food_name'] ?></span></div>
							  	<div class="bd-highlight"><b>Цена:</b> <span><?= $food['food_price'] ?>₺</span></div>
							  	<a href="?del_food=<?= $food['id'] ?>" class="btn btn-outline-danger">Удалить</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
<?php else: header('Location: login.php'); ?>
<?php endif; ?>