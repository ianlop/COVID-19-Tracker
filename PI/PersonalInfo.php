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

	$title = "<h1>Pleae Login to see the details</h1>";
}
?>
<!DOCTYPE html>
<html>

<head>

<title> Personal Info </title>
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
<div class="PersonalInfo" align="center">
	<?php
		echo "$title";
	?>

  <?php
    if(isset($_SESSION['username']))
    {
      $sqlq = "SELECT * FROM `Person` p WHERE medicare_number = ". $_SESSION['username'];
      $resultq = $conn->query($sqlq);
    
      if ($resultq->num_rows > 0) 
      {
          while($row = $resultq->fetch_assoc())
          {
            echo "<h3> Name: ".$row['first_name']." ".$row['last_name']."</h3>";
            echo "<h3> Citizenship: ".$row['citizenship']."</h3>";
            echo "<h3> Email: ".$row['email']."</h3>";
            echo "<h3> DOB: ".$row['DOB']."</h3>";
            echo "<h3> Telephone: ".$row['telephone_number']."</h3>";
            echo "<h3> Address: ".$row['address']."</h3>";
            
            $sqlq1 = "SELECT * FROM `PostalRegistry` pr WHERE postal = \"".$row['postal']."\"";
            $resultq1 = $conn->query($sqlq1);
            if ($resultq1->num_rows > 0) 
            {
              while($row1 = $resultq1->fetch_assoc())
              {
                echo "<h3> City: ".$row1['city']."</h3>";
                echo "<h3> Province: ".$row1['province']."</h3>";
                echo "<h3> Country: ".$row1['country']."</h3>";
                echo "<h3> Postal: ".$row1['postal']."</h3>";
              }
            }
          
  			  }
  		} 
  		else
  		{
  	  		echo "Patient is not in our database.";
  		}
      
    }
  ?>
	

</div>
</body>

</html>
