<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pyramid Coffee</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style2.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.has-dropdown').click(function() {
                $(this).toggleClass('active');
                $('.dropdown', this).toggleClass('active');
            });
        });
    </script>

	<style>
		.dropdown.active > a {
			text-decoration: underline;
		}

		/* Add this style to maintain underline when hovering over the active dropdown item */
		.dropdown.active > a:hover {
			text-decoration: underline;
		}
	</style>

	
	</head>

	<body>
	
	<!-- Navbar -->
		<div class="fh5co-loader"></div>
		
		<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center logo-wrap">
							<div id="fh5co-logo"><a href="/">Pyramid Coffee</a></div>
						</div>
						<div class="col-xs-12 text-center menu-1 menu-wrap">
							<ul>
								<li <?php if ($_SERVER['REQUEST_URI'] == '/') echo 'class="active"'; ?>><a href="/">Home</a></li>
								<li <?php if ($_SERVER['REQUEST_URI'] == '/menu') echo 'class="active has-dropdown"'; else echo 'class="has-dropdown"'; ?>><a href="/menu">Menu</a>
									<ul class="dropdown">
										<li><a href="#food" onclick="scrollToSection('food-section')">Food</a></li>
										<li><a href="#drink" onclick="scrollToSection('food-section')">Drink</a></li>
										<li><a href="#dessert" onclick="scrollToSection('food-section')">Dessert</a></li>
									</ul></li>
								<li <?php if ($_SERVER['REQUEST_URI'] == '/gallery') echo 'class="active"'; ?>><a href="/gallery">Gallery</a></li>
								<li <?php if ($_SERVER['REQUEST_URI'] == '/reservation') echo 'class="active"'; ?>><a href="/reservation">Reservation</a></li>
								<li <?php if ($_SERVER['REQUEST_URI'] == '/about') echo 'class="active"'; ?>><a href="/about">About</a></li>
								<li <?php if ($_SERVER['REQUEST_URI'] == '/contact') echo 'class="active"'; ?>><a href="/contact">Contact</a></li>
							</ul>
						</div>
					</div>
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener("click", function(e){
		e.preventDefault();
		document.querySelector(this.getAttribute("href")).scrollIntoView({
			behavior : "smooth"
		})
	})
  })
</script>


				</div>
			<!-- </div> -->
		</nav>

		@yield('container')

	{{-- <!-- Testimoni -->
		<div id="fh5co-featured-testimony" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 fh5co-heading animate-box">
						<h2>Testimony</h2>
						<div class="row">
							<div class="col-md-6">
								<p>Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam </p>
							</div>
						</div>
					</div>
	
					<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
							<img src="images/person_1.jpg" alt="">
					</div>
					<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
						<blockquote>
							<p> &ldquo; Makanannya enak sekali. &rdquo;</p>
							<p class="author"><cite>&mdash; Timothy Sean Manullang</cite></p>
						</blockquote>
					</div>
				</div>
			</div>
		</div> --}}
	
		<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>Hai bestie, weekend mau nongkrong dimana nih? Sudah ada tempat nongkrong yang ingin dikunjungi? Kalau belum mendingan datang ke Pyramid Coffee yang enak banget buat nongkrong, apalagi nongkrongnya rame-rame. Kalau nggak percaya bisa langsung dipesan aja tempat duduknya.</p>
					<p><a href="/reservation" class="btn btn-primary btn-outline">Book Now</a></p>
				</div>
			</div>
		</div>
	</div>
		</div>
	
	<!-- Footer -->
	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>Open Hours</h4>
					<div class="wow fadeInUp" data-wow-delay="0.4s">
						<p>Sunday: Closed</p>
						<div>
							<strong>Monday to Friday</strong>
							<p>3:00 PM - 10:00 PM</p>
						</div>
						<div>
							<strong>Saturday</strong>
							<p>3:00 PM - 12:00 PM</p>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="/">Home</a></li>
						<li><a href="/menu">Menu</a></li>
						<li><a href="/gallery">Gallery</a></li>
						<li><a href="/about">Reservation</a></li>
						<li><a href="/gallery">About</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>

				
				<!--- Contact--->
				<div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>Ruko Nusaloka BSD, <br> Blok RH No. 1 Sektor 14.6, <br>BSD CITY.</li>
						<li><a href="tel://0821 2290 3732 | 0821 2230 5033">0821 2290 3732 | 0821 2230 5033</a></li>
						<li><a href="mailto:pyramidcoffee@gmail.com">pyramidcoffee@gmail.com</a></li>
					</ul>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block"><br>Copyright &copy; 2023 <br>Pyramid Coffee</small> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>