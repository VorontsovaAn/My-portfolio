<?php
    require_once("dbconnect.php");
    $first_name = $mysqli->real_escape_string($_POST['firstName']);
    $last_name = $mysqli->real_escape_string($_POST['lastName']);
    $tel = $mysqli->real_escape_string( (int) $_POST['tel']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $loginReg = $mysqli->real_escape_string($_POST['loginReg']);
    $passwordReg = $mysqli->real_escape_string($_POST['passReg']);
    $role = "user";

    $passHash = md5($passwordReg . "mnbvcxzlkjhgfdsaPOIUYTREWQ");

    $mysqli->query("INSERT INTO `users` (firstName, lastName, tel, email, login, password, role) VALUES ('".$first_name."', '".$last_name."', '".$tel."', '".$email."', '".$loginReg."', '".$passHash."', '".$role."')");
    header("Location: /index.php");

    $mysqli->close();
?>