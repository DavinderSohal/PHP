<script>
function val(){

	var name=document.getElementById("name").value;
	var email=document.getElementById("em").value;
	var contact=document.getElementById("cont").value;
	var password=document.getElementById("pass").value;
	
	
	if(name=="" || email=="" || contact=="" || password==""){
	
		alert("f cannot be empty");
	}else if(password.length<8){
		
		alert("password must be mini. 8 charactors or above");	
	}
	else if(contact.length>10 || contact.length<10){
	
	alert("contact number must be 10 diguts");
		
	}
	else{
	
		alert("contatulations you have succesfully submited your form......");
	
	}
	
}

</script>

<form onsubmit="val()">
	<p><input type="text" id="name" placeholder="enter name" /></p>
	<p><input type="email" id="em" placeholder="enter email" /></p>
	<p><input type="password" id="pass" placeholder="enter password" /></p>
	<p><input type="text" id="cont" placeholder="enter contact" /></p>
	<p><button>submit</button></p>
</form>