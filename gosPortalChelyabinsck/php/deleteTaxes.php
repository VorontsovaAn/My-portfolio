<?php
    require_once("dbconnect.php");
    
    $id = $mysqli->real_escape_string($_GET['id']);
    $mysqli->query("DELETE FROM `taxes` WHERE `taxes`.`id` = '$id'");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /pages/taxes.php");

    $mysqli->close();
    
?>