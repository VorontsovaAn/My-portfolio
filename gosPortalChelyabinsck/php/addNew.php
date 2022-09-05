<?php
    session_start();
    require_once("dbconnect.php");
    
    $title = $mysqli->real_escape_string($_POST['title']);
    $text = $mysqli->real_escape_string($_POST['text']);
    $link = 'img/' . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], '../' . $link);
    $date = date('d.m.Y');
    $file = '../' . $link;
    
    if(empty($_POST['dayNewCheck'])){

        $dayNewCheck=0;
        $mysqli->query("INSERT INTO `news` (`id`, `image_link`, `title`, `text`, `date`, `dayNew`) VALUES (NULL, '$file', '$title', '$text', '$date', '$dayNewCheck')");
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ../pages/news.php");
        exit;

    } else {

        $dayNewCheck = $_POST['dayNewCheck'];
        if($date == date('d.m.Y')){
            $result = $mysqli->query("SELECT * FROM `news` WHERE date = '$date' and dayNew = '$dayNewCheck'");
            if($result->num_rows == 1){
                $_SESSION['addNew_no'] = true;
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ../pages/news.php");
                exit;
            }else{
                $mysqli->query("INSERT INTO `news` (`id`, `image_link`, `title`, `text`, `date`, `dayNew`) VALUES (NULL, '$file', '$title', '$text', '$date', '$dayNewCheck')");
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ../pages/news.php");
                exit;
            };

        };  
    };
?>