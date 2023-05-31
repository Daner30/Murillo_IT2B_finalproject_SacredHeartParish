<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sacred Heart Parish</title>
	<link rel="icon" type="image/x-icon" href="img/logo.png">
	<link rel="stylesheet" href="css/style.css">
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
				<li><a href="missionvision.php" class="active">MISSION & VISION</a></li>
				<li><a href="tencommandments.php">TEN COMMANDMENTS</a></li>
				<li><a href="schedule.php">SCHEDULE</a></li>
				<li><a href="gallery.php">GALLERY</a>
				</li>
				<li><a href="request.php">REQUEST</a></li>
				<li><a href="join.php">JOIN</a></li>
				<li><a href="donate.php">DONATE</a></li>
				<li><a href="causes.php">CAUSES</a></li>
				<li><a href="reviews.php">REVIEWS</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<br>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<i class="fa fa-bars" onclick="showMenu()"></i>
	</nav>
	<h1>Mission and Vision</h1>
</section>
<!----- Course ------>

<section class="members">
	

	<div class="row">
		<div class="members-col">
			<h3>Mission Statement</h3> 
			<p>Striving to be a grateful parish following Christ by loving God, and loving our neighbors as ourselves through our words, deeds, and thoughts.</p>
		</div>

		<div class="members-col">
			<h3>Vision Statement</h3> 
			<p>Nourished at the table of Word and Sacrament, and enlivened by the Holy Spirit, Sacred Heart parish strives to build on the discipleship and the rich faith tradition begun here in Sauk Rapids in 1919, and to be conformed to the image of Christ. We are believers sharing in prayer, faith, love and service. Our parish is committed to:</p>
			<p>Deepening prayer life through meaningful celebrations of the Sacraments, especially the Eucharist, and other prayer times both communal and individual.</p>
			<p>Cultivating a culture of stewardship in which time, talent and treasure are recognized as gifts from God, gratefully and freely given for furthering God’s Kingdom.</p>
			<p>Forming families through faith formation and enrichment opportunities for all ages, including support of Catholic school education, a tradition in the parish since 1923.</p>
			<p>Welcoming all in the name of the Sacred Heart of Jesus and reaching out to our neighbors in Christ locally, within our country, and across the globe.</p>
			<p>Proclaiming the gospel by being a voice for the powerless, working for peace, and respecting the planet on which we live.</p>
		</div>
	</div>
</section>

<!-------- Call To Action -------->

<section class="cta">
	<h1>Be A Servant <br> Be One of Us</h1>
	<a href="contact.html" class="hero-btn">CONTACT US</a>
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