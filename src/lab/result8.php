
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Virtual Lab - IIT kanpur</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/chromestyle.css" />
<script src="js/chrome.js"></script>
<!--<link rel="stylesheet" type="text/css" href="js/chrome.js" />-->
<style type="text/css">
<!--
.style2 {color: #0066FF}
.style4 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <div id="logo">
		  
		  <h1><font color="#000000">Virtual Labs -IIT Kanpur</font></h1>
			    <br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p><?php /*?><?php
$today = date("l F d, Y");
print("$today");
if($today == "Sunday") 
{
$bgcolor = "#FEF0C5";
}
elseif($today == "Monday")
{
$bgcolor = "#FFFFFF";
} 
elseif($today == "Tuesday") 
{
$bgcolor = "#FBFFC4";
} 
elseif($today == "Wednesday")
{
$bgcolor = "#FFE0DD";
} 
elseif($today == "Thursday")
{
$bgcolor = "#E6EDFF";
} 
elseif($today == "Friday") 
{
$bgcolor = "#E9FFE6";
} 
else 
{
// Since it is not any of the days above it must be Saturday
$bgcolor = "#F0F4F1";
}
print("<body bgcolor=\"$bgcolor\">\n"); 
?><?php */?>
      </div>
  </div>
</div></div>
</div>
	<div class="chromestyle" id="chromemenu">
	<div id="menu">
		<ul>
			 <li><a href="use.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;</strong>Home&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="experiment.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;<span class="style7">&nbsp;Experiment</span>s</a></li>
		      <li><a href="contactp.php" style="background-image:url(images/images1.jpg)"> &nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>People<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;</a></li>
		      <li><a href="faq.php" style="background-image:url(images/images1.jpg)"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;FAQs&nbsp;<strong>&nbsp;</strong>&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="contact.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;Contact Us </a></li>
		      <li><a href="feedback.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback&nbsp;&nbsp;</a></li>
			   <li><a href="http://vlab.co.in" style="background-image:url(images/images1.jpg)" target="_blank" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        VLab &nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		</ul>
	</div>
	</div>
			<!--dropbox1-->
			<div id="dropmenu1" class="dropmenudiv">

				<a href="aim_of_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="aim_of_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="aim_of_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="aim_of_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="aim_of_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="aim_of_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				
  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="about_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="about_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="about_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="theory4.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="theory5.php">Experiment.No-5 <br>Rotameter</a>
				<a href="theory6.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="procedure14.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="procedure15.php">Experiment.No-5 <br>Rotameter</a>
				<a href="procedure16.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>	
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
<!--

<?php
session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>-->
    <div id="date" align="right"><font color="#009933" style="padding-right:10px;"><!--Logged as <?php echo $_SESSION['user']; ?></font>-->
  <a href="logout.php" style="padding-right:10px;">Logout</a> 
    </div>
    
<span class="style4"></span>
<!-- end #menu -->
	          <span class="style4"></span>
   
		<div id="page"><span class="style4"></span>
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
		<div class="post-bgbtm">
				<h1 class="title">




<html>

<head>
<title>Instant Quiz Results</title>
</head>

<body bgcolor="#FFFFFF">

<p align="center"><strong><font face="Arial">

<script src="quizconfig8.js">
</script>

<big>Instant Quiz Results</big></font></strong></p>
<div align="center"><center>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%"><form method="POST" name="result"><table border="0" width="100%" cellpadding="0" height="100">
        <tr>
          <td height="15" bgcolor="#D3FFA8"><strong><font face="Arial"># of questions you got right:</font></strong></td>
          <td height="15"><p><input type="text" name="p" size="14"></td>
        </tr>
        <tr>

          <td height="12" bgcolor="#D3FFA8"><strong><font face="Arial">The questions you got wrong:</font></strong></td>
          <td height="12"><p><textarea name="T2" rows="3" cols="24" wrap="virtual"></textarea></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#D3FFA8"><strong><font face="Arial">Grade in percentage:</font></strong></td>
          <td height="25"><input type="text" name="q" size="8"></td>
        </tr>

      </table>
    </form>
    </td>
  </tr>
</table>
</center></div>

<form method="POST"><div
  align="center"><center><p>

<script>
var wrong=0
for (e=0;e<=2;e++)
document.result[e].value=""

var results=document.cookie.split(";")
for (n=0;n<=results.length-1;n++){
if (results[n].charAt(1)=='q')
parse=n

}

var incorrect=results[parse].split("=")
incorrect=incorrect[1].split("/")
if (incorrect[incorrect.length-1]=='b')
incorrect=""
document.result[0].value=totalquestions-incorrect.length+" out of "+totalquestions
document.result[2].value=(totalquestions-incorrect.length)/totalquestions*100+"%"
for (temp=0;temp<incorrect.length;temp++)
document.result[1].value+=incorrect[temp]+", "


</script>

<input type="button" value="Take the quiz again" name="B1"
  onClick="history.go(-1)"> <input type="button" value="View solution" name="B2"
  onClick="showsolution()"></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
</center></div>
</form>

<p id="footnote" align="center">&nbsp;</p>
</body>
</html>
 </div>
			</div>
			</div>
			<div class="post"><div class="post-bgtop"><div class="post-bgbtm"><div class="entry">
			  
				</div>
			</div>
			</div>
			</div>
		<div style="clear: both;"></div>
		</div>
		<!-- end #content -->
			<div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp;</p>
				</li>
				
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/" target="_blank">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/" target="_blank">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Live Help </h2>
					<ul>
						
						<!-- BEGIN Comm100 Live Chat Button Code --><link href="http://chatserver.comm100.com/css/comm100_livechatbutton.css" rel="stylesheet" type="text/css"/><div id="comm100_ChatButton"><div id="comm100_warp"><center><div id="comm100_dvhelp"><a class="comm100_ahelp_css" href="http://www.comm100.com/livechat/" onclick="comm100_Chat();return false;" target="_blank" title="Live Chat Software for Website"><img id="comm100_ButtonImage" src="http://chatserver.comm100.com/BBS.aspx?siteId=72715&amp;planId=886&amp;partnerId=-1" style="border:0px" alt="Live Chat Software for Website" /></a><script src="http://chatserver.comm100.com/js/LiveChat.js?siteId=72715&amp;planId=886&amp;partnerId=-1" type="text/javascript"></script><div id="comm100_track"></div></div><div id="comm100_dvbox" class="comm100_dvbox_css" style="display:none;" onmouseover="this.style.display=''" onmouseout="this.style.display='none'"><div class="comm100_dvcontent_css"><p class="comm100_ptitle_css"><b><a href="http://www.comm100.com/" target="_blank" class="comm100_atitle_css" >Comm100</a> Products:</b></p><ul class="comm100_ulbox_css"><li style="display:none;" class="comm100_onelinone">&nbsp;</li><li><a href="http://www.comm100.com/" target="_blank">Customer Service Software</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank" >Live Chat Software</a></li><li><a href="http://www.comm100.com/emailmarketingnewsletter/" target="_blank">Email Marketing Software</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank">Live Help</a></li><li><a href="http://www.comm100.com/emailmarketingnewsletter/" target="_blank">Email Marketing</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank">Live Chat</a></li></ul></div></div></center></div></div><!-- End Comm100 Live Chat Button Code -->
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
</div>
	<!-- end #page -->
	<div id="footer">
		<p> Transducer &amp; Instrumentation  Virtual Lab - IIT Kanpur </p>
	</div>
	<!-- end #footer -->
</body>
</html>
