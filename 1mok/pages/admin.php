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
        require_once("../element/header.php");
    ?>
    <main>
        
        <div class="container content">
        
            <div class="buttons">
                <button type="button" id="btnCallSchedule" class="btn btn-outline-dark">Расписание звонков</button>
                <button type="button" id="btnGroupsBlock" class="btn btn-outline-dark">Список групп</button>
            </div>


            <div class="call_schedule" id="call_schedule">
                <table border = "1" align = "center">
                    <th>Расписание звонков</th>
                    <tr>
                        <td class="col-md-2" rowspan="2">1 пара</td>
                        <td>Урок 1</td><td>8:30 - 9:15</td><td>15 минут</td>
                    </tr>
                    <tr>
                        <td>Урок 2</td><td>9:30 - 10:15</td><td>20 минут</td>
                    </tr>

                    <tr>
                        <td class="col-md-2" rowspan="2">2 пара</td>
                        <td>Урок 3</td><td>10:35 - 11:20</td><td>15 минут</td>
                    </tr>
                    <tr>
                        <td>Урок 4</td><td>11:35 - 12:20</td><td>20 минут</td>
                    </tr>

                    <tr>
                        <td class="col-md-2" rowspan="2">3 пара</td>
                        <td>Урок 5</td><td>12:40 - 13:25</td><td>15 минут</td>
                    </tr>
                    <tr>
                        <td>Урок 6</td><td>13:40 - 14:25</td><td>10 минут</td>
                    </tr>

                    <tr>
                        <td class="col-md-2" rowspan="2">4 пара</td>
                        <td>Урок 7</td><td>14:35 - 15:20</td><td>10 минут</td>
                    </tr>
                    <tr>
                        <td>Урок 8</td><td>15:30 - 16:15</td><td>10 минут</td>
                    </tr>

                    <tr>
                        <td class="col-md-2" rowspan="2">5 пара</td>
                        <td>Урок 9</td><td>16:25 - 17:10</td><td>10 минут</td>
                    </tr>
                    <tr>
                        <td>Урок 10</td><td>17:20 - 18:05</td><td>Завершение учебного дня</td>
                    </tr>
                    
                </table>
                <div class="buttons">
                    <button type="button" id="but1" class="btn btn-outline-dark">Изменить расписание звонков</button>
                </div>  

            </div>


        <div id="groupsBlock">
            <div class="container container-fluid d-flex justify-content-around flex-wrap groups">
                <div class="row">
                    <div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div><div class="col-lg-2 col-sm-4">
                        <div class="groupBlock">
                            <a href="#">
                                <h3>Группа</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="buttons">
                <button type="button" id="but1" class="btn btn-outline-dark">Добавить группу</button>
                <button type="button" id="but1" class="btn btn-outline-dark">Удалить группу</button>
            </div>
        
        </div>

        </div>

    </main>
    <?php
    require_once("../element/footer.php");
    ?>
    <script src="../script/script.js"></script>
    <script src="https://use.fontawesome.com/e18f9a41ff.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>