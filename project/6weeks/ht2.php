<!DOCTYPE html>

<html>
	<head>
		<title>javascript</title>
		<script>
			
			function sum(){
			//function to perform sum of two numbers
			
			/*
			
			
			*/
				var a=document.getElementById("a1").value; 
				var b=document.getElementById("a2").value;
				
				var c=parseInt(a);
				var d=parseInt(b);
				
				alert(c+d);
				
				
				
				
			}
			
			function show(){
			
				alert("TCIL 6 weeks training")
			}
		</script>
	
	</head>
	<body>
		
		<form onsubmit="sum()">
			<p><input type="text" id="a1"/></p>
			<p><input type="text" id="a2"/></p>
			<p><button>click to sum</button></p>
		</form>
		
		
		
		<button onclick="show()">click me </button>
	
		<p ondblclick="show()">click me</p>
	</body>
	
</html>