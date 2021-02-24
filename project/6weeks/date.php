<script>
	var t=new Date();
	
	document.write(t.getDate());
	document.write(t.getYear());
	document.write(t.getDay()+1);

</script>

    <script type="text/javascript" >  
    function showcommentform() {  
    var data="Name:<input type='text' name='name'><br>Comment:<br><textarea rows='5' cols='80'></textarea>  
    <br><input type='submit' value='Post Comment'>";  
    
	
	
	document.getElementById('mylocation').innerHTML=data;  
    }  
    </script>  
    <form name="myForm">  
    <input type="button" value="comment" onclick="showcommentform()">  
    <div id="mylocation"></div>  
    </form>  
	
	
	
	    <script type="text/javascript" >  
    function validate() {  
    var msg;  
    if(document.getElementById("userPass").length>5){  
    msg="good";  
    }  
    else{  
    msg="poor";  
    }  
    document.getElementById('mylocation').innerText=msg;  
     }  
      
    </script>  
    <form name="myForm">  
    <input type="password" value="" name="userPass" onkeyup="validate()">  
    Strength:<span id="mylocation">no strength</span>  
    </form>  