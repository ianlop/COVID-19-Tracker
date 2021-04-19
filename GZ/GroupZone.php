<?php
require '../database.php';
session_start();
if(isset($_SESSION['username']))
{	
  $button1 = "<a href='../Profile.php' class='mbloginbtn'>Profile</a>";
	$button2 = "<a href='../LogOut.inc.php' class='mbloginbtn'>Log Out</a>";
	
	$title = "<h2> Patient Details </h2>";
	
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

<title> Group Zone</title>
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
            <td class="mbheadertd">
							<a href="../general recommendations/general_rec.php" class="mbheaderlinkanchors" style="color: blue;"><p class="mbheaderlinks">General Guidelines</p></a>
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
<div class="Group Zone" align="center">
	<?php
		echo "<h2>Group Zones in this Database</h2>";
	?>

  <?php
    $sql1 = "SELECT * FROM `GroupZones` gz";
		$result1 = $conn->query($sql1);

		if ($result1->num_rows > 0) 
		{
	  		echo "<table id=\"t1\"><tr id=\"tr1\"><th id=\"th1\">Group Zones</th></tr>";
	  		// output data of each row
	  		while($row = $result1->fetch_assoc())
	  		{
		    	echo "<tr id=\"tr1\"><td>".$row["group_zone_name"]."</td></tr>";
	  		}
	  		echo "</table> <br><br><br>";
			echo "<center><a href='../Formulaire.php' class='mbloginbtn'>PRESS HERE IF YOU HAVE DEVELOPED A NEW SYMPTOM NOT SEEN IN THE GENERAL GUIDELINES TAB</a></center>"; 
			  
		} 
		else
		{
	  		echo "No Group Zones in our database.";
		}
  ?>
	

</div>
</body>

</html>
