<?php
    session_start();
    require_once("dbconnect.php");
    
    $title = $mysqli->real_escape_string($_POST['title']);
    $sum = $mysqli->real_escape_string($_POST['sum']);
    $date = date('d.m.Y');
    $userId = $mysqli->real_escape_string($_POST['user']);
    
    $mysqli->query("INSERT INTO `fines` (`id`, `name`, `sum`, `date`, `user_id`) VALUES (NULL, '$title', '$sum', '$date', '$userId')");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ../pages/fines.php");
    exit;

?>