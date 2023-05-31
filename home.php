<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
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
	<section class="header">
	<nav>
		<a href="home.php"><img src="img/logo.png"></a>
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()"></i>

			<ul>
				<li><a href="home.php" class="active">HOME</a></li>
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
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT</a></li>
				<br>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<i class="fa fa-bars" onclick="showMenu()"></i>
	</nav>

	<!-- Slideshow container -->
	<div class="banner">
	<div class="slideshow-container">

  	<!-- Full-width images with number and caption text -->
  	<div class="mySlides fade">
    	<div class="numbertext"></div>
    	<img src="img/banner2.jpg" style="width:100%">
    	<div class="text">Holy Week</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext"></div>
    	<img src="img/banner1.jpg" style="width:100%">
    	<div class="text">Holy Week</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext"></div>
    	<img src="img/banner3.jpg" style="width:100%">
    	<div class="text">Buling</div>
  	</div>

  	<div class="mySlides fade">
    	<div class="numbertext"></div>
    	<img src="img/banner4.jpg" style="width:100%">
    	<div class="text">Station of the Cross</div>
  	</div><br>
  	<a href="gallery.php" class="hero-btn">View More</a>


	</div>
	<br>

	<!-- The dots/circles -->
	<div style="text-align:center">
  	<span class="dot" onclick="currentSlide(1)"></span>
  	<span class="dot" onclick="currentSlide(2)"></span>
  	<span class="dot" onclick="currentSlide(3)"></span>
  	<span class="dot" onclick="currentSlide(4)"></span>
	</div>
	</div>


<!-------- JavaScript for Banner -------->

<script type="text/javascript">
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>	
</section>



<!-------- chapels -------->

<section class="chapels">
	<h1>Our Chapels</h1>
	<p>Sacred Heart Parish 7 Chapels</p>

	<div class="row">
		<div class="chapels-col">
			<img src="img/tabigue.png">
			<div class="layer">
				<h3>TABIGUE CHAPEL</h3>
			</div>
		</div>
		<div class="chapels-col">
			<img src="img/lupac.png">
			<div class="layer">
				<h3>LUPAC CHAPEL</h3>
			</div>
		</div>
		
		<div class="chapels-col">
			<img src="img/buliasnin.png">
			<div class="layer">
				<h3>BULIASNIN CHAPEL</h3>
			</div>
		</div>
	</div>
</section>		

<section class="chapels1">		
	<div class="row">	
		<div class="chapels-col">
			<img src="img/balogo.png">
			<div class="layer">
				<h3>BALOGO CHAPEL</h3>
			</div>
		</div>
		<div class="chapels-col">
			<img src="img/tabi.png">
			<div class="layer">
				<h3>TABI CHAPEL</h3>
			</div>
		</div>
		<div class="chapels-col">
			<img src="img/pili.png">
			<div class="layer">
				<h3>PILI CHAPEL</h3>
			</div>
		</div>	
</section>		

<section class="chapels2">		
	<div class="row">			
		<div class="chapels-col">
			<img src="img/maligaya.png">
			<div class="layer">
				<h3>MALIGAYA CHAPEL</h3>
			</div>
		</div>
	</div>
</section>				



<!-------- Parishioners -------->
<section class="testimonials">
	<h1>What Our Parishioners Says</h1>

	<div class="row">
		<div class="testimonial-col">
			<img src="img/jr.jpg">
			<div>
				<p>We were provided excellent customer service. All responses were prompt and professional. Clearly, the upfront statement on our policy stated it was limited which told us that our preliminary research was not well thought out.</p>
				<h3>Jay Park</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
		</div>
		<div class="testimonial-col">
			<img src="img/jpp.jpg">
			<div>
				<p>A fantastic organisation! Great cutomer support from beginning to end of the process. The team are really informed and go the extra mile at every stage. I would recommend them unreservedly.</p>
				<h3>Peter Sungyeok</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
		</div>
	</div>
	<a href="reviews.php" class="reviews-btn">Reviews</a>
</section>




<!-------- Call To Action -------->

<section class="cta">
	<h1>Be A Servant <br> Be One of Us</h1>
	<a href="join.php" class="hero-btn">JOIN US</a>
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
<?php }else {
	header("Location: login.php");
	exit;
} ?>