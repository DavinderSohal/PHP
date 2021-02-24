<?php
include"include/header.php";
include"include/sidebar1.php";
include"include/config.php";
$id=$_GET['id'];
?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1 style="text-align:center">
        Update Event Form
      </h1>
      </section>
    <section class="content">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Update Event</h3>
            </div>
            <div class="box-body">
              <form action="" method="Post" enctype="multipart/form-data" role="form">
              <?php
$get="SELECT * FROM `event` WHERE id='$id'";
$exe_get=mysqli_query($conn,$get);
$data=mysqli_fetch_array($exe_get);
?>
<div class="form-group">
                  <label>Name of Event</label>
                  <input type="text" name="name" value="<?php echo $data['eventname'];?>" class="form-control" placeholder="Enter ...">
                </div>
                
                <div class="form-group">
                  <label>Event Description</label>
                  <input type="text" name="description" value="<?php echo $data['description'];?>" class="form-control" placeholder="Enter ...">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image for Event</label>
                  <input type="file" name="file" value="<?php echo $data['path']; ?>"  id="exampleInputFile">
                </div>
                  <div class="box-footer">
                <button type="update" name="update" class="btn btn-primary">Update</button>
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

if (isset($_POST['update'])) {
  $name=$_POST['eventname'];
  
  $description=$_POST['description'];
  $file=$_FILES['file'];
  $tmp_name=$file['tmp_name'];
  $dest="uploads/event/".time()."-".$file['name'];

  if (($file['type']=='image/png') || ($file['type']=='image/jpeg')) {
    if (($file['size']/1024)<=200) {
      move_uploaded_file($tmp_name, $dest);
      $query="UPDATE `event` SET `eventname`='$name',description`='$description',`path`='$dest'WHERE `id`='$id'";
header("location:displayevent.php?msg=100");
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