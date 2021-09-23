<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<!-- web view -->
	<div id="home" style="width: 100%; background:linear-gradient(180deg, #FFFFFF 0%, #F2F5FA 100%);">
		<div class="content" style="width:40% ;">
		<nav>
			<div>
				<img src="img/logo_pineapple.svg">
			</div>
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">How&nbspit&nbspworks</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
			<form method="post" action="insert.php" id="my_form">
			<div class="main">
				<div>
					<h2>Subscribe to newsletter</h2>
					<div class="para">
						<p>Subscribe to our newsletter and get 10% discount on<br> pineapple glasses</p>
					</div>
				</div><br><br>
				<div class="mail">
					<input type="text" id="email" placeholder="Type your email address here..." name="uname" required>
					<!-- <input type="submit" value="" class="submit"> -->
					<input type="image" id="image"  class="submit" alt="Login" src="img/arrow.png">
					<!-- <a href="javascript: submitForm();" class="btn"><img src="img/ic_arrow.svg"></a> -->
				</div>
			</div>
			</form>
			<div class="checkbox">
				<form>
					<input id="checkterms" type="checkbox">&nbsp&nbsp
					<label> I agree to <a href="#"> terms of service</a> </label>
				</form>
			</div>
			<hr>
			<div class="icon" >
				<a href="#" class="fb"><i class="fa fa-facebook"></i></a>
				<a href="#" class="insta"><i class="fa fa-instagram"></i></a>
				<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
				<a href="#" class="yu"><i class="fa fa-youtube"></i></a>
			</div>
		</div>
		<div class="banner" style="width: 60%;">
			<img src="img/image_summer.png" >
		</div>
	</div>
	<!-- web view end-->
	<!-- mobile view -->
	<div class="mobile-view">
		<nav>
			<div>
				<img src="img/logo_pineapple.svg">
			</div>
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">How&nbspit&nbspworks</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<div class="content1">
			<img src="img/image_summer.png">
			<div class="box">
				<div class="heading">
					<h2>Subscribe&nbspto&nbspnewsletter</h2>
					<p>Subscribe to our newsletter and get 10% discount on<br> pineapple glasses</p>
				</div>
				<div class="mail">
					<div class="vl"></div>
					<input type="text" id="email" placeholder="Type your email address here..." name="uname" required >
					<!-- <a href="thanks_page.html" class="btn"><img src="img/ic_arrow.svg"></a> -->
					<input type="image" id="image"  class="submit" alt="Login" src="img/arrow.png">

				</div>
				<div class="checkbox">
					<form>
						<input type="checkbox">
						<label> I agree to <a href="#"> terms of service</a> </label>
					</form>
				</div>
				<hr>
				<div class="icon">
				<a href="#" class="fb"><i class="fa fa-facebook"></i></a>
				<a href="#" class="insta"><i class="fa fa-instagram"></i></a>
				<a href="#" class="tw"><i class="fa fa-twitter"></i></a>
				<a href="#" class="yu"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- mobile view end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
