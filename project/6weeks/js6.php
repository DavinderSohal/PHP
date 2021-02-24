
<script>
	function myf(){
		
		
		if(document.getElementById("male").checked){
		
			var male=document.getElementById("male").value;
			
			alert("you have selected male");
		
		}
		
		else{
		
			alert("you have selected female");
		}
	}
	
	
	function getgen(){
		
		var cou=document.getElementsByName("gen").length;
		
		alert("total "+cou+"genders found");
	
	}
	
function getcount(){


	//var count=document.getElementsByTagName("p");
	var totalpara=document.getElementsByTagName("p").length;
	alert("Total paragraps are:"+totalpara);
}	
	
</script>
<form onsubmit="getgen()">

male<input type="radio" name="gen" value="male" id="male" />
female<input type="radio" name="gen" value="female" id="female"/>
<button>get result</button>


</form>


<p>Hello</p>
<p>Hello</p>
<p>Hello</p>
<p>Hello</p>
<p>Hello</p>
<p>Hello</p>

<button onclick="getcount()">count paragraphs</button>
