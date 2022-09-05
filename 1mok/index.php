<?php
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1-mok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
	<?php
		require_once("element/header.php");
	?>
	<main>
		<div class="container-fluid content" id="auth-block">
			<div id="auth-form">
				<h3>Авторизация</h3>
				<form method="post" action="php/autorezed.php">
					<div class="mb-3">
						<label for="login-auth" class="form-label">Логин</label>
						<input type="text" name="login-auth" class="form-control" id="login-auth" required>
					</div>
					<div class="mb-3">
						<label for="password-auth" class="form-label">Пароль</label>
						<input type="password" name="password-auth" class="form-control" id="password-auth" aria-describedby="passReminder" required>
						<div id="passReminder" class="form-text">Не менее 6 символов</div>
					</div>
					<div id="auth-button">
						<button type="submit" class="btn btn-outline-dark">Войти</button>
					</div>
				</form>
				<a href="pages/s-admin.php">Супер-админ</a>
				<a href="pages/admin.php" style="float: right;">Админ</a>
			</div>
		</div>
	</main>
	<?php
		require_once("element/footer.php");
	?>
	<script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>