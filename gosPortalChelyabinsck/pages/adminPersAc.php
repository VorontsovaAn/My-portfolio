<!DOCTYPE html>
<html lang="ru">
    <?php
        session_start();
        require_once("../php/dbconnect.php");
        if(!isset($_SESSION["firstName"])){
          header("HTTP/1.1 301 Moved Permanently");
          header("Location: /index.php");
      }
    ?>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">

    <meta name="description" content="Городской портал Челябинска"/>

    <title>Городской портал Челябинска</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        require_once("../pages/header.php");
    ?>
    <main class="container-fluid content">
      <h2><?php
        echo "Администратор: ";
        echo $_SESSION['firstName'];
      ?></h2><br>
        <h3 style="text-align:center;">Создать новость</h3>
        <div class="contayner mt-3 w-75 m-auto">
            <form action="/php/addNew.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Название (до 50 символов)</label>
                <input type="text" name="title" class="form-control" maxlength="50" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Описание</label>
                <textarea type="text" name="text" class="form-control" required></textarea>
              </div>
              <div class="mb-3">
                <input type="checkbox" name="dayNewCheck" id="dayNewCheck" value="1">
                <label for="dayNewCheck">Сделать новостью дня</label>
              </div>
              <div class="mb-3">
                <label class="form-label">Картинка</label>
                <input type="file" name="file" class="form-control" accept="image/png, image/jpeg" required>
              </div>
              <button type="submit" class="btn btn-outline-dark" style="margin:0 auto; display:block; width:100px;">Добавить</button>
            </form>
        </div>

        <div class="contayner mt-3 admCab">
          <ul>
            <li><a href="/pages/appeals.php" class="btn btn-outline-dark mt-1">Смотреть обращения</a></li>
            <li><a href="/pages/taxes.php" class="btn btn-outline-dark mt-1">Смотреть налоги</a></li>
            <li><a href="/pages/fines.php" class="btn btn-outline-dark mt-1">Смотреть штрафы</a></li>
          </ul>
        </div>
        
    </main>
    <?php
        require_once("../pages/footer.php");
    ?>
    <script src="../js/script.js"></script>
</body>
</html>