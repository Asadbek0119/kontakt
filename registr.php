<?php
 include "function.php";
 if (count($_POST) > 0) {
	regsitr();
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 
    <title>Регистрация</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-5">
				<h2 class="my-4">Регистрация</h2>
				<form action="" method="post">
                    <div class="form-group my-3">
                        <input type="name" class="form-control" placeholder="Name" name="name">
                    </div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="form-group my-3">
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<button type="submit" class="btn btn-primary">Зарегистрироватся</button>
					<a href="./index.php" class="btn btn-info">Отмена</a>
				</form>
			</div>
		</div>
	</div>

    <script src="libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/popper.min.js"></script>
    <script src="libs/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>
</html>