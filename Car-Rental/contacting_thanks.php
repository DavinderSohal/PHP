<!DOCTYPE HTML>
<html>
<head>
<title>Car-Rental</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="mainbox" style="height:750px;">
<div class="header">
<div class="headercar"><img src="img/headercar.png"style="height:100px;"/></div>
<div class="linksheader">
<div class="link" align="center"><a href="index.php">HOME</a></div>
<div class="link" align="center"><a href="about.php">ABOUT US</a></div>
<div class="link" align="center"><a href="book_car.php">BOOK CAR</a></div>
<div class="link" align="center"><a href="car_listing.php">CARS LIST</a></div>
<div class="link" align="center"><a href="user_login.php">USER LOGIN</a></div>
<div class="link" style="width:15%; height:35px;" align="center"><a href="admin_login.php"> ADMIN LOGIN</a></div>
<div style="width:15%; height:35px; float:left; padding-top:14px;border:1px solid #5E0000;" align="center"><a href="contact_us.php">CONTACT US</a></div>
<div style="width:18.3%; height:35px; float:left; padding-top:14px;border:1px solid #5E0000;">
<div style="width:30%; float:left;"><input type="text" name="search" placeholder="Search"/></div>
<div style="width:30%; height:10px; padding-top:1px;  float:right;"><img src="img/search.jpg" style="width:50%; height:19px; float:left;"/></div></div>
</div>
</div>
<div class="bar"></div>
<div class="cars" style="height:450px;">
<div class="heading">CONTACT US</div><hr/>
<div style="width:100%;height:500px;">
<p>Thank you for cotacting us.We will get back to you soon !!!!</p>
</div>
</div>
<div class="advertise" style="height:450px;">
<div class="heading">WHERE TO FIND US</div><hr/>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:240px;width:320px;'><div id='gmap_canvas' style='height:240px;width:320px;'></div><div><small><a href="http://embedgooglemaps.com">Click here to generate your map!</a></small></div><div><small><a href="https://buywebsitetrafficreviews.org/post-a-review/">How did your web traffic go? Leave us a review!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(30.888797,75.839922),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(30.888797,75.839922)});infowindow = new google.maps.InfoWindow({content:'<strong>network hub </strong><br>2nd floor pink plaza brands road gulati chowk ludhiana punjab india<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBm4LZUX0U54db0TmIsSlNlJh4gzlExp64&callback=initMap">
    </script>

<div calss="heading" style="color:#666666; font-size:20px;">Get in touch</div>
<p>You'll find us,offices sitting right in<br/>the town centre in the middle of Guildford,surrey.</p>
<p>171 abc Street<br/>Lipsum<br/>Lorem<br/>GU5 3AB</p>
<p>+44(0)2563 586215<br/>info@lipsum.com</p>
</div>
</div>
<div class="heading" align="right">@ Online Car Rental System Designed and developed by Harman singh</div>
</body>
</html>