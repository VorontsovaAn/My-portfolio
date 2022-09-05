<?php
    require_once("dbconnect.php");
    if (isset($_POST["idReview"])){
        $idReview = $_POST['idReview'];

        $mysqli->query("DELETE FROM `reviews` WHERE id = '$idReview'");

        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /pages/reviews.php");
        exit;
    }

    $mysqli->close();
?>