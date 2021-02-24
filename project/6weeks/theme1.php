<!DOCTYPE html>

<html>
	<head>
		<title></title>
		<style>
			
			*{
			
			padding:0px;
			margin:auto;
				
			
			}
			.tc_header{
			
				width:100%;
				height:123px;
				background-color:#FFFFFF;
			
			}
			.tc_navigation{
			
				width:100%;
				height:37px;
				background-color:#0561A7;
			}
			.tc_slider{
				
				width:100%;
				height:406px;
				background-color:#0653AF;
		
			}
			.tc_header  #text_content p{
			
				position:absolute;
				left:22%;
				top:40px;
			
			}
			.tc_header  #contact_section p{
			
				position:absolute;
				left:78%;
				top:10px;
			
			}
			.tc_header  #contact_section img{
			
				position:absolute;
				left:78%;
				top:40px;
			
			}
			.tc_header  #logo img{
				position:absolute;
				left:40px;
				
			}
			.tc_navigation #nav ul li{
			
				display:inline;
				padding:5px;
				
				line-height:35px;
				
				margin-left:2%;
			}
			.tc_navigation #nav a{
			
			
				
    color: #f3f3f3;
    
    
    font-size: 14px;
    font-weight: bold;
    padding: 9px 36px;
    text-align: center;
    text-decoration: none;
			
				
			}
			.tc_navigation #nav a:hover{
			
				
				color:white;
				
				text-align:center;
				text-decoration:none;
				
				background-color:#393939;
				border-bottom:3px solid red;
				
				
			}
			
			
			.slider-holder
        {
            width: 800px;
            height: 400px;
            background-color: yellow;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
            text-align: center;
            overflow: hidden;
        }
       
        .image-holder
        {
            width: 2400px;
            background-color: red;
            height: 400px;
            clear: both;
            position: relative;
           
            -webkit-transition: left 2s;
            -moz-transition: left 2s;
            -o-transition: left 2s;
            transition: left 2s;
        }
       
        .slider-image
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
       
        #slider-image-1:target ~ .image-holder
        {
            left: 0px;
        }
       
        #slider-image-2:target ~ .image-holder
        {
            left: -800px;
        }
       
        #slider-image-3:target ~ .image-holder
        {
            left: -1600px;
        }
       
        .button-holder
        {
            position: relative;
            top: -20px;
        }
       
        .slider-change
        {
            display: inline-block;
            height: 10px;
            width: 10px;
            border-radius: 5px;
            background-color: brown;
        }
		</style>
	</head>
	<body>
		<!-- id and classes -->
		
		<div class="tc_header">
			
			<div id="logo">
				<img src="tcilchandigarh_logo.png" width="120" height="120" alt="logo" />
			</div>
			<div id="text_content">
				<p>Managed By : <strong>ICSIL</strong><br/>
Joint Venture of DSIIDC, An undertaking of Delhi Govt. and TCIL, A Govt. of India Enterprise<br/>
Under Ministry of Communications & Information Technology <p>
				
			</div>
			<div id="contact_section">
				<p><strong>Call us - +91-9876795015</strong></p>
				<img src="tcilchandigarh_ICS_logo.png" width="150" height="70" alt="logo" />
			</div>
		
		</div>
		
		
		<div class="tc_navigation">
		
			<div id="nav">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Services</a></li>
					<li><a href="">Gallery</a></li>
					<li><a href="">about us</a></li>
					<li><a href="">Query</a></li>
					<li><a href="">contact</a></li>
					<li><a href="">blog</a></li>
				</ul>
				
			</div>
		</div>
		
		
		
		<div class="tc_slider">
			<div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-holder">
            <img src="1.jpg" class="slider-image" />
            <img src="2.jpg" class="slider-image" />
            <img src="3.jpg" class="slider-image" />
        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div>
		
		</div>
		<div class="tc_news"></div>
		<div class="tc_nav_links"></div>
		<div class="tc_footer"></div>
		
		
	
	</body>
</html>