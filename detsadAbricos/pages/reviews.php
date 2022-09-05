<!DOCTYPE html>
<html>
  <?php
    session_start();
    require_once("../php/dbconnect.php");
    $result = $mysqli->query("SELECT * FROM `reviews`"); // запрос на выборку
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

    <main id="reviews">

    <?php 
      if(isset($_SESSION['login'])){
    ?>

      <form action="/php/reviews.php" method="POST">
        <h3>Оставьте ваш отзыв</h3>
          <p>Отзыв:</p>
          <textarea name="review" required></textarea>
        <p><input class="sub" type="submit"></p>
      </form>

      <?php
      };
      ?>

      
      <div class="reviews">
        <?php
          while($row = $result->fetch_assoc()){
        ?>
        <div class="otz">
          <h3><?php printf("".$row["firstName"]." "); printf("".$row["lastName"]."<br>"); ?></h3>
          <p><?php printf("".$row["review"].""); ?></p>
        </div>
        <?php
          };
        ?>
      </div>

      <?php
        $mysqli->close();
      ?>
      
    </main>
        
    <?php 
      require_once('footer.php')
    ?>
    <script src="/script/scriptform.js"></script>
  </body>



</html>