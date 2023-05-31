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
				<li><a href="missionvision.php">MISSION & VISION</a></li>
				<li><a href="tencommandments.php" class="active">TEN COMMANDMENTS</a></li>
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
	<h1>Ten Commandments</h1>
</section>
<!----- Course ------>

<section class="tencommandment">
	<h1>The Ten Commandments</h1>

	<div class="row">
		<div class="tencommandment-col">
			<h3>Commandment: 1</h3><br>
			<h3>“Thou shalt have no other gods before me.”</h3>
				<p>Exodus 20:3</p>
				<h3>God wants what is best for you. If you put something else before Him in your life, it’s harder for him to bless you.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 2</h3><br>
			<h3>“Thou shalt not make unto thee any graven image.”</h3>
				<p>Exodus 20:4</p>
				<h3>Anything you worship more than God is a “graven image.” Cars, clothes, sports, even our jobs are dangerous things to worship because they can go away. But God will never go away, and that’s why it’s best for us to only worship Him.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 3</h3><br>
			<h3>“Thou shalt not take the name of the Lord thy God in vain.” </h3>
				<p>Exodus 20:7 </p>
				<h3>This can mean using God’s name like a swear word, or it can mean saying you are a Christian but not living or acting like Jesus would want you to act.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 4</h3><br>
			<h3>“Remember the sabbath day, to keep it holy.”</h3>
				<p>Exodus 20:8–10 </p>
				<h3>Sunday, or the Sabbath day, is a day we can all go to church, worship God, and learn how to be better people and Christians. Keeping it holy means doing our best to remember Him throughout the day.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 5</h3><br>
			<h3>“Honour thy father and thy mother.”</h3>
				<p>Exodus 20:12<br>
				<h3>It’s important to show our parents respect. This might look different for everyone, but we should always try to love and care for those who cared for us first.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 6</h3><br>
			<h3>“Thou shalt not kill.”</h3>
				<p>Exodus 20:13</p>
				<h3>A simple but important rule for anyone.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 7</h3><br>
			<h3>“Thou shalt not commit adultery.”</h3>
				<p>Exodus 20:14</p>
				<h3>Men and women make promises to each other when they are married. These promises are important, and breaking them causes deep sadness. Keeping those promises help men and women have happy marriages and happy lives.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 8</h3><br>
			<h3>“Thou shalt not steal.”</h3>
				<p>Exodus 20:15</p>
				<h3>It is important to God that His children are honest with each other. Taking anything that doesn’t belong to you is stealing, and is against His commandment.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 9</h3><br>
			<h3>“Thou shalt not bear false witness against thy neighbour.”</h3>
				<p>Exodus 20:16</p>
				<h3>This one is about honesty. If you lie to someone, you are “bearing false witness,” and may cause harm to yourself and to others.</h3>
		</div>
		<div class="tencommandment-col">
			<h3>Commandment: 10</h3><br>
			<h3>“Thou shalt not covet.”</h3>
				<p>Exodus 20:17</p>
				<h3>To covet means to be so jealous of something someone else has that you want it desperately. Coveting makes a person miserable and keeps them from putting God first. This commandment helps keep you from falling into this bad habit.</h3>
		</div>
	</div>
</section>

<div class="schedule-col">
			<img src="img/10t.jpg">
		</div>
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