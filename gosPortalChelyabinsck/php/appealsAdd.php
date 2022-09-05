<?php
    session_start();
    require_once("dbconnect.php");
    
    $view = $mysqli->real_escape_string($_POST['view']);
    $text = $mysqli->real_escape_string($_POST['text']);
    $status = "В рассмотрении";
    $class = "vrasm";
    $link = 'files/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], '../' . $link);
    $date = date('d.m.Y');
    $file = '../' . $link;
    $userId = $_SESSION['id'];

    $mysqli->query("INSERT INTO `appeals` (`id`, `view`, `class`, `text`, `status`, `file_link`, `date`, `user_id`) VALUES (NULL, '$view', '$class', '$text', '$status', '$file', '$date', '$userId')");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ../pages/userPersAc.php");
    exit;

?>