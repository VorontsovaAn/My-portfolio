<?php
    require_once("dbconnect.php");
    $id = $mysqli->real_escape_string($_POST['id']);
    $status = $mysqli->real_escape_string($_POST['status']);
    if($_POST['status'] == 'vrasm'){
        $statusApp = 'В рассмотрении';
        $mysqli->query("UPDATE appeals SET class = '$status', status = '$statusApp' WHERE id = '$id'");
        header("Location: ../pages/appeals.php");
    } else if($_POST['status'] == 'prin'){
        $statusApp = 'Принято';
        $mysqli->query("UPDATE appeals SET class = '$status', status = '$statusApp' WHERE id = '$id'");
        header("Location: ../pages/appeals.php");
    } else if($_POST['status'] == 'otkl'){
        $statusApp = 'Отклонено';
        $mysqli->query("UPDATE appeals SET class = '$status', status = '$statusApp' WHERE id = '$id'");
        header("Location: ../pages/appeals.php");
    } else {
        header("Location: ../pages/appeals.php");
    }
?>