<?php
    require_once("dbconnect.php");
    $loginAuth = $mysqli->real_escape_string($_POST['loginAuth']);
    $passAuth = $mysqli->real_escape_string($_POST['passAuth']);
    session_start();

    $passHash = md5($passAuth . "mnbvcxzlkjhgfdsaPOIUYTREWQ");

    $result_query_select = $mysqli->query("SELECT * FROM `users` WHERE login = '".$loginAuth."' and password = '".$passHash."'");

    if($result_query_select->num_rows == 1){
        $result = $result_query_select->fetch_assoc();
        $logins = $result["login"];
        $_SESSION["login"] = $logins;

        $role = $result["role"];
        $_SESSION["role"] = $role;

        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /index.php");
    }else{
        echo 'Не правильный логин или пароль. <a href="/index.php">Вернуться на главную</a>';
    }

    $mysqli->close();
?>