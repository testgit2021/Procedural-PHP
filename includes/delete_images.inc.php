<?php
session_start();
include_once 'dbh.inc.php';
$pathImages = '../images';
$filesChosen = mysqli_real_escape_string($conn, $_POST['deletefile']);
$filesCommaSeparated = str_replace(" ", "", $filesChosen);
$allFiles = explode(',', $filesCommaSeparated);
$numFiles = count($allFiles);
if(isset($filesChosen)){
    $deleteMessage = array();
    for ($i=0; $i < $numFiles; $i++) { 
        $path = $pathImages. '/' .$allFiles[$i];
        if(file_exists($path)){
            if(!unlink($path)){
                array_push($deleteMessage, "<p class='text-danger'>The file " .$allFiles[$i]. " cannot be deleted!'</p>'");
            }else{
                unlink($path);
                array_push($deleteMessage, "<p class='text-success'>The file " .$allFiles[$i]. " was succesfuly deleted!</p>");  
            }
        }else{
            array_push($deleteMessage, "<p class='text-danger'>The file " .$allFiles[$i]. " does not exist!</p>");
        }
        
    }$_SESSION['deletemesage'] = $deleteMessage;
    header("Location: ../myaccount.php");
    exit();
}else{
    header("Location: ../myaccount.php?usedeletebutton");
    exit();
}