<?php
include_once 'header.php';?>


<form action="includes/upload_images.inc.php" method="POST" class="was-validated" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="file" class="form-control" name="file">
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" name="submit" type="submit" >Upload</button>
  </div>
<?php
    if(isset($_GET['uploadsuccess'])){
    echo '<p class="text-success">You have succesfuly uploaded the file!</p>';
}?>
</form>

<?php
include_once 'footer.php';