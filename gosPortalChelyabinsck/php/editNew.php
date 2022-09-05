<?php
     session_start();
    require_once("dbconnect.php");

        $id = $mysqli->real_escape_string($_POST['id']);
        $title = $mysqli->real_escape_string($_POST['title']);
        $text = $mysqli->real_escape_string($_POST['text']);
        $link = 'img/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], '../' . $link);
        $file = '../' . $link;
        $date = $mysqli->real_escape_string($_POST['date']);
        if($_FILES['file']['name']==""){
            if(empty($_POST['dayNewCheck'])){

                $dayNewCheck=0;
                $mysqli->query("UPDATE news SET title = '$title', text = '$text', dayNew = '$dayNewCheck' WHERE id = '$id'");
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /pages/news.php");
                exit;

            } else {
                $dayNewCheck = $_POST['dayNewCheck'];
                if($date == date('d.m.Y')){
                    $result = $mysqli->query("SELECT * FROM `news` WHERE date = '$date' and dayNew = '$dayNewCheck'");
                    if($result->num_rows == 1){
                        $_SESSION['editNew_no'] = true;
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ../pages/news.php");
                        exit;
                    }else{
                        $mysqli->query("UPDATE news SET title = '$title', text = '$text', dayNew = '$dayNewCheck' WHERE id = '$id'");
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ../pages/news.php");
                        exit;
                    };
                };
            };
        }else{

            if(empty($_POST['dayNewCheck'])){

                $dayNewCheck=0;
                $mysqli->query("UPDATE news SET image_link = '$file', title = '$title', text = '$text' WHERE id = '$id'");
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /pages/news.php");
                exit;

            } else {
                $dayNewCheck = $_POST['dayNewCheck'];
                if($date == date('d.m.Y')){
                    $result = $mysqli->query("SELECT * FROM `news` WHERE date = '$date' and dayNew = '$dayNewCheck'");
                    if($result->num_rows == 1){
                        $_SESSION['editNew_no'] = true;
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ../pages/news.php");
                        exit;
                    }else{
                        $mysqli->query("UPDATE news SET image_link = '$file', title = '$title', text = '$text', dayNew = '$dayNewCheck' WHERE id = '$id'");
                        header("HTTP/1.1 301 Moved Permanently");
                        header("Location: ../pages/news.php");
                        exit;
                    };
                };
            };

        }

    $mysqli->close();
?>