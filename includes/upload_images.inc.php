<?php

session_start();
include_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(isset($_POST['submit'])){
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    if($fileName !== ""){
        if($fileError == 0){
            if($fileSize < 70000){
                $checkExt = explode('.', $fileName);
                $fileExtension = strtolower(end($checkExt)); 
                $allowed = array('jpg', 'png', 'svg');
                if(in_array($fileExtension, $allowed)){
                    $fileNewName = uniqid('', true).'.'.$fileExtension;
                    move_uploaded_file($fileTmpName, '../images/'.$fileNewName);
                    header('Location: ../myaccount.php?uploadsuccess');
                    exit();
                }else {
                    header('Location: ../myaccount.php?uploadtypenotaccepted');
                    exit();
                }
            }else {
                header('Location: ../myaccount.php?uploadtoolarge');
                    exit();
            }
        }else{
            header('Location: ../myaccount.php?uploaderror');
            exit();
        }
    }else {
        header('Location: ../myaccount.php?nofilechosen');
        exit();
    }
}else{ 
    header("Location: ../myaccount.php?useuploadbutton");
}