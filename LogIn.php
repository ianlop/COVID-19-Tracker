<?php
require 'database.php';

//Code to check if the form has been submitted
//(i.e if a user has clicked on login button with credentials)
$ErrorOccured = false;
$ErrorMsg;

if(isset($_POST["login"]))
{

$Username = $_POST['username'];
//We honestly do not need to store password, we will
//be just fine with just the medicare_number
//$Password = $_POST['password'];

//queries the DB if there is a matching tuple ( > 0)
$query = mysqli_query($conn, "SELECT * FROM person WHERE medicare_number = '$_POST[username]' AND DOB = '$_POST[password];'");
if (!$query)
{
    die('Error: ' . mysqli_error($conn));
}

if(mysqli_num_rows($query) > 0)
{
  //if there is at least one, should probably be == 1, but
  //our primary key constraint in the DB restricts there
  //to be just one anyway

  //Store the $Username variable into the (global) session variables
  session_start();
  $_SESSION["username"] = $Username;

  //redirect to homepage
  header("location: HomePage.php");

} 
//error message to be displaced if login failed (tuple(s) found == 0)
else 
{
  $ErrorOccured = true;
  $ErrorMsg = "<p id='ErrorMsg' style='color:red;' >Error occured, try again or create an account</p>";	
}

}

?>



<!DOCTYPE html>

<html>

<head>


<title>Log in</title>
<link rel="stylesheet" type = "text/css" href="home_css/homepage_CSS.css"/>
<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #0e7a68;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
					</tr>
				</table>
			</div>
			<div id="mbloginsignupsdiv">
					<div>
						<a href="Login.php" class="mbloginbtn">Login</a>
					</div>
			</div>
</nav>
<br> <br> <br> <br> <br>

<h2>Login Form</h2>

<form  method="post" action="">
  <div class="container">
    <label for="uname"><b>Username (Medicare Number)</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password (DOB)</b></label>
    <br>
    <input type="date" name="password" required>
    <?php
    	if($ErrorOccured)
    	{
    		echo "$ErrorMsg";
    	}
    ?>
    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="HomePage.php"><button type="button" class="cancelbtn" onclick="">Cancel</button></a>
    <span class="psw"><a href="#">Forgot password?</a></span>
  </div>
</form>

</body>
<div class="homepagefooter">

<div class="footerlinkswrapper">
	<div class="footerlinksdiv">
		<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">About us</p>
		<p><a href="">Contact</a></p>
		<p><a href="">FAQ</a></p>
		<p><a href="">Account</a></p>
	</div>
	<div class="footerlinksdiv">
		<p style="margin-bottom: 47px; color: rgb(175, 175, 175);">Follow us on</p>
		<p><a href="">Twitter</a></p>
		<p><a href="">Instagram</a></p>
		<p><a href="">Facebook</a></p>
	</div>
</div>
</html>