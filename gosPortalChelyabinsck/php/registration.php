<?php
    require_once("dbconnect.php");
    $imgLink = "../img/imgUser.png";
    $firstNameReg = $mysqli->real_escape_string($_POST['firstNameReg']);
    $lastNameReg = $mysqli->real_escape_string($_POST['lastNameReg']);
    $pasportReg = $mysqli->real_escape_string($_POST['pasportReg']);
    $innReg = $mysqli->real_escape_string($_POST['innReg']);
    $snilsReg = $mysqli->real_escape_string($_POST['snilsReg']);
    $emailReg = $mysqli->real_escape_string($_POST['emailReg']);
    $passReg = $mysqli->real_escape_string($_POST['passReg']);
    $role = 1;
    session_start();

    $passHash = md5($passReg . "mnbvcxzlkjhgfdsaPOIUYTREWQ");

    $result = $mysqli->query("SELECT * FROM `users` WHERE pasport = '$pasportReg' or inn = '$innReg' or snils = '$snilsReg' or email = '$emailReg'");
    if($result ->num_rows> 0){

        $_SESSION['reg_no'] = true;
        header("Location: /index.php");

    } else{

        $_SESSION['reg_ok'] = true;

        
        $mysqli->query("INSERT INTO `users` (image_link, firstName, lastName, pasport, inn, snils, email, pass, role) VALUES ('".$imgLink."', '".$firstNameReg."', '".$lastNameReg."', '".$pasportReg."', '".$innReg."', '".$snilsReg."', '".$emailReg."', '".$passHash."', '".$role."')");
        header("Location: /index.php");
    
    }

    $mysqli->close();
?>