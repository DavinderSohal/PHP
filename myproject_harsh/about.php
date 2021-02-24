<?php require_once("common/connect.php");?>
<?php include("common/header.php");?>
<div class="about-box">
<div class="section-6">
<div class="sidebar1">
<?php
$select="select * from cms where id='57'";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
	?>
<div class="about-heading"><font color="#A50133" size="5"><b><?php echo $row['pagetitle']; ?></b></font></div>
<div class="about-image"><img src="images/about.png"></div>
<div class="about-text"><font color="#716F6F"><?php echo $row['pagedescrp']; ?></font></div>
</div>
<div class="rightbar1">
<div class="section-8">
<a href="#"><img src="images/pdf.png" vspace="25" hspace="20"></a>
</div>
<div class="section-9">
<div class="calender-panel1">
<h2><font color="#FFFFFF">&nbsp;&nbsp;Campus Event Calender<div style="margin-top:-26px; margin-left:265px;"><img src="images/rss.png" hspace="10"></div></font></h2>
<div class="image-3"><center>SEP<br>4</center></div>
<div class="text-5"><font color="#F8A13E">The point of using Lorem</font><br><font color="#FFFFFF">9:15 am - 5:00 pm</font><br>
<font color="#FFFFFF">Read more about this event +</font></div>
<div class="image-3"><center>SEP<br>6</center></div>
<div class="text-5"><font color="#F8A13E">The point of using Lorem</font><br><font color="#FFFFFF">9:15 am - 5:00 pm</font><br>
<font color="#FFFFFF">Read more about this event +</font></div>
<div class="image-3"><center>SEP<br>10</center></div>
<div class="text-5"><font color="#F8A13E">The point of using Lorem</font><br><font color="#FFFFFF">9:15 am - 5:00 pm</font><br>
<font color="#FFFFFF">Read more about this event +</font></div>
<img src="images/image 1.png" hspace="15" vspace="20">
</div>
</div>
</div>
</div>
<div class="section-7">
<div class="sidebar1">
<?php
$select="select * from cms where id='57'";
$sql=mysqli_query($con,$select) or die("error");
$i=1;
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
	?>
<div class="about-heading"><font color="#A50133" size="5"><b>WIELDSTREM UNIVERSITY HISTORY</b></font></div>
<div class="about-text1"><font color="#716F6F"><?php echo $row['pagedescrp']; ?></font></div>
</div>
<div class="rightbar2">
<h2><font color="#FFFFFF">&nbsp;&nbsp;Campus News<div style="margin-top:-26px; margin-left:160px;"><img src="images/rss.png" hspace="10"></div></font></h2>
<img src="images/news.png" hspace="16">
<br><div class="news-text"><font color="#FFFFFF">There are many variations</div><div class="text-6">Lorem Ipsum is simply dummy text of <br>the printing and typesetting industry...</font><br><br><font color="#F8A13E">Read More +</font></div>
</div>
</div>
<?php include("common/footer-menu.php");?>
</div>
<?php include("common/footer.php");?>
