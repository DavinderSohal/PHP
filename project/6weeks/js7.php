<!DOCTYPE html>
<html>
	<head>
		<title>JS</title>
	</head>
	<body>
	
		<script>
			function sum(){
			
				var a=document.getElementById("a1").value;
				var b=document.getElementById("a2").value;
				
				var c=parseInt(a);
				var d=parseInt(b);
				
				
				
				alert("sum:"+(c+d));
			
			
			}
			
			
			function result(){
			
				if(document.getElementById("male").checked){
				
					var value=document.getElementById("male").value;
					
					alert("you have selected:  "+value);
				
				}
				else if(document.getElementById("female").checked){
				
					var value=document.getElementById("female").value;
					
					alert("you have selected:  "+value);
				
				}
				else{
				
					alert("please select one gender");
				}
			
			}
		
		</script>
		<form onsubmit="sum()">
			
			<h3>Program to calculate sum of two numbers</h3>
			
			
			<p><input type="text" id="a1"  placeholder="enter a"/></p>
			<p><input type="text" id="a2" placeholder="enter b"/></p>
			<p><button>click to sum</button></p>
			
		</form>
	

		male<input type="radio" name="gender" id="male" value="male" />
		female<input type="radio" name="gender" id="female" value="female" />
		<button onclick="result()">get result</button>
		<button>get count</button>
		
	</body>
</html>