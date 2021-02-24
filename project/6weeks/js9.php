DOM:
BOM:

<script>
function aler(){

alert("hello");


}
	
function sum(){
	
	var a=document.getElementById("a1").value;
	
	var b=document.getElementById("a2").value;
	
	
	alert(a/b);

}
</script>

<form onsubmit="sum()">
	<p><input type="text" id="a1" /></p>
	<p><input type="text" id="a2" /></p>
	<button>click to sum</button>
</form>


DOM:
BOM: