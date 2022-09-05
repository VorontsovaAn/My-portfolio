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

        <h3 style="text-align:center;">Редактировать новость</h3>
            <div class="contayner mt-3" >
                <form action="/php/editNew.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="date" value="<?= $value[4]?>">
                    <input type="hidden" name="id" value="<?= $value[0]?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Название (до 50 символов)</label>
                        <input type="text" name="title" class="form-control"  value="<?= $value[2] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Описание</label>
                        <textarea type="text" name="text" class="form-control" style="min-height:400px;" required><?= $value[3] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <?php
                            if($value[5] == 1){
                                if($value[4] == date('d.m.Y')){
                        ?>
                            <input type="checkbox" name="dayNewCheck" id="dayNewCheck" value="1" checked>
                            <label for="dayNewCheck">Сделать новостью дня</label>
                        <?php
                                };
                            }else{
                                if($value[4] == date('d.m.Y')){
                        ?>
                            <input type="checkbox" name="dayNewCheck" id="dayNewCheck" value="1">
                            <label for="dayNewCheck">Сделать новостью дня</label>
                        <?php
                        };
                            };
                        ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Новое изображение:</label>
                        <input type="file" name="file" class="form-control" accept="image/png, image/jpeg">
                    </div>
                    <div class="mb-3">
                        <p>Текущее изображение:</p>
                        <img src="<?= $value[1] ?>" class="mb-2" alt="new" style="border-radius:5px; width:30%; border:1px solid gray;">
                    </div>

                    <button type="submit" class="btn btn-outline-success" style="margin:0 auto; display:block;">Редактировать</button>
                </form>
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