<?php
include_once 'header.php';?>

<form action="includes/upload_images.inc.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="file" class="form-control" name="file">
  </div>
  <div class="mb-3">
    <button class="btn btn-primary" name="submit" type="submit">Upload</button>
  </div>
<?php
    if(isset($_GET['uploadsuccess'])){
      echo '<p class="text-success">You have succesfuly uploaded the file!</p>';
    }elseif(isset($_GET['nofilechosen'])){
      echo '<p class="text-danger">Please choose a file!</p>';
    }elseif(isset($_GET['uploaderror'])){
      echo '<p class="text-danger">There was an error with your file!</p>';
    }elseif(isset($_GET['uploadtypenotaccepted'])){
      echo '<p class="text-danger">This type of file is not accepted!</p>';
    }elseif(isset($_GET['uploadtoolarge'])){
      echo '<p class="text-danger">This file is too large!</p>';
    }elseif(isset($_GET['useuploadbutton'])){
      echo '<p class="text-danger">Please use the upload button!</p>';
    }?>
</form>
<form action="includes/delete_images.inc.php" method="POST">
  <div class="mb-3">
    <input type="text" class="form-control" name="deletefile" placeholder="Choose files, separated by comma">
  </div>
  <div class="mb-3">
    <button class="btn btn-primary" name="delete" type="submit">Delete</button>
  </div>
<?php
  if(isset($_GET['deleteerror'])){
      echo '<p class="text-danger">Delete error!</p>';
  }elseif(isset($_GET['deletesuccess'])){
      echo '<p class="text-success">You have successfully deleted the file!</p>';
  }elseif(isset($_GET['filedoesnotexist'])){ 
    echo '<p class="text-danger">The file does not exist!</p>';
  }elseif(isset($_GET['usedeletebutton'])){ 
    echo '<p class="text-danger">Please use the delete button!</p>';
  }
?>
</form>

<?php
include_once 'footer.php';