<?php
    session_start();
    unset($_SESSION["firstName"]);
    unset($_SESSION["role"]);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ../index.php");
?>