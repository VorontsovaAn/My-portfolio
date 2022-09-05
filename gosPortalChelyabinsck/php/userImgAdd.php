<?php
    session_start();
    require_once("dbconnect.php");
    $id = $_SESSION["id"];
    $link = 'img/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], '../' . $link);
    $file = '../' . $link;
    
    $mysqli->query("UPDATE users SET image_link = '$file' WHERE id = '$id'");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ../pages/userPersAc.php");
        

?>