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
<div class="content-wrapper">
    <section class="content-header">
            <ol class="breadcrumb">
             </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table Of Volunteer-events</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>sno</th>
                  <th>Event Name</th>
                  <th>Event description</th>
                  <th>volunteer</th>
              </tr>
                </thead>
                <tfoot>
                <tr>
                  <tr>
                  <th>sno</th>
                  <th>Event Name</th>
                  <th>Event description</th>
                  <th>volunteer</th>
                </tr>
                </tfoot>
                <tbody>
                <?php
                  $query="SELECT * FROM `volunteer`";
                  $exe_query=mysqli_query($conn,$query);
                  $sno = 1;
                  while ($data=mysqli_fetch_assoc($exe_query)) { 
                  $query1="SELECT * FROM `event` where id='$data[eventid]'";
                  $exe_query1=mysqli_query($conn,$query1);
                  
                  $event=mysqli_fetch_assoc($exe_query1); 
                  $query2="SELECT * FROM `login` where id='$data[volunteer]'";
                  $exe_query2=mysqli_query($conn,$query2);
                  
                  $volunteer=mysqli_fetch_assoc($exe_query2);   
                  ?>
                <tr>
                <td><?php echo $sno; ?></td>
                  <td><?php echo $event['eventname'] ?></td>
                  <td><?php echo $event['description'] ?></td>
                  <td><?php echo $volunteer['username'] ?></td>
                   
                </tr>
                <?php
                  $sno++;
                    }
    
                    ?>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
include"include/footer.php";
  ?>