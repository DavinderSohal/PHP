<script>


function count(){
	
	var value=document.getElementsByName("p1").value;
	
	alert("total "+value +"pargraphs found...")

}

function pri(){

window.print();


}
</script>



<p name="p1" value="amitabh bachan">p1</p>
<p name="p1">p1</p>
<p name="p1">p1</p>
<p>p1</p>
<button onclick="count()">count</button>

<button onclick="pri()">print </button>