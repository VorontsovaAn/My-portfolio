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
        <div class="filterApp">
            <ul>
                <li data-f="all" class="btn btn-outline-dark">Все обращения</li>
                <li data-f="vrasm" class="btn btn-outline-dark">В рассмотрении</li>
                <li data-f="prin" class="btn btn-outline-dark">Принято</li>
                <li data-f="otkl" class="btn btn-outline-dark">Отклонено</li>
            </ul>
        </div>
        <?php
            $arr = mysqli_query($mysqli, "SELECT * FROM `appeals`");
            $arr = mysqli_fetch_all($arr);
            foreach ($arr as &$value) {
                if($_SESSION['role']==1 && $value[7] == $_SESSION['id']){
        ?>
            <div class="container card <?= $value[2] ?> p-2 truncate mb-3">
                <div class="card-body d-flex justify-content-between">
                    <div style="max-width:700px;">
                        <a href="/pages/appealRead.php?id=<?= $value[0]?>" style="color:black;"><h4 class="card-title"><?= $value[1] ?></h4></a>
                        <p class="card-text"><?= $value[3] ?></p>
                        <a href="<?= $value[5] ?>">Скачать документ</a>
                        <p style="color:rgba(0,0,0,0.5); font-size:13.5px;"><?= $value[6] ?></p>
                    </div>
                    <div>
                        <?php
                            if($value[4] == "В рассмотрении"){
                        ?>
                            <p class="mt-4" style="color:black; border: 1px solid black; border-radius:4px; padding:6px 12px;"><?= $value[4] ?></p>
                        <?php
                            } else if($value[4] == "Принято"){
                        ?>
                            <p class="mt-4" style="color:green; border: 1px solid green; border-radius:4px; padding:6px 12px;"><?= $value[4] ?></p>
                        <?php
                            } else if($value[4] == "Отклонено"){
                        ?>
                            <p class="mt-4" style="color:red; border: 1px solid red; border-radius:4px; padding:6px 12px;"><?= $value[4] ?></p>
                        <?php
                            };
                        ?>
                    </div>
                </div>
            </div>
            <?php
                } else if($_SESSION['role'] == 2){
                    $arr2 = mysqli_query($mysqli, "SELECT * FROM `users`");
                    $arr2 = mysqli_fetch_all($arr2);
            ?>
                <div class="container card <?= $value[2] ?> p-2 truncate mb-3">
                    <div class="card-body d-flex justify-content-between">
                        <div style="max-width:700px;">
                        <a href="/pages/appealRead.php?id=<?= $value[0]?>" style="color:black;"><h4 class="card-title"><?= $value[1] ?></h4></a>
                            <?php
                                foreach ($arr2 as &$value2) {
                                if($value2[0] == $value[7]){
                            ?>
                            <h5 class="card-title">Пользователь: <?= $value2[2] ?> <?= $value2[3] ?></h5>
                            <h5 class="card-title">Почта: <?= $value2[7] ?></h5>
                            <?php
                                    };
                                };
                            ?>
                            <p class="card-text"><?= $value[3] ?></p>
                            <a href="<?= $value[5] ?>">Скачать документ</a>
                        </div>
                        <?php
                            if($_SESSION['role'] == 2){
                        ?>
                        <div>
                            <form action="/php/status.php" method="post" class="mt-4" style="text-align:right;">
                                <input type="hidden" name="id" value="<?= $value[0] ?>">
                                <select class="form-select me-2" name="status" aria-label="select example" required>
                                    <option value="<?= $value[4] ?>" style="color:rgba(0,0,0,0.5);" selected><?= $value[4] ?></option>
                                    <option value="vrasm">В рассмотрении</option>
                                    <option value="prin" style="color:green;">Принято</option>
                                    <option value="otkl" style="color:red;">Отклонено</option>
                                </select><br>

                                <button type="submit" class="btn btn-outline-dark">Изменить</button>
                            </form>
                        </div>
                        <?php
                            };
                        ?>
                    </div>
                </div>
        <?php
            };
        };
        ?>
    <script src="/js/filterApp.js"></script>
    </main>
    <?php
        require_once("../pages/footer.php");
    ?>
</body>
</html>

