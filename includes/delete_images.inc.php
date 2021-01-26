<?php
session_start();
$path = "../images/image1.jpg";

if(isset($_POST['delete'])){
    if(file_exists($path)){
        if(!unlink($path)){
            header("Location: ../myaccount.php?deleteerror");
        }else{
            header("Location: ../myaccount.php?deletesuccess");
        }
    }else{
        header("Location: ../myaccount.php?filedoesnotexist");
    }
}else{
    header("Location: ../myaccount.php?usedeletebutton");
}