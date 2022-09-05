<?php
    require_once("dbconnect.php");
    $email = $mysqli->real_escape_string($_POST['emailAuth']);
    $password = $mysqli->real_escape_string($_POST['passAuth']);
    session_start();

    $passHash = md5($password . "mnbvcxzlkjhgfdsaPOIUYTREWQ");
    $result_query_select = $mysqli->query("SELECT * FROM `users` WHERE email = '$email' and pass = '$passHash'");
    
    if($result_query_select->num_rows == 1){
        $f_names = $result_query_select->fetch_assoc();

        $id = $f_names["id"];
        $_SESSION["id"] = $id;

        $f_name = $f_names["firstName"];
        $_SESSION["firstName"] = $f_name;

        $l_name = $f_names["lastName"];
        $_SESSION["lastName"] = $l_name;

        $role=$f_names["role"];
        $_SESSION["role"] = $role;
        
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ../index.php");
        
    }else{
        $_SESSION['auth_no'] = true;
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: /index.php");
    }
    $mysqli->close();
?>

