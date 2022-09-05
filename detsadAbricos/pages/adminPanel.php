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

    <main id="adminPanel">
      
        <div class="reviews">
            <?php
                while($row = $result->fetch_assoc()){
            ?>

            <div class="otz">
                <div>
                    <h3><?php printf("".$row["firstName"]." "); printf("".$row["lastName"]."<br>"); ?></h3>
                    <p><?php printf("".$row["review"].""); ?></p>
                </div>
                <?php
                  echo "<form action='/php/deletereview.php' method='POST'>
                    <input type='hidden' name='idReview' value='".$row["id"]."'>
                    <input type='submit' value='Удалить'>
                    </form>";
                ?>
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



echo "<input type='hidden' name='idGroup' value='".$groups_data["group_id"]."'>";

<form action="../php/deleteGroup.php">