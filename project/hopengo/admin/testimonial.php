<?php
include'include/header.php';
include'include/sidebar1.php';
include'include/config.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1 style="text-align:center">
        Insert Testimonial Form
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-2">
        </div>


        <div class="col-md-8">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Details of Testimonial Member</h3>
            </div>
            <div class="box-body">
              <form action="" role="form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <input type="text" class="form-control" name="description" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image Of Testimonial Member</label>
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
  $description=$_POST['description'];
  $file=$_FILES['file'];
  $tmp_name=$file['tmp_name'];
  $dest="uploads/testimonial/".time()."-".$file['name'];
  if (($file['type']=='image/png') || ($file['type']=='image/jpeg')) {
    if (($file['size']/1024)<=200) {
      move_uploaded_file($tmp_name, $dest);
     $query="INSERT INTO `testimonial`(`name`, `description`, `path`) VALUES ('$name','$description','$dest')";
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