<?php
include"include/header.php";
include"include/sidebar1.php";
include"include/config.php";
if(isset($_GET['msg'])&&($_GET['msg']==100)){
  echo "<script>alert('data saved successfully')</script>";
}
elseif(isset($_GET['msg'])&&($_GET['msg']==200)){
  echo "<script>alert('joined')</script>";
}

?><div class="content-wrapper">
    <section class="content-header">
            <ol class="breadcrumb">
             </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table Of Events</h3>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>sno</th>
                  <th>Event Name</th>
                  <!-- <th>Place</th>
                  <th>Date</th>
                   --><th>Description</th>
                  <th>Image</th>
                  <th>Join</th>
            
                  
                  
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>sno</th>
                  <th>Event Name</th>
                  <!-- <th>Place</th>
                  <th>Date</th>
                   --><th>Description</th>
                  <th>Image</th>
                  <th>Join</th>
            
                  
                      </tr>
                </tfoot>
                <tbody>
                <?php
                  $query="SELECT * FROM `event` where id not in (select eventid from volunteer where `volunteer`='$_SESSION[vid]')";
                  $exe_query=mysqli_query($conn,$query);
                  $sno = 1;
                  while ($data=mysqli_fetch_assoc($exe_query)) {    
                  ?>
                <tr>
                <td><?php echo $sno; ?></td>
                  <td><?php echo $data['eventname'] ?></td>
                  <!-- <td><?php //echo $data['place'] ?></td>
                  <td><?php //echo $data['date'] ?></td>
                   --><td><?php echo $data['description'] ?></td>
                  <td><img src="../admin/<?php echo $data['path'] ?>" width="40%"></td>
                  <td><a class="btn btn-primary" href="joinevent.php?id=<?php echo $data['id'] ?>">Join</a></td> 
                  
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