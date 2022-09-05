<?php
	session_start();
	require_once("../php/bd_connect.php");
    $result = $mysqli->query("SELECT * FROM `buildings`");
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
		require_once("../element/header.php");
	?>
	<main>
		<div class="container-fluid content">
			<div id="add-form">
				<h3>Добавление админа</h3>

				<form method="post" action="../php/registration.php">

					<div class="mb-3">
						<label for="first-name-reg" class="form-label">Имя</label>
						<input type="text" name="first-name-reg" class="form-control" id="first-name-reg" required>
					</div>

                    <div class="mb-3">
						<label for="last-name-reg" class="form-label">Фамилия</label>
						<input type="text" name="last-name-reg" class="form-control" id="last-name-reg" required>
					</div>

                    <div class="mb-3">
						<label for="email-reg" class="form-label">Почта</label>
						<input type="email" name="email-reg" class="form-control" id="email-reg" required>
					</div>

                    <div class="mb-3">
						<label for="login-reg" class="form-label">Логин</label>
						<input type="text" name="login-reg" class="form-control" id="login-reg" required>
					</div>

					<div class="mb-3">
						<label for="password-reg" class="form-label">Пароль</label>
						<input type="password" name="password-reg" class="form-control" id="password-reg" aria-describedby="passReminder" required>
						<div id="passReminder" class="form-text">Не менее 6 символов</div>
					</div>

                    <div class="mb-3">

                        <label for="area-reg" class="form-label">Здание</label>

                        <select name='area-reg' class="form-select" aria-label="default_select" id="area-reg">


							<option selected disabled>Выберите здание</option>

						
							<?php
								while($row = $result->fetch_assoc()){
									if($row["building_type"] == "all"){

									}else{
							?>

							<?php
                            	echo "<option value='".$row["buildings_id"]."'>".$row["address"]."</option>";
							?>

							<?php
								};
								};
							?>

                        </select>

					</div>


					<div id="reg-button">
						<button type="submit" class="btn btn-outline-dark">Создать</button>
					</div>

				</form>
			</div>
		</div>
	</main>
	<?php
		require_once("../element/footer.php");
	?>
	<script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>




