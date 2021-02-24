<?php
include"include/header.php";
include"include/sidebar1.php";
include"include/config.php";
if(isset($_GET['msg'])&&($_GET['msg']==100)){
  echo "<script>alert('data saved successfully')</script>";
}
elseif(isset($_GET['msg'])&&($_GET['msg']==200)){
  echo "<script>alert('data deleted successfully')</script>";
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <!--  <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

        <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table of events</h3>
            </div>
             <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>sno</th>
                  <th>Event Name</th>
                   <th>Description</th>
                  <th>Image</th>
                  <th>update</th>
                  <th>delete</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>sno</th>
                  <th>Event Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>update</th>
                  <th>delete</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                  $query="SELECT * FROM `event`";
                  $exe_query=mysqli_query($conn,$query);
                  $sno = 1;
                  while ($data=mysqli_fetch_assoc($exe_query)) {    
                  ?>
                <tr>
                <td><?php echo $sno; ?></td>
                  <td><?php echo $data['eventname'] ?></td>
                   --><td><?php echo $data['description'] ?></td>
                   <td><img src="<?php echo $data['path'] ?>" width="40%"></td>
                  <td><a href="upevent.php?id=<?php echo $data['id'] ?>">Update</a></td> 
                  <td><a href="delevent.php?id=<?php echo $data['id'] ?>">Delete</a></td>
                </tr>
                <?php
                  $sno++;
                    }
    
                    ?>
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php
include"include/footer.php";
  ?>