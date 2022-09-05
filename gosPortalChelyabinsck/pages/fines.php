<!DOCTYPE html>
<html lang="ru">
    <?php
        session_start();
        require_once("../php/dbconnect.php");
        if(!isset($_SESSION["firstName"])){
          header("HTTP/1.1 301 Moved Permanently");
          header("Location: /index.php");
      };
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
        <h3 style="text-align:center;">Штрафы</h3>

        <?php
            if($_SESSION["role"] == 2){
        ?>
            <a href="/pages/addFines.php" class="btn btn-outline-dark mb-3">Добавить</a>

        <?php
            };
        ?>

        <?php
            $arr = mysqli_query($mysqli, "SELECT * FROM `fines` ORDER BY date DESC");
            $arr = mysqli_fetch_all($arr);
            $arr2 = mysqli_query($mysqli, "SELECT * FROM `users`");
            $arr2 = mysqli_fetch_all($arr2);
            foreach ($arr as &$value) {
                if($_SESSION["role"] == 1 && $_SESSION["id"] == $value[4]){
        ?>

            <div class="container card <?= $value[2] ?> p-2 mb-3">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <h4 class="card-title"><?= $value[1] ?></h4>
                        <?php
                            foreach ($arr2 as &$value2) {
                            if($value2[0] == $value[4]){
                        ?>
                            <h5 class="card-title">Пользователь: <?= $value2[2] ?> <?= $value2[3] ?></h5>
                            <p class="card-text">Паспорт: <?= $value2[4] ?></p>
                        <?php
                                };
                            };
                        ?>
                        <p class="card-text" style="color:rgba(0,0,0,0.5); font-size:14px; margin-top:-15px;"><?= $value[3] ?></p>
                        <p class="card-text" style="font-size:30px;"><?= $value[2] ?> р.</p>

                    </div>
                </div>
            </div>
            <?php
                } else if($_SESSION["role"] == 2){
            ?>
                <div class="container card <?= $value[2] ?> p-2 mb-3">
                    <div class="card-body d-flex justify-content-between">
                        <div>
                            <h4 class="card-title"><?= $value[1] ?></h4>
                            <?php
                                foreach ($arr2 as &$value2) {
                                if($value2[0] == $value[4]){
                            ?>
                                <h5 class="card-title">Пользователь: <?= $value2[2] ?> <?= $value2[3] ?></h5>
                                <p class="card-text">Паспорт: <?= $value2[4] ?></p>
                            <?php
                                    };
                                };
                            ?>
                            <p class="card-text" style="color:rgba(0,0,0,0.5); font-size:14px; margin-top:-15px;"><?= $value[3] ?></p>
                            <p class="card-text" style="font-size:30px;"><?= $value[2] ?> р.</p>
                        </div>
                        <?php
                            if(isset($_SESSION['role']) && $_SESSION['role'] == 2){
                        ?>
                            <div>
                                <a href="/php/deleteFines.php?id=<?= $value[0]?>" class="btn btn-outline-danger nav-btn mt-2"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
           
            

    </main>
    <?php
        require_once("../pages/footer.php");
    ?>
    <script src="../js/script.js"></script>
</body>
</html>