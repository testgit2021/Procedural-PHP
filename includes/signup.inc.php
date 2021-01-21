<?php
include_once 'dbh.inc.php';
if(isset($_POST['submit'])){
    require_once 'functions.inc.php';
    $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
    $userName = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $checkPwd = mysqli_real_escape_string($conn, $_POST['pwdcheck']);
    if(emptyInput($firstName, $lastName, $userName, $email, $pwd) !== false){
        header("Location: ../signup.php?signup=empty");
        exit(); 
    }
    elseif(userExists($conn, $userName)){
        header("Location: ../signup.php?signup=userexists");
        exit();
    }
    elseif(passwordsDontMatch($pwd, $checkPwd)){
        header("Location: ../signup.php?signup=passswordsdontmatch");
        exit();
    }
    else{ 
        $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (FirstName, LastName, UserName, Email, UserPwd) VALUES ('$firstName', '$lastName', '$userName', '$email', '$pwdHash');";
        mysqli_query($conn, $sql);
        header("Location: ../login.php?signup=succes");
        exit();
    }
}else{
    echo "Use Signup button!";
}