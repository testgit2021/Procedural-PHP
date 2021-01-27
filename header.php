<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title>Project 1</title>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
  <div class="container-lg">
  <?php
  if(isset($_SESSION["user"])){
    $user = $_SESSION["user"];
    $file = 'images/logo_'.$user.'.jpg';
    if(file_exists($file)){
      echo '<a class="navbar-brand" href="index.php"><img src="images/logo_' .$user.'.jpg" width=32 height=32></a>';
    }
    else{
      echo '<a class="navbar-brand" href="index.php"><img src="images/perm_identity-24px.svg" alt="site-logo" style=background:#fff;></a>';
    }}else{
      echo '<a class="navbar-brand" href="index.php"><img src="images/perm_identity-24px.svg" alt="site-logo" style=background:#fff;></a>';
    }?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our store
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <?php
            if(isset($_SESSION["user"])){
                echo '<li class="nav-item">';
                  echo '<a class="nav-link" href="logout.php">Log Out</a>';
                echo '</li>';
            }
            else{
              echo '<li class="nav-item">';
                echo '<a class="nav-link" href="login.php">Login</a>';
              echo '</li>';
            }?>
        <?php
            if(isset($_SESSION["user"])){
                echo '<li class="nav-item">';
                  echo '<a class="nav-link" href="myaccount.php">My account</a>';
                echo '</li>';
            }
            else{
              echo '<li class="nav-item">';
                echo '<a class="nav-link" aria-current="page" href="signup.php">Signup</a>';
            echo '</li>';
            }?> 
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
        </li>       
      </ul>
      <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        
      </form><?php 
            if(isset($_SESSION["user"])){
              echo "<span class='text-control text-danger p-1'>Wellcome, ". $_SESSION["user"] ."!</span>";
            }elseif(isset($_GET["logout"])){
              if($_GET['logout'] == 'success'){
                echo "<span class='text-control text-success p-1'>Logged out!</span>";
            }}
    ?>
    </div>
  </div>
</nav>
<div class="container-lg mt-2 pb-5">