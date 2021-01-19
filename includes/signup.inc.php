<?php
include_once 'dbh.inc.php';

$firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
$userName = mysqli_real_escape_string($conn, $_POST['uid']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$checkPwd = mysqli_real_escape_string($conn, $_POST['pwdcheck']);

    if (paswordsMatch($pwd, $checkPwd)){
        header("Location: ../signup.php?signup=succes");
        exit();
    }
    else{ 
        header("Location: ../signup.php?signup=passwordsdontmatch");
        exit();
        }
    else{
        $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (FirstName, LastName, UserName, Email, UserPwd) VALUES ('$firstName', '$lastName', '$userName', '$email', '$pwdHashed');";
        $result = mysqli_query($conn, $sql);
    }


