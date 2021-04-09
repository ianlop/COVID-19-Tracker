<?php
	
session_start();
$title;
$button1;
$button2;
$displaySignUp = true;
if(isset($_SESSION['username']))
{

   $title = "<h1> Welcome, ".$_SESSION['username']."!</h1>";
   $button1 = "<a href='Profile.php' class='mbloginbtn'>Profile</a>";
   $button2 = "<a href='PHP/LogOut.inc.php' class='mbloginbtn'>Log Out</a>";
   $displaySignUp = false;

}
else
{
	$title = "<h1></h1>";
	$button1 = "<a href='Login.php' class='mbloginbtn'>Login</a>";
	$button2 = "<a href='SignUp.php' class='mbheaderlinkanchors' style='text-decoration: underline;''><p class='mbheaderlinks'>COVID-19 STATUS</p></a>";
}


?>

<!DOCTYPE HTML>
<html>

	<head>
	<meta charset="UTF-8" />
	<title></title>
	<link rel="stylesheet" type = "text/css" href="home_css/homepage_css.css"/>
	<link rel="stylesheet" type = "text/css" href="home_css/menubar+footerCSS.css"/>


	</head>

	<div class="body">
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
							<a href="Nutrition/Fitness&Nutrition.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Personal information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="Education/education.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">Group Zone information</p></a>
						</td>
						<td class="mbheadertd">
							<a href="finances/financepage.php" class="mbheaderlinkanchors"><p class="mbheaderlinks">PCR information</p></a>
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
			echo "$title";
		?>
				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<p class = "text"> Welcome to the COVID-19 Tracker application! This application will help monitor your personal COVID-19 related information. Like PCR tests done on you and the current regional protocol information and recommendations. </p>
					</div>
				</div>	

		<div class="MainDivTag">
			<div class="SecondMainDivTag">

				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table class="imageSlidesTable" style="max-width:800px">
							<tr >
								<td>
									<div class="Images with text" style="max-width:500px">	
									<img class="mySlides" src="home_img/globalregions.png" style="width:100%">
									<img class="mySlides" src="home_img/recom.png" style="width:100%">
									<img class="mySlides" src="home_img/symp.jpg" style="width:100%">
									</div>
								</td>
								
								<td>
									<p class="myText" value="test" > Regional protocol information <br> </p>
									<p class="myText" value="test2"> Regional Recomendations</p>
									<p class="myText" value="test3" > What are the symptoms? Click here to learn more about the symptoms for COVID-19 </p>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table  class="imageSlidesTable" style="max-width:800px" >
							<tr>
								<td>
									<ul>
										<h1 > Regional protocol </h1>
										<li> Find out your region's current rules and regulations  </li>
										<br>
										<li> Guidelines to help you follow  </li>
										<br>
										<li>  What's open and what's not  </li>
									
									</ul>
								</td>
								<td>
									<div class="Images with text" style="max-width:300px" >	
										<img class="mySlides4" src="home_img/guide.jpg" style="width:100%">
										<img class="mySlides4" src="home_img/proto.jpg" style="width:100%">
										<img class="mySlides4" src="home_img/closed.jpg" style="width:100%">
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="horizontalwrapper">
					<div class="homepagecontainers">
						<table  class="imageSlidesTable" style="max-width:800px" >
							<tr>
								<td>
									<ul>
										<h1 > Your personal COVID-19 information  </h1>
										<li> Fill out a form every time you develop a new symptom to help out in the ever changing developments  </li>
										<br>
										<li> Get alerted when one of your GroupZone's have been exposed to COVID-19 </li>
										<br>
										<li> Check your test results  </li>
									</ul>
								</td>
								<td>
									<div class="Images with text" style="max-width:300px" >	
										<img class="mySlides5" src="home_img/survey.jpg" style="width:100%">
										<img class="mySlides5" src="home_img/exposed.png" style="width:100%">
										<img class="mySlides5" src="home_img/results.jpg" style="width:100%">
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
				
			<?php
			if ($displaySignUp) {
				echo "
			<p><b> Click the 'Login' button to start tracking! </b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='SignUp.html' class='loginbtn'> Login </a></p>   
				
				<p> If you have any questions about anything feel free to consult our F.A.Q 
				or email your corresponding government for further help.</p>";
			}
			?>

			</div> 
		</div>
		

	</div>

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
	</div>
	<script>
					var myIndex = 0;
					var myIndex2 = 0;
					image();
					text();

					function image() {
					var i;
					var x = document.getElementsByClassName("mySlides");
					
					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
						
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1}    
					x[myIndex-1].style.display = "block";  
					
					setTimeout(image, 5000); // Change image every 5 seconds
					}

					function text() {
					var k;
					var y = document.getElementsByClassName("myText");
					for (k = 0; k < y.length; k++) {
						y[k].style.display = "none";  
					}
					myIndex2++;
					if (myIndex2 > y.length) {myIndex2 = 1}    
					y[myIndex2-1].style.display = "block";  
					setTimeout(text, 5000); // Change image every 5 seconds
					}
</script>
</html>