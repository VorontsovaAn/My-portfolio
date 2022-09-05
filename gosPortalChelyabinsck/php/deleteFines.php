<?php
    require_once("dbconnect.php");
    
    $id = $mysqli->real_escape_string($_GET['id']);
    $mysqli->query("DELETE FROM `fines` WHERE `fines`.`id` = '$id'");
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /pages/fines.php");

    $mysqli->close();
    
?>