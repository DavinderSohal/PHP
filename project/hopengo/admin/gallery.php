<?php
include'include/header.php';
include'include/sidebar1.php';
include'include/config.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1 style="text-align:center">
        Insert Gallary Form
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Gallary</h3>
            </div>
            <div class="box-body">
              <form action="" method="Post" enctype="multipart/form-data" role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Image Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter ...">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image for Gallary</label>
                  <input type="file" name="file" id="exampleInputFile">
                </div>

                <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>

                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php
  include'include/footer.php';
if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $file=$_FILES['file'];
  $tmp_name=$file['tmp_name'];
  $dest="uploads/gallary/".time()."-".$file['name'];

  if (($file['type']=='image/png') || ($file['type']=='image/jpeg')) {
    if (($file['size']/1024)<=200) {
      move_uploaded_file($tmp_name, $dest);
      $query="INSERT INTO `gallery`(`imgname`, `path`) VALUES ('$name','$dest')";
       mysqli_query($conn,$query);
        }else{
      echo "<script>alert('very big')</script>";
    }
  }
  else{
    echo "<script>alert('not an image')</script>";
  }
}
?>