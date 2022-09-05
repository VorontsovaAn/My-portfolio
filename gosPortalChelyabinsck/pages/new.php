<!DOCTYPE html>
<html lang="ru">
    <?php
        session_start();
        require_once("../php/dbconnect.php");
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
       require_once('header.php')
    ?>

    <main class="container-fluid content">

        <?php
            if(isset($_GET['id'])){
                $arr = mysqli_query($mysqli, "SELECT * FROM `news`");
                    $arr = mysqli_fetch_all($arr);
                    foreach ($arr as &$value) {
                        if($value[0] == $_GET['id']){
            
        ?>
                <div class="container">
                    <div class="p-2 mb-3">
                        <p class="pimg"><img src="<?= $value[1] ?>" class="mb-2 imgNews" alt="new" style="border-radius:5px; margin:0 auto;"></p>
                        
                        <h5 class="card-title"><?= $value[2] ?></h5>
                        <p class="card-text"><?= $value[3] ?></p>
                        <p class="date" style="color:rgba(0,0,0,0.5); font-size:13.5px;"><?= $value[4] ?></p>
                    </div>
                </div>
        <?php
                    };
                };
            };
        ?>

    </main>

<?php
   require_once('footer.php')
?>


</body>
</html>