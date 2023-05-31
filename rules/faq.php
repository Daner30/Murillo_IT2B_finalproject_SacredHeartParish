<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sacred Heart Parish</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" type="image/x-icon" href="../img/logo.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="header">
	<nav>
		<a href="../index.php"><img src="../img/logo.png"></a>
		<div class="nav-links" id="navLinks">
			<i class="fa fa-times" onclick="hideMenu()"></i>
		</div>
	</nav>
</section>


<div class="faq-container"></div><script channelShortName="sacred-heart-parish" id="faq-question-list-script" src="https://static.faqabout.me/widgets/question-list-widget.min.js"></script>



<!-------- Footer -------->

<section class="footer">
	<h4>About Us</h4>
	<div class="rules">
		<a href="termsofuse.php"><p>terms of use</p></a>
		<a href="privacyandpolicy.php"><p>privacy & policy</p></a>
		<a href="faq.php"><p>FAQ</p></a>
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