<?php
include 'header.php';
?>
  <form action="includes/signup.inc.php" method="POST" class="row g-3">
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" name="firstname" class="form-control" id="validationDefault01" placeholder="First Name" value="<?php if(isset($_POST['firstname'])){echo '$_POST["firstname"]';}?>">
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" name="lastname" class="form-control" id="validationDefault02" placeholder="Last Name">
    </div>
    <div class="col-md-4">
      <label for="validationDefaultUsername" class="form-label">Username</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" name="uid" class="form-control" id="validationDefaultUsername"  placeholder="Username" aria-describedby="inputGroupPrepend2">
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationDefault03" class="form-label">E-mail</label>
      <input type="email" name="email" class="form-control" id="validationDefault03" placeholder="E-mail">
    </div>
    <div class="col-md-3">
      <label for="validationDefault04" class="form-label">Password</label>
      <input type="password" name="pwd" class="form-control" id="validationDefault04" placeholder="Password">
    </div>
    <div class="col-md-3">
      <label for="validationDefault05" class="form-label">Pasword check</label>
      <input type="password" name="pwdcheck" placeholder="Re-type password" class="form-control" id="validationDefault05">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" name='submit' type="submit">Sign Up</button>
    </div>
    <?php 
      if(isset($_GET['signup'])){
        if($_GET['signup'] == 'userexists'){
          echo "<p class='text-control text-danger'>User already taken!</p>";}
        elseif($_GET['signup'] == 'empty'){
          echo "<p class='text-control text-danger'>Please fill in all fields!</p>";}
        elseif($_GET['signup'] == 'passswordsdontmatch'){
          echo "<p class='text-control text-danger'>Passwords don't match!</p>";}
        }
      if(isset($_GET['login'])){
        if ($_GET['login'] == 'userdoesnotexist'){
          echo "<p class='text-control text-danger'>User name does not exist! Sign up to be able to log in!</p>";}
         } ?>
  </form>
<?php
include_once 'footer.php';
?>