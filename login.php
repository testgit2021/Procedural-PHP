<?php
include 'header.php';
include 'includes/dbh.inc.php';
?>

    <form action="includes/login.inc.php" method="POST" class="row g-3">
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">User name</label>
      <input type="text" name="uid" class="form-control" id="validationDefault01" placeholder="User Name">
    </div>
    <div class="col-md-3">
      <label for="validationDefault04" class="form-label">Password</label>
      <input type="password" name="pwd" class="form-control" id="validationDefault04" placeholder="Password">
    </div>
    <div class="col-12">
      <button class="btn btn-primary" name='submit' type="submit">Log In</button>
    </div>
    <?php
    if(isset($_GET['login'])){
        if($_GET['login'] == 'empty'){
            echo "<p class='text-control text-danger'>Fill in all fields</p>";
        }
        elseif($_GET['login'] == 'passincorrect'){
            echo "<p class='text-control text-danger'>Password is incorrect!</p>";
        }
    
    }?>
    </form>

<?php
include_once 'footer.php';