<?php
    require_once("bd_connect.php");
    $first_name = $_POST['first-name-reg'];
    $last_name = $_POST['last-name-reg'];
    $email = $_POST['email-reg'];
    $loginReg = $_POST['login-reg'];
    $passwordReg = $_POST['password-reg'];
    $role = "2";
    $building = $_POST['area-reg'];
    
    $passHash = md5($passwordReg);


    $mysqli->query("INSERT INTO `users` (first_name, last_name, email, login, password, role_id, building_id) VALUES ('".$first_name."', '".$last_name."','".$email."', '".$loginReg."', '".$passHash."', '".$role."', '".$building."')");
    header("Location: /index.php");

    $mysqli->close();
?>