<?php
    require_once("dbconnect.php");
    session_start();
    $review = $mysqli->real_escape_string($_POST['review']);
    $login = $_SESSION['login'];

    $result_query_select = $mysqli->query("SELECT * FROM `users` WHERE login = '".$login."'");

    $result = $result_query_select->fetch_assoc();
    $loginId = $result["id"];
    $firstName = $result["firstName"];
    $lastName = $result["lastName"];

    $mysqli->query("INSERT INTO `reviews` (firstName, lastName, loginId, review) VALUES ('".$firstName."', '".$lastName."', '".$loginId."', '".$review."')");

    header("Location: /pages/reviews.php");

    $mysqli->close();
?>