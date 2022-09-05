<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "dbchelyabinsck2";

    $mysqli = new mysqli($server, $username, $password, $database);

    if($mysqli->connect_errno){
        die("<p><strong>Ошибка подключения к БД</strong></p><p><strong>Код ошибки:</strong> ". $mysqli->connect_errno ." </p><p><strong>Описание ошибки:</strong> " .$mysqli->connect_error."</p>");
    }

    $mysqli->set_charset('utf8');
?>