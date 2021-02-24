<?php
include"include/header.php";
include"include/sidebar1.php";
include"include/config.php";
$id=$_GET['id'];
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align:center">
        Update Slider Form
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        
        <!--/.col (left) -->
        <!-- right column -->

        <div class="col-md-2">
        </div>


        <div class="col-md-8">
          <!-- Horizontal Form -->
                    <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Update Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="Post" enctype="multipart/form-data" role="form">
              <?php

              $get="SELECT * FROM `slider` WHERE id='$id'";
               $exe_get=mysqli_query($conn,$get);
               $data=mysqli_fetch_array($exe_get);
                    ?>
                <!-- text input -->
                <div class="form-group">
                  <label>Image Name</label>
                  <input type="text" name="name" value="<?php echo $data['name'];?>" class="form-control" placeholder="Enter ...">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image for Gallary</label>
                  <input type="file" name="file" value="<?php echo $data['path']; ?>"  id="exampleInputFile">
                </div>

                <div class="box-footer">
                <button type="update" name="update" class="btn btn-primary">Update</button>
              </div>

                
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include'include/footer.php';

if (isset($_POST['update'])) {
  $name=$_POST['name'];
  $file=$_FILES['file'];
  $tmp_name=$file['tmp_name'];
  $dest="uploads/slider/".time()."-".$file['name'];

  if (($file['type']=='image/png') || ($file['type']=='image/jpeg')) {
    if (($file['size']/1024)<=200) {
      move_uploaded_file($tmp_name, $dest);
  $query= "UPDATE `slider` SET `name`='$name',`path`='$dest' WHERE `id`='$id'";
header("location:displayslider.php?msg=100");
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