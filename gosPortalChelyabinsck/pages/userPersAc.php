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
    <script src="/js/jquery.js"></script>
    <script src="/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <?php
       require_once('header.php')
    ?>

    <main class="container-fluid content">
        <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="container">
                <h2><?php
                    echo $_SESSION["firstName"];
                    echo " ";
                    echo $_SESSION["lastName"];
                ?></h2><br>
                <div>
                    <?php
                        $arr = mysqli_query($mysqli, "SELECT * FROM `users`");
                        $arr = mysqli_fetch_all($arr);
                        foreach ($arr as &$value) {
                            if($value[0] == $_SESSION["id"]){
                    ?>
                            
                        <div class="show_it">
                            <img src="<?= $value[1] ?>" class="mb-4 imgUser" alt="userImg">
                            <button class="my_btn showBut btn btn-outline-dark" style="margin:0 auto; display:none;"><i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>

                    <?php
                            };
                        };
                    ?>
                    
                    <div class="mb-3" style="width:300px;">
                        <form action="/php/userImgAdd.php" class="btnLoadShow" style="display:none;" method="post" enctype="multipart/form-data">
                            <label class="form-label">Загрузить фотографию</label>
                            <input type="file" name="file" class="form-control mb-3" accept="image/png, image/jpeg" required>
                            <button type="submit" class="btn btn-outline-dark" style="margin:0 auto;">Загрузить</button>
                        </form>
                    </div>
                    
                </div>

                <ul class="userUl">
                    <li>
                        <a href="appeals.php">Мои обращения</a>
                    </li>
                    <li>
                        <a href="fines.php">Штрафы</a>
                    </li>
                    <li>
                        <a href="taxes.php">Налоги</a>
                    </li>
                
                </ul>   
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="container mt-3 card" style="padding:50px">
                <h3>Написать обращение</h3><br>
                <form action="/php/appealsAdd.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="view" class="mb-2">Вид обращения</label>
                        <select class="form-select" name="view" id="view" aria-label="select example" required>
                            <option value="Предложение">Предложение</option>
                            <option value="Заявление">Заявление</option>
                            <option value="Жалоба">Жалоба</option>
                        </select><br>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Текст обращения</label>
                        <textarea type="text" name="text" id="text" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Документ</label>
                        <input type="file" name="file" class="form-control" accept=".doc,.docx,application/msword" required>
                    </div>
                    <button type="submit" class="btn btn-outline-dark" style="margin:0 auto;">Отправить</button>
                </form>
            </div>
        </div>
    </div>

    <script src="/js/fadeButton.js"></script>

    </main>

    <?php
       require_once('footer.php');
    ?>
</body>
</html>