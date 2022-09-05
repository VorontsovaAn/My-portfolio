<?php
    session_start();
    unset($_SESSION["login"]);
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /index.php");
    session_write_close();
?>