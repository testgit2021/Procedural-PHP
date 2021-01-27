<?php
function emptyInput($firstName, $lastName, $userName, $email, $pwd){
    $result;
    if(empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function userExists($conn, $userName){
    $sql = "SELECT * FROM users WHERE UserName='$userName'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    echo $count;
    if($count > 0){
        $userExists = true;
    } 
    else{
        $userExists = false;
    }
    return $userExists;
}

function passwordsDontMatch($pwd, $checkPwd){
    if (!password_verify($pwd, $checkPwd)){
        $result = true;
    }
    else{
        $result = false;
    }return $result;
}

