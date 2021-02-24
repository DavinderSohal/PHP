		<script src="jq/jq.js"></script>
		<script>
			
			$(document).ready(function(){
				
				$("#b1").dblclick(function(){
				
					$("#d1").hide(2000,function(){
						
						
							alert("action perfoemed");
						
						});
					
					//call back and chaining
					
				});
				
				
				
			});
			
			
			
			
				
		</script>
		
		<div id="d1" style="width:300px; height:300px; background-color:red;">
			
		</div>
		
		<button id="b1">click</button>
		
		
		<div id="d2" style="width:300px; height:300px; background-color:blue;">
			
		</div>
		<button id="b2">click</button>