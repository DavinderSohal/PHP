<?php
include"include/header.php";
include"include/sidebar1.php";
include"include/config.php";
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
              <h3 class="box-title">Data Table of Testimonials</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image Path</th>
                 </tr>
                </thead>
                <tfoot>
                <tr>
                <th>Sr.No.</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image Path</th>
                  
                      </tr>
                </tfoot>
                <tbody>
                <?php
                  $display_query="SELECT * FROM `testimonial`";
                  $exe_query=mysqli_query($conn,$display_query);
                  $Srno = 1;
                  while ($data=mysqli_fetch_array($exe_query)) {    
                  ?>
                <tr>
                <td><?php echo $Srno ?></td>
                  <td><?php echo $data['name'] ?></td>
                 <td><?php echo $data['description'] ?></td>
                   <td><img src="<?php echo $data['path'] ?>" width="40%"></td>
                </tr>
               </tbody>
                <?php
                  $Srno++;
                    }
            ?>
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