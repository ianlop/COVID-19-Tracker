<?php
require 'database.php';
session_start();

if(isset($_SESSION['username']))
{	
	$button1 = "<a href='Profile.php' class='mbloginbtn'>Profile</a>";
	$button2 = "<a href='LogOut.inc.php' class='mbloginbtn'>Log Out</a>";
	
}
//should not go here ever if you think about it, but for precaution vvvv
else
{
	$button1 = "<a href='LogIn.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='database.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>COVID-19 STATUS</p></a>";
}


?>
<!DOCTYPE html>
<html>

<head>

<title> Profile </title>
<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>

</head>

<body>
<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="home_img/virusLogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">COVID-19 TRACKER</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="PI/PersonalInfo.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Personal information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="GZ/GroupZone.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Group Zone information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="PCR/PCRinfo.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">PCR information</p></a>
						</td>
					</tr>
				</table>
			</div>
				
			<div id="mbloginsignupsdiv">
						<?php
						echo "$button1";
						?>
						<?php
						echo "$button2";
						?>
			</div>
		</nav>

<?php
	
?>
<div class="float-container">
<div class="Profile">
	
	


</html>
