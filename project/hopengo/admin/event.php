<?php 
include'include/header.php';
include'include/sidebar1.php';
include'include/config.php';
 ?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align:center">
        Insert Event Form
        
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
              <h3 class="box-title">Insert Event</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="Post" role="form" enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group" ">
                  <label>Name of Event</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter ...">
                </div>

             
                <div class="form-group">
                  <label>Event Description</label>
                  <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">Upload Image Of Event.</label>
                  <input type="file" name="file" id="exampleInputFile">

                  
                </div>

                <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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


   if (isset($_POST['submit'])) {

  $name=$_POST['name'];
  $description=$_POST['description'];
  $file=$_FILES['file'];
  $tmp_name=$file['tmp_name'];
  $dest="uploads/event/".time()."-".$file['name'];

  if (($file['type']=='image/png') || ($file['type']=='image/jpeg')) {
    if (($file['size']/1024)<=200) {
      
      move_uploaded_file($tmp_name, $dest);
     $query="INSERT INTO `event`(`eventname`,`description`, `path`) VALUES ('$name','$description','$dest')";
       mysqli_query($conn,$query);
        }
        else{
      echo "<script>alert('very big')</script>";
    }
  }
  else{
    echo "<script>alert('not an image')</script>";
  }
}
  ?>