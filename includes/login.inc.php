<?php
session_start();
include_once 'dbh.inc.php';
require_once 'functions.inc.php';
if(isset($_POST['submit'])){
    
    $userName = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    if(empty($pwd) || empty($userName)){
        header("Location: ../login.php?login=empty");
        exit(); 
    }
    elseif(userExists($conn, $userName)){
        $sql = "SELECT * FROM users WHERE UserName='$userName';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if(passwordsDontMatch($pwd, $row['UserPwd'])){
                header("Location: ../login.php?login=passincorrect");
                exit();
        }else{
            $_SESSION["id"] = $row["Id"];
            $_SESSION["firstname"] = $row["FirstName"];
            $_SESSION["lastname"] = $row["LastName"];
            $_SESSION["user"] = $row["UserName"];
            header("Location: ../index.php?login=success");
            exit();
        }
        }
    else{
        header("Location: ../signup.php?login=userdoesnotexist");
        exit(); 
    }
}