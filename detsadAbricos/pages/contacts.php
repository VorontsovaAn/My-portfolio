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
          require_once('header.php')
        ?>
    <main id="contacts">
      
      <h3>Адрес</h3>
      <p>г.Москва, 4-я Новокузьминская ул., 3 корпус 1 строение 2</p>
      <h3>Телефон</h3>
      <p>+7 (800) 542-45-22</p>
      <h3>Рябова Василиса Сергеевна</h3>
      <p>Директор</p>
      <h3>Электронная почта</h3>
      <p class="mail">abrickos102@gmail.com</p>
      <h3>Режим работы</h3>
      <p>Пн. – Пт.: с 8:00 до 19:00</p>
      <h3>Как к нам добраться</h3>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d334.1403697562993!2d37.79060712195878!3d55.70950896284149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414ab599c9ca48bf%3A0x274d8c270fd3346a!2zNC3RjyDQndC-0LLQvtC60YPQt9GM0LzQuNC90YHQutCw0Y8g0YPQuy4sIDMg0LrQvtGA0L_Rg9GBIDEg0YHRgtGA0L7QtdC90LjQtSAyLCDQnNC-0YHQutCy0LAsIDEwOTM3Nw!5e0!3m2!1sru!2sru!4v1614599746299!5m2!1sru!2sru"
        allowfullscreen="" loading="lazy">
      </iframe>
    </main>

    <?php 
      require_once('footer.php')
    ?>

    <script src="/script/scriptform.js"></script>
  </body>
</html>