<!DOCTYPE html>

<html>
	<head>
		<title>jquery html/css</title>
		<script src="jq/jq.js"></script>
		<script>
			$(document).ready(function(){
			
				$("#changecss").click(function(){
					
					
					
					$("p").animate({marginLeft:900});
					
				});
				
			});
		</script>
        
        
	</head>
	<body>
		
		<button id="changecss">change me</button>
        <p>hello world</p>
	
	</body>
</html>