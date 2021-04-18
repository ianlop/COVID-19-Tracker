<?php
require 'database.php';
session_start();

if(isset($_SESSION['username']))
{	
	$button1 = "<a href='Profile.php' class='mbloginbtn'>Profile</a>";
	$button2 = "<a href='LogOut.inc.php' class='mbloginbtn'>Log Out</a>";

	$sql = "SELECT first_name  FROM person WHERE medicare_number = ". $_SESSION['username'];
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		// output data of each row, should be just 1
		while($row = $result->fetch_assoc()) 
		{
			$firstName = $row["first_name"];
		}
	}

	$title = "<h2> Displaying the symptoms for ".$firstName." </h2>";
	
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
	#t1 
	{
 	 border: 1px solid black;
 	 width: 65%;
 	 line-height: 40px;
 	 text-align: center;
 	 font-size: 20px;
 	 background-color: rgb(250,250,250);
	}

	#tr1:hover {background-color: rgb(200,200,200);}

	#th1
	{
  		background-color: #0e7a68;
  		color: white;
	}
</style>

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

<div class="float-container">
<div class="Profile" align="center">
	<?php
		echo "$title";
	?>

	<?php

		$sql1 = "SELECT * FROM `Positive Patients' Symptom History` ppsh WHERE medicare_number = ". $_SESSION['username'];
		$result1 = $conn->query($sql1);

		if ($result1->num_rows > 0) 
		{
	  		echo "<table id=\"t1\"><tr id=\"tr1\"><th id=\"th1\">Date of Result</th><th id=\"th1\">Symptom Sr. No.</th><th id=\"th1\">Date Symptom Observed</th></tr>";
	  		// output data of each row
	  		while($row = $result1->fetch_assoc())
	  		{
		    	$sql2 = "SELECT * FROM `Symptoms` s WHERE symptoms_sr_number = ".$row["symptoms_sr_number"];
				$result2 = $conn->query($sql2);

		    	while ($row2 = $result2->fetch_assoc()) 
		    	{
		    		echo "<tr id=\"tr1\"><td>".$row["date_of_result"]."</td><td>".$row2["symptom_description"]."</td><td>".$row["date_symptom_observed"]."</td></tr>";
		    	}
	  		}
	  		echo "</table>";
		} 
		else
		{
	  		echo "Patient is not COVID-19 positive in our database.";
		}

	?>	

</div>
	


</html>
