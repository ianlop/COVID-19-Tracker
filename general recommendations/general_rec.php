<?php
require '../database.php';
session_start();

if(isset($_SESSION['username']))
{	
	$button1 = "<a href='../Profile.php' class='mbloginbtn'>Profile</a>";
	$button2 = "<a href='../LogOut.inc.php' class='mbloginbtn'>Log Out</a>";
	
}
//should not go here ever if you think about it, but for precaution vvvv
else
{
	$button1 = "<a href='../LogIn.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='../HomePage.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>Home</p></a>";
}


?>
<!DOCTYPE html>
<html>

<head>

<title> General Guidelines </title>
<link rel="stylesheet" type = "text/css" href="../home_css/menubar+footerCSS.css"/>
<style>

.float-container
{
	display: flex;
	justify-content: space-around;
	padding-top: 35px;
}
.guidelines
{
   	outline-style: solid;
   	outline-color: black;
   	width: 50%;
   	border: 5px solid #0e7a68;
   	box-shadow: 0 5px 15px;
}
.levels
{
  	outline-style: solid;
   	outline-color: black;
   	width: 50%;
   	border: 5px solid #0e7a68;
   	box-shadow: 0 5px 15px;
}
h2
{
color : #7c98b6;
font-weight:normal; 
font-size: 30px;
}
.levelTable
{
	border: 1px solid black;
	border-collapse: collapse;"
}
</style>
<nav class="mbHeadernav">
			<div class="mbtablediv">
				<table>
					<tr>
						<td>
							<img src="../home_img/virusLogo.png" alt="logo" style="width:50px;height:50px; float: left;">
						</td>
						<td>
							<a href="../HomePage.php" style="text-decoration: none;"><h1 id="mbMainMenuHeader">COVID-19 TRACKER</h1></a>
						</td>
						<td class="mbheadertd"  style="padding-left: 50px;">
							<a href="../PI/PersonalInfo.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Personal information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="../GZ/GroupZone.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Group Zone information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="../PCR/PCRinfo.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">PCR information</p></a>
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
</head>

<body>
<div class="float-container">
<div class="guidelines">
<h2>Main Symptoms</h2>
<ul style="list-style-type:square;">
  <li>fever (temperature exceeding 38.1 degrees Celsius or 100.6 degrees Fahrenheit)</li>
  <li>cough</li>
  <li>shortness of breath or difficulty breathing</li>
  <li>loss of taste and smell</li>
	<ul style="list-style-type:square;">
	<h2>Other Symptoms</h2>
		<li>nausea</li>
  		<li>stomach aches</li>
  		<li>vomiting</li>
  		<li>headache</li>
		<li>muscle pain</li>
  		<li>diarrhea</li>
  		<li>sore throat.g</li>
	</ul>
</ul>
</div>

<div class="levels">
<h2>Four-level COVID-19 alerts:</h2>
<table class="levelTable" style="width:100%;">
  <tr class="levelTable">
    <th class="levelTable">Levels</th>
    <th class="levelTable">Protocol</th> 
    <th class="levelTable">Measures</th>
  </tr>
  <tr class="levelTable">
    <td style="color: green;" class="levelTable">Green</td>
    <td class="levelTable">Vigilance</td>
    <td class="levelTable">Basic Measures</td>
  </tr>
  <tr class="levelTable">
    <td style="color: yellow;" class="levelTable">Yellow</td>
    <td class="levelTable">Early Warning</td>
	<td class="levelTable">Strengthened Basic Measures</td>
  </tr>
  <tr class="levelTable">
    <td style="color: orange;" class="levelTable">Orange</td>
    <td class="levelTable">Moderate Alert</td>
    <td class="levelTable">Intermediate Measures</td>
  </tr>
  <tr class="levelTable">
  	<td style="color: red;" class="levelTable">Red</td>
	<td class="levelTable">Maximum Measures</td>
	<td class="levelTable">Maximum Alert</td>
  </tr>
</table>
</div>
</div>
<div>
<center>
<h2>If you are under home isolation, follow the public health Information and recommendations to reduce the spread of COVID-19:</h2>
</center>
<br>
<ul style="list-style-type:square;">
  <li style=" font-size: 30px;">Do not go to school, work, a childcare center or any other public space.</li>
  <li style=" font-size: 30px;">Do not use public transport.</li>
  <li style=" font-size: 30px;">If the sick person lives alone and has no help to get essentials such as food or medication, use phone/online grocery and pharmacy home delivery services.</li>
  <li style=" font-size: 30px;">Do not receive visitors at home.</li>
  <li style=" font-size: 30px;">If the sick person lives with other people who are not infected by COVID-19:</li>
	<ul style="list-style-type: circle;">
	<li style=" font-size: 30px;">remain alone in one room of the house as often as possible and close to the door.</li>
	<li style=" font-size: 30px;">eat and sleep alone in one room of the house.</li>
	<li style=" font-size: 30px;">if possible, use a bathroom reserved for the sick person sole use. Otherwise, disinfect the bathroom after every use.</li>
	<li style=" font-size: 30px;">avoid as much as possible contact with other people in the home. If this is impossible, wear a mask. If a mask is not available, stay at least two meters away from other people.</li>
	</ul>
  <li style=" font-size: 30px;">Open a window to air out the sick person's room and home often (weather permitting).</li>
  <li style=" font-size: 30px;">Do not go to a medical clinic unless you have first obtained an appointment and have notified the clinic that you have COVID-19. If you need to go to the emergency room (eg, if you have difficulty breathing), contact 911 and tell the person that you are sick with COVID-19.</li>
  <li style=" font-size: 30px;">Wear a mask when someone is in the same room as you.</li>
  <li style=" font-size: 30px;">Wear a mask if you must leave your home to seek medical care, you must first notify the medical clinic (or 911, if it is an emergency) that you have COVID-19.</li>
  <li style=" font-size: 30px;">Wear a mask when someone is in the same room as you.</li>
  <li style=" font-size: 30px;">If you need to cough, sneeze, or blow your nose:</li>
  <ul style="list-style-type: circle;">
	<li style=" font-size: 30px;">If you have a disposable tissue use it to cough, sneeze or blow your nose then discard the tissue in the garbage, and then wash your hands with soap and water.</li>
	<li style=" font-size: 30px;">If you do not have disposable tissues, cough, or sneeze in the crook of your arm.</li>
  </ul>
  <li style=" font-size: 30px;">Wash your hands:</li>
  <ul style="list-style-type: circle;">
	<li style=" font-size: 30px;">Wash your hands often with soap under warm running water for at least 20 seconds.</li>
	<li style=" font-size: 30px;">Use an alcohol- based hand rub if soap and water are not available.</li>
	<li style=" font-size: 30px;">Wash your hands before eating and whenever your hands look dirty.</li>
	<li style=" font-size: 30px;">After using the toilet, put the lid down before flushing and then wash your hands.</li>
  </ul>
  <li style=" font-size: 30px;">Do not share plates, utensils, glasses, towels, bed sheets or clothes with others.</li>
  <li style=" font-size: 30px;">Watch your symptoms and take your temperature every day:</li>
  <ul style="list-style-type: circle;">
	<li style=" font-size: 30px;">Take your temperature every day at the same hour.</li>
	<li style=" font-size: 30px;">If you are taking medication for fever wait at least four hours before taking your temperature.</li>
  </ul>
  <li style=" font-size: 30px;">Directives in case of severe symptoms:</li>
  <ul style="list-style-type: circle;">
	<li style=" font-size: 30px;">If your symptoms worsen call 514-644-4545 or call your doctor.</li>
	<li style=" font-size: 30px;">If you have difficulty breathing, or shortness of breath or chest pain call 911 and inform them you may be infected by COVID-19.</li>
  </ul>
  <li style=" font-size: 30px;">If someone close or caregiver helps you with your daily activities, then before helping you, the person must wash his/her hand, wear a mask and put-on disposable gloves. After helping you, the person must take off the gloves and put them in a garbage bin with a lid, wash his/her hands, take off the mask and put it in a garbage bin with a lid, and wash his/her hands again.</li>
  <li style=" font-size: 30px;">For help with psychosocial matters, contact 811.</li>
</ul>

</div>

</body>
	
	


</html>
