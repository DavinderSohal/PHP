<!DOCTYPE html>
<html>
	<head>
		<title>CSS classes for website development</title>
		<style>
			p{
				border-top:16px solid red;
				border-bottom:16px solid green;
				border-left:16px solid yellow;
				border-right:16px solid orange;
				
				width:120px;
				height:120px;
				
				border-radius:300px;
				position:absolute;
				
				top:50%;
				left:50%;
				
			
			
				animation:spin 2s linear infinite;
			
			
			}
			
			@keyframes spin{
			
				0%{transform:rotate(0deg)}
				100%{transform:rotate(360deg)}
				
			}
		</style>
	</head>
	<body>
		<p></p>
		
	</body>
</html>

