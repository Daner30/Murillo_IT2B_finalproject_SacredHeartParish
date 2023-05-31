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
				<li><a href="tencommandments.php">TEN COMMANDMENTS</a></li>
				<li><a href="schedule.php">SCHEDULE</a></li>
				<li><a href="gallery.php">GALLERY</a>
				</li>
				<li><a href="request.php">REQUEST</a></li>
				<li><a href="join.php">JOIN</a></li>
				<li><a href="donate.php">DONATE</a></li>
				<li><a href="causes.php">CAUSES</a></li>
				<li><a href="reviews.php" class="active">REVIEWS</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<br>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<i class="fa fa-bars" onclick="showMenu()"></i>
	</nav>
	<h1>Reviews</h1>
</section>
<!----- Course ------>

<section class="course">
	

	<div class="testimonials">
      <div class="inner">
        <h1>Reviews</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="img/p1.jpg" alt="">
              <div class="name">Jacob Ramyon</div>
              	<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>

              <p>
                The website is easy to use.
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="img/p3.jpg" alt="">
              <div class="name">Don Julio Murillos</div>
              	<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>

              <p>
               I had a wonderful experience and I would highly recommend this Website to others
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="img/p4.jpg" alt="">
              <div class="name">Abbie Gail Reyes</div>
              	<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>

              <p>
                Loved my expercience at Sacred Heart Parish! Super-User friendly that makes it easy to use it. Excellent Service. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-------- Call To Action -------->

<section class="cta">
	<h1>Give us some feedback</h1>
	<a href="contact.php" class="hero-btn">Contact Us</a>
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