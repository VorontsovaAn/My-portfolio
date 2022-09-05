<?php
require_once('bd_connect.php');
$login = $_POST['login-auth'];
$password = $_POST['password-auth'];
session_start();

$result = $mysqli->query("SELECT * FROM `users` WHERE login = '".$login."' AND password = '".$password."'");

    if($result->num_rows == 1){
        $role = $result->fetch_assoc();
        $roleName = $role['role_id'];
        echo $roleName;
    if($roleName = 1){
            header('Location: ../pages/s-admin.php');
    }else if($roleName = 2){
            header('Location: ../pages/admin.php');
        }
    
} else{
    echo 'Не работает';
}  
?>
