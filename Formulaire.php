<?php
require 'database.php';
session_start();

if(isset($_SESSION['username']))
{	
	$button1 = "<a href='Profile.php' class='mbloginbtn'>Profile</a>";
	$button2 = "<a href='LogOut.inc.php' class='mbloginbtn'>Log Out</a>";

	$sql = "SELECT first_name, last_name  FROM person WHERE medicare_number = ". $_SESSION['username'];
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		// output data of each row, should be just 1
		while($row = $result->fetch_assoc()) 
		{
			$firstName = $row["first_name"];
			$lastName = $row["last_name"];
		}
	}

	$title = "<h2> New Symptom form for: ".$firstName.' '.$lastName." </h2>";
	
}
//should not go here ever if you think about it, but for precaution vvvv
else
{
	$button1 = "<a href='LogIn.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='database.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>COVID-19 STATUS</p></a>";
	$title = "<h1></h1>";
}

?>
<!DOCTYPE html>
<html>

<head>

<title> Profile </title>
<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>
<style> 

</style>
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
							<a href="PI/PersonalInfo.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Personal Information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="GZ/GroupZone.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Group Zone Information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="PCR/PCRinfo.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">PCR Information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="general recommendations/general_rec.php" class="mbheaderlinkanchors" style="color: blue;"><p class="mbheaderlinks">General Guidelines</p></a>
						</td>
					</tr>
				</table>
			</div>
				
			<div id="mbloginsignupsdiv">
						<?php
						echo "$button1";
						echo "$button2";
						?>
			</div>
		</nav>
</head>

<body>


<div class="float-container">
<div class="Profile" align="center">
	<?php
		echo "$title";
	?>
<form action="/html/tags/html_form_tag_action.cfm" method="post">
Please describe what you are feeling:<br />
<textarea name="comments" id="comments" rows="5" cols="80" placeholder="Describe what you are feeling here...">
</textarea><br/>
<input type="submit" value="Submit" />
</form>
	

</div>

</body>


</html>
