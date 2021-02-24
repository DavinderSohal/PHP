    <?php    
    $emp = array  
      (  
      array(1,"sonoo",400000),  
      array(2,"john",500000),  
      array(3,"rahul",300000)  
      );  
      
    for ($row = 0; $row < 3; $row++) {  
      for ($col = 0; $col < 3; $col++) {  
        echo $emp[$row][$col]."  ";  
      }  
      echo "<br/>";  
    }  
	
	
	    $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");  
		
		echo $salary['Sonoo'];
		
    ?>    