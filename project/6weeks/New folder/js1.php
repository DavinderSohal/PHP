<script>
if(document.getElementById('p5').clicked == true){

if(name=="" || cn=="" || em=="" || pss==""){

alert("all fields are mandatory");

}
else if(cn.length>10 || cn.length<10){

alert("phn number must be 10 digits");
}
else{

alert("your registration form is submitted successfully");

}

}

</script>

<form onsubmit="val()">
<p><input type="text" id="p1" placeholder="enter name"/> </p>
<p><input type="text" id="p2" placeholder="enter contact"/> </p>
<p><input type="email" id="p3" placeholder="enter email"/> </p>
<p><input type="password" id="p4" placeholder="enter password"/> </p>
<p><button id="p5">register</button></p>

</form>