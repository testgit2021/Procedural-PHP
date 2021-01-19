<?php
include_once 'header.php';
include 'includes/dbh.inc.php';
?>
<div class="container-lg pt-2">
  <form action="includes/signup.inc.php" method="POST" class="row g-3">
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" name="firstname" class="form-control" id="validationDefault01" placeholder="First Name" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" name="lastname" class="form-control" id="validationDefault02" placeholder="Last Name" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefaultUsername" class="form-label">Username</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" name="uid" class="form-control" id="validationDefaultUsername"  placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationDefault03" class="form-label">E-mail</label>
      <input type="email" name="email" class="form-control" id="validationDefault03" placeholder="E-mail" required>
    </div>
    <div class="col-md-3">
      <label for="validationDefault04" class="form-label">Password</label>
      <input type="password" name="pwd" class="form-control" id="validationDefault04" placeholder="Password" required>
    </div>
    <div class="col-md-3">
      <label for="validationDefault05" class="form-label">Pasword check</label>
      <input type="password" name="pwdcheck" placeholder="Re-type password" class="form-control" id="validationDefault05" required>
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
      <button class="btn btn-primary" name='submit' type="submit">Submit form</button>
    </div>
  </form>
</div>
<?php
include_once 'footer.php';
?>