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
			<i class="fa fa-times" onclick="hideMenu()"></i>

			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="missionvision.php">MISSION & VISION</a></li>
				<li><a href="tencommandments.php">TEN COMMANDMENTS</a></li>
				<li><a href="schedule.php">SCHEDULE</a></li>
				<li><a href="gallery.php">GALLERY</a>
				</li>
				<li><a href="request.php">REQUEST</a></li>
				<li><a href="join.php">JOIN</a></li>
				<li><a href="donate.php">DONATE</a></li>
				<li><a href="causes.php">CAUSES</a></li>
				<li><a href="reviews.php">REVIEWS</a></li>
				<li><a href="about.php" class="active">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<br>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<i class="fa fa-bars" onclick="showMenu()"></i>
	</nav>
	<h1>About Us</h1>
</section>

<!-------- about us content -------->

<section class="about-us">
	
	<div class="row">
		<div class="about-col">
			<h1>Sacred Heart Parish Church</h1>
			<p>THE CHURCH CONSTRUCTION STARTED WITH THE GROUND BREAKING CEREMONIES ON OCTOBER 29,1983 IN THE PRESENT SITE DONATED E MISS JOSEFA AND CORAZON MONTELLANO. THE DONATION SITE WAS SE- CURED BY BARANGAY CAPTAIN EDMUND MALAPOTE WHO WAS ALSO THE PRE- SIDENT OF THE LUPONG PAMUNUAN NG SAMBAYANANG KRISTIYANO, AN ORGANIZATION OF THE RIVERSIDE BARANGAY CAPTAINS IT TOOK CHARGE OF THE INITIAL CONSTRUCTION BUT WORK WAS STOPPED WITH ONLY EIGHT POSTS AND BEAMS FINISHED BECAUSE OF LIMITED FUNDS.</p>

			<p>THE RESUMPTION OF THE CONSTRUCTION OF THE NEW PROPOSED CHURCH SOMETIMES IN 1986 WAS DONE THROUGH THE LEADERSHIP OF PRESIDENT MRS. JOSEFINA MAGCAMIT OF PORAS BARANGAY COUNCIL AND THE YEARS HERMANO AND HERMANA.THE FIRST MASS IN THE UNFINISHED CHURCH WAS HELD ON MAY 11, 1986 WITH ONLY CANVASS AS TEMPORARY ROOFING. IN 1993, THE RIVERSIDE CORE GROUP WAS ORGANIZED.COM- POSED OF ONLY EIGHT BARANGAYS: BALOGO, BULIAS NIN, LUPAC, MALI- GAYA, PILI, PORAS, TABI, AND TABIGUE, WHILE BANTAD AND TANZA REQUESTED THAT THEY BE RETAINED IN THE MOTHER PARISH.</p>

			<p>With President Mrs. Josefina Magcamit and Treasurer Mrs. Socorro Marquez of the RCG, the activities on the new proposed parish church was continued and through the concerted efforts of the eight barangays, the Sacred Heart Parish was erected on June 25,1995 with Rev. Fr. Senen Milambiling as its first parish priest was organized and composed. Canonically erected and inaugurated on the Feast of the Most Sacred Heart of Jesus, June 23, 1995 at the Province of Marinduque, Brgy. Poras, Boac, for the glory of God and the welfare of the parishioners of riverside. Decreed by His Excellency Most Rev. Rafael M. Lim, D.D., first bishop of boac, with all the rights and privileges according to the provisions of the Canon Law and the Diocesan Structures and accepted customs and traditions.</p>
			<a href="home.php" class="hero-btn red-btn">EXPLORE NOW</a>
		</div>
		<div class="about-col">
			<img src="img/background1.jpg">
			<img src="img/about.jpg">
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