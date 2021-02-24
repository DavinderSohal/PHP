<?php 

  include("connection/connect.php");
?>

<?php 
			   if(isset($_POST['reg'])){
			      
			     extract($_POST);
				 
				// $name=$_POST['sname'];
			    
				$query="insert into registeration(name,email,contact,collegename) values('$sname','$semail','$cont','$cname')";
				
				$run=mysqli_query($conn,$query);
				 
				 if($run){
				 
					echo "register sucess";
				 
					}
					else{
					
					echo "not success".mysqli_error($conn);
					}
				
			    
			   
			   }
			    
			?>