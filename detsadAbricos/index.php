<!DOCTYPE html>
<html>
    <?php
      session_start();
    ?>
  <head>
    <title>Детский сад "Абрикос"</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel=stylesheet href="/css/style.css">
  </head>
  <body>

    <?php 
      require_once('pages/header.php')
    ?>

    <main id="main">
      <div class="sliderG">
        <div class="slider">
          <div class="slider__wrapper">
            <div class="slider__item">
              <img class="imgg" src="img/1.png" alt="0">
            </div>
            <div class="slider__item">
              <img class="imgg" src="img/2.png" alt="1">
            </div>
            <div class="slider__item">
              <img class="imgg" src="img/3.png" alt="2">
            </div>
          </div>
        </div>
      </div>
      <div class="information">
        <h2>О нас</h2>
        <p>Человеку очень важно состояться сначала как ребенку, чтобы не задержаться где-то на границе детства и взрослости. Поэтому для нас важно дать ребенку возможность проживать счастливое детство здесь и сейчас!</p>
        <h2>Руководители</h2>
        <div class="leadersBlock">
          <div class="leader">
            <img src = "img/director.png">
            <p><span>Рябова Василиса Сергеевна</span><br>
            Директор<br><br>"Самое лучшее ожерелье для женщины – это руки ребенка, обнимающие ее шею…"</p>
          </div>
          <br>
          <div class="leader">
            <img src = "img/deputyDirector.png">
            <p><span>Чернова Ольга Андреевна</span><br>
            Заместитель директора <br><br>"Детская улыбка это лучшее событие в жизни каждого родителя, такая искренняя и счастливая..."</p>
          </div>
        </div><br>
        <div class="staffBlock">
          <h2>Персонал</h2>
          <div class="staff">
          <div class="employees">
            <div class="employee">
              <img src = "img/povar.jpg"><br>
              <p><span>Морозова Вера</span><br>Главный повар</p>
            </div>
            <div class="employee">
              <img src = "img/medsetra.png"><br>
              <p><span>Громова Алина</span><br>Медсестра</p>
            </div>
            <div class="employee">
              <img src = "img/psiholog.png"><br>
              <p><span>Акимова Зоя</span><br>Педагог-психолог</p>
            </div>
            <div class="employee">
              <img src = "img/logoped.jpg"><br>
              <p><span>Щубина Полина</span><br>Учитель-логопед</p>
            </div>
          </div>
          
          <div class="employees">
            <div class="employee">
              <img src = "img/v1.png"><br>
              <p><span>Рыжова Ника</span><br>Воспитатель</p>
            </div>
            <div class="employee">
              <img src = "img/v2.png"><br>
              <p><span>Крючкова Ева</span><br>Воспитатель</p>
            </div>
            <div class="employee">
              <img src = "img/v3.png"><br>
              <p><span>Уткина Диана</span><br>Воспитатель</p>
            </div>
            <div class="employee">
              <img src = "img/v4.png"><br>
              <p><span>Грачева Ася</span><br>Воспитатель</p>
            </div>
          </div>

        </div>
      </div>
        <table>
          <caption>Расписание дня</caption>
          <tr>
            <td>7.00 - 8.00</td><td>Приём детей, утренняя гимнастика</td>
          </tr>
          <tr>
            <td>8.00 - 8.20</td><td>Подготовка к завтраку</td>
          </tr>
          <tr>
            <td>8.20 - 8.40</td><td>Завтрак</td>
          </tr>
          <tr>
            <td>8.40 - 8.50</td><td>Самостоятельная деятельность, подготовка к занятию</td>
          </tr>
          <tr>
            <td>9.00 - 9.25</td><td>Организованная Образовательная Деятельность</td>
          </tr>
          <tr>
            <td>9.50 - 11.50</td><td>Подготовка к прогулке, прогулка (игры, наблюдения, труд)</td>
          </tr>
          <tr>
            <td>11.50 - 12.00</td><td>Возвращение с прогулки, подготовка к обеду</td>
          </tr>
          <tr>
            <td>12.00 - 12.30</td><td>Обед</td>
          </tr>
          <tr>
            <td>12.40 - 15.00</td><td>Дневной сон</td>
          </tr>
          <tr>
            <td>15.00 - 15.15</td><td>Полдник</td>
          </tr>
          <tr>
            <td>15.25 - 15.50</td><td>Организованная Образовательная Деятельность</td>
          </tr>
          <tr>
            <td>15.50 - 16.30</td><td>Самостоятельная деятельность, игры, чтение</td>
          </tr>
          <tr>
            <td>16.30 - 16.35</td><td>Подготовка к ужину</td>
          </tr>
          <tr>
            <td>16.35 - 16.50</td><td>Ужин</td>
          </tr>
          <tr>
            <td>17.00 - 18.00</td><td>Игры, прогулка</td>
          </tr>
        </table><br>
        <h2>Меню на день</h2>
        <div class="menuBlock">
          <div class="menu">
            <h3>Завтрак</h3>
            <ul>
              <li>Манная каша</li>
              <li>Кофейный напиток из цикория с молоком</li>
              <li>Бутерброд со сливочным маслом и сыром</li>
            </ul>
          </div>
          <div class="menu">
            <h3>Обед</h3>
            <ul>
              <li>Суп рассольник</li>
              <li>Макароны</li>
              <li>Гуляш из говядины с подливой</li>
              <li>Хлеб</li>
              <li>Компот</li>
            </ul>
          </div>
          <div class="menu">
            <h3>Полдник</h3>
            <ul>
              <li>Фруктовый сок</li>
              <li>Половина яблока</li>
            </ul>
          </div>
          <div class="menu">
            <h3>Ужин</h3>
            <ul>
              <li>Отварное филе морской белой рыбы</li>
              <li>Овощи по-польски</li>
              <li>Чай с сахаром</li>
              <li>Печенье</li>
            </ul>
          </div>
        </div><br>
        <div class="gallery"><p>
            <img src="img/1дети.jpg" alt="1">
            <img src="img/2дети.jpg" alt="2">
            <img src="img/3дети.jpg" alt="3">
            <img src="img/4дети.jpg" alt="4">
            <img src="img/5дети.jpg" alt="5">
            <img src="img/6дети.jpg" alt="6"></p>
        </div>
      </div>
    </main>

    <?php 
      require_once('pages/footer.php')
    ?>

    <script src="/script/script.js"></script>
    <script src="/script/scriptform.js"></script>
  </body>
</html>
