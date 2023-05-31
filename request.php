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
				<li><a href="request.php" class="active">REQUEST</a></li>
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
	<h1>Request</h1>
</section>

<!-------- about us content -------->

<script type="text/javascript">
		//Function for Showing the Password
		function myFunction() {
  			var x = document.getElementById("txtpassword");
  			if (x.type === "password") {
    			x.type = "text";
  			} else {
    			x.type = "password";
  			}
		}
		//Function for Getting input on Forms using Javascript and displaying the data using Alert Box
		function getData(){
			var fname = document.getElementById("txtFname").value;
			var lname = document.getElementById("txtLname").value;
			var age = document.getElementById("txtage").value;
			
			alert("Name: "+fname+" "+lname+" \nAge: "+age);

		}
		//Function for using the Color Picker in Changing the Background Color of the Webpage
		function selectColor() {
         let color = document.getElementById('favColor');
         // changing the background color
         document.body.style.backgroundColor = color.value;
       } 
	</script>
</head>
<body>
			<div class="content">
				<h1 id="theform">Form Controls</h1>
				<table>
				<form name="contact-us-form" action="" method="">
					<tr>
						<td><label>Firstname:</label></td>
						<td><input type="text" placeholder="Enter Firstname" id="txtFname" name="txtFname"/></td>
					</tr>
					<tr>
						<td><label>Lastname:</label></td>
						<td><input type="text" placeholder="Enter Lastname" id="txtLname"name="txtLname"/></td>
					</tr>
					<tr>
						<td><label>Age:</label></td>
						<td><input type="number" id="txtage" name="txtage"></td>
					</tr>
					<tr>
						<td><label>Email:</label></td>
						<td><input type="email" id="txtEmail" name="txtEmail" placeholder="Enter Email" /></td>
					</tr>
					<tr>
						<td><label>Password:</label></td>
						<td>
							<input id="txtpassword" type="password" name="txtpassword" placeholder="Enter Password">
							<input type="checkbox" onclick="myFunction()">Show Password
						</td>
					</tr>
					<tr>
					</tr>
					<tr>
						<td><label>Date:</label></td>
						<td><input type="date" id="txtdate" name="txtdate"></td>
					</tr>
					<tr>
						<td><label>Time:</label></td>
						<td><input type="time" id="txttime" name="txttime"></td>
					</tr>
					
					<tr>
						<td><label>Profile Picture:</label></td>
						<td><input type="file" name="flDP"></td>
					</tr>
					<tr>
						<td>Select Gender:</td>
						<td>
							<select name="Gender">
								<option selected disabled>--Select Gender--</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Civil Status:</td>
						<td>
							<input type="radio" name="rdCS">Single</input>
							<input type="radio" name="rdCS">Married</input>
							<input type="radio" name="rdCS">Widowed</input>
						</td>
					</tr>
					<tr>
						<td><label>Your Request:</label></td>
						<td><textarea name="textarea1" cols="30" rows="5"></textarea></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="SUBMIT" onclick="getData()" />
						<input type="reset" value="CLEAR"/></td>
					</tr>
					
					
					
				</form>
			</table>
	
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