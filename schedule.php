<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sacred Heart Parish</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/logo.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="sub-header">
	<nav>
		<a href="home.php"><img src="img/logo.png"></a>
		<div class="nav-links" id="navLinks">
		<?php
		 $xmlschedule = simplexml_load_file("xml/Murillo,ReyLaugoIT2BSacredHeartParish.xml") or die("Failed to load");
		 $count = 1;
		 foreach ($xmlMurilloReyLaugo_IT2B_SacredHeartParish->children() as $MurilloReyLaugo_IT2B_SacredHeartParish) {
		 	// code...
		 }
		?>	
			<i class="fa fa-times" onclick="hideMenu()"></i>

			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="missionvision.php">MISSION & VISION</a></li>
				<li><a href="tencommandments.php">TEN COMMANDMENTS</a></li>
				<li><a href="schedule.php" class="active">SCHEDULE</a></li>
				<li><a href="gallery.php">GALLERY</a>
				</li>
				<li><a href="request.php">REQUEST</a></li>
				<li><a href="join.php">JOIN</a></li>
				<li><a href="donate.php">DONATE</a></li>
				<li><a href="causes.php">CAUSES</a></li>
				<li><a href="review.php">REVIEWS</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<br>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<i class="fa fa-bars" onclick="showMenu()"></i>
	</nav>
	<h1>Schedules</h1>
</section>

<!-------- about us content -------->
	
	<div class="content">
				<table class="styled-table">
					<thead>
						<tr>
							<th colspan="4">Sacred Heart Parish Church</th>
						</tr>
						<tr>
							<th>Chapels</th>
							<th>Day</th>
							<th>Time</th>
							<th>Programs</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Lupac</td>
							<td>1</td>
							<td>5 PM</td>
							<td>Mass</td>
						</tr>
						<tr>
							<td>Maligaya</td>
							<td>2</td>
							<td>6 PM</td>
							<td>Mass</td>
						</tr>
						<tr>
							<td>Buliasnin</td>
							<td>3</td>
							<td>7 AM</td>
							<td>Mass</td>
						</tr>
						<tr>
							<td>Balogo</td>
							<td>4</td>
							<td>8 AM</td>
							<td>Mass</td>
						</tr>
						<tr>
							<td>Tabi</td>
							<td>5</td>
							<td>9 AM</td>
							<td>Mass</td>
						</tr>
						<tr>
							<td>Tabigue</td>
							<td>6</td>
							<td>10 AM</td>
							<td>Mass</td>
						</tr>
						<tr>
							<td>Pili</td>
							<td>7</td>
							<td>5 PM</td>
							<td>Mass</td>
						</tr>
					</tbody>
				</table>
	</div>
			
		<div class="schedule-col">
			<img src="img/bg3.jpg">
		</div>
	</div>
</section>

<!-------- Footer -------->

<section class="footer">
	<h4>About Us</h4>
	<div class="rules">
		<a href="rules/termsofuse.php"><p>terms of use</p></a>
		<a href="rules/privacyandpolicy.php"><p>privacy & policy</p></a>
		<a href="rules/faq.php"><p>FAQ</p></a>
	</div>
	<p>© COPYRIGHT 2015 SACRED HEART PARISH - ALL RIGHTS RESERVED - The SHP Logo is a trademark of Diocese of Boac Sacred Heart Parish.</p>
</section>

<!-------- JavaScript for Toggle Menu -------->
<script>
	var	navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0"
	}
	function hideMenu(){
		navLinks.style.right = "-200px"
	}
</script>

</body>
</html>