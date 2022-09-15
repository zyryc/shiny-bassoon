<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ? : '' ?></title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="twitter:title" content="Programming Assignment Help | Online Computer Programming Help | Code Tutoring | Programming help">
	<meta name="description" content="Assignment Expert provides you with online programming assignment help. Your computer science assignment will be of high quality completed within the provided time period in order to grant you success.">
	<meta name="twitter:description" content="Assignment Expert provides you with online programming assignment help. Your computer science assignment will be of high quality completed within the provided time period in order to grant you success.">
	<meta property="og:title" content="Programming Assignment Help | Online Computer Programming Help">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.codetutors.tk/">
	<meta property="og:image" content="/assets/images/logo.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta name="twitter:image" content="/assets/images/logo.png">
	<meta name="twitter:card" content="summary">
	<link rel="icon" href="/favicon.ico">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" type="text/css">
    <!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/font/css/font-awesome.min.css" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="<?= base_url() ?>assets/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/owl-carousel/owl.theme.css" rel="stylesheet">
	
	 <link rel="stylesheet" href="<?= base_url() ?>assets/css/isotope-docs.css" media="screen">
	  <link rel="stylesheet" href="<?= base_url() ?>assets/css/baguetteBox.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
		
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url() ?>#"><img src="<?= base_url() ?>assets/images/logo.png" alt="Logo">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
			<a href="<?= base_url() ?>#home" class="page-scroll">Home</a>

					</li>
					<li>
						<a class="page-scroll" href="<?= base_url() ?>#about">About</a>
					</li>
					<li>
						<a class="page-scroll" href="<?= base_url() ?>#Services">Services</a>
					</li>
					<li>
						<a class="page-scroll" href="<?= base_url() ?>#contact">Contact</a>
					</li>
                    
					<li>
			    <a href="<?= base_url() ?>make-order#make-order" class="page-scroll">Make Order</a>
					</li>
                    
					
                        <?php if ($this->ion_auth->logged_in()): ?>
                <?php if ($this->ion_auth->is_admin()): ?>
                    <li>
                <a href="<?= base_url() ?>admin" class="page-scroll">Admin panel</a>
                </li>
            <?php endif; ?>
                <li>
                <a href="<?= base_url() ?>my-orders#my-orders" class="page-scroll">My Orders</a>
            </li>
            
            <li>
                <a href="<?= base_url() ?>auth/logout" class="page-scroll">Logout</a>
                </li>
                <?php else: ?>
                    <li>
                <a href="<?= base_url() ?>auth/login" class="page-scroll">Login</a>
                </li>
            <?php endif; ?>
				</ul>
			</div>
			<!-- =============== navbar-collapse =============== -->

		</div>
	</div>
	<!-- =============== container-fluid =============== -->
</nav>
<header id="home" class="header">
	<!-- =============== container =============== -->
	<div class="container">
		<div class="header-content row">


			<div id="owl-demo" class="owl-carousel header1">
				<?php if($this->uri->segment(1) == null): ?>
                    <div>
					<div class="col-xs-12 col-sm-6 col-md-6 header-text">
						<h2 class="wow bounceIn animated" data-wow-delay=".40s">CODE <span>TUTORS</span> FOR
							<br />ASSIGNMENT HELP</h2>
						<h3 class="wow bounceIn animated" data-wow-delay=".50s">ASSIGNMENT HELP </h3>
						<p class="wow bounceIn animated" data-wow-delay=".60s">Make an Order now</p>
						<p>
							<a class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s" href="<?= base_url() ?>make-order#make-order"><i
									class="hbtn"></i> <span>Click Here</span></i>
				</a>
						</p>
					</div>
				</div>
				<div>
					<div class="col-xs-12 col-sm-6 col-md-6 header-text">
						<h2 class="wow bounceIn animated" data-wow-delay=".40s">CODE <span>TUTORS</span> FOR
							<br />ASSIGNMENT HELP</h2>
						<h3 class="wow bounceIn animated" data-wow-delay=".50s">ASSIGNMENT HELP </h3>
						<p class="wow bounceIn animated" data-wow-delay=".60s">Lorem ipsum dolor sit amet, consectetur
							adipiscing elit.We ensure sit amet, consectetur adipiscing elit</p>
						<p>
							<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i
									class="hbtn"></i> <span>Click Here</span></i>
							</div>
						</p>
					</div>
				</div>
                <?php else: ?>
                    <div>
					<div class="col-xs-12 col-sm-6 col-md-6 header-text">
						<h2 class="wow bounceIn animated" data-wow-delay=".40s"> <?= $title ?></h2>
						<h3 class="wow bounceIn animated" data-wow-delay=".50s">ASSIGNMENT HELP </h3>
						<p class="wow bounceIn animated" data-wow-delay=".60s">Lorem ipsum dolor sit amet, consectetur
							adipiscing elit.We ensure sit amet, consectetur adipiscing elit</p>
						<p>
							<div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i
									class="hbtn"></i> <span>Click Here</span></i>
							</div>
						</p>
					</div>
				</div>
                <?php endif; ?>
			</div>
		</div>



	</div>
	<!-- =============== container end =============== -->
</header>
	<main>
		<?php if (isset($view)) { $this->load->view($view); } ?>
	</main>
	<footer>
	</footer>
</body>

<!-- =============== jQuery =============== -->
<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/isotope-docs.min.js"></script>
<!-- =============== Bootstrap Core JavaScript =============== -->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- =============== Plugin JavaScript =============== -->
<script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.fittext.js"></script>
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<!-- =============== owl carousel =============== -->
<script src="<?= base_url() ?>assets/owl-carousel/owl.carousel.js"></script>
<!-- Isotope does NOT require jQuery. But it does make things easier -->

<script src="<?= base_url() ?>assets/js/baguetteBox.js" async></script>
<script src="<?= base_url() ?>assets/js/plugins.js" async></script>

<!-- =============== Custom Theme JavaScript =============== -->
<script src="<?= base_url() ?>assets/js/creative.js"> </script>
<script src="<?= base_url() ?>assets/js/jquery.nicescroll.min.js"></script>

<script>
	$(document).ready(function () {

		var nice = $("html").niceScroll(); // The document page (body)

		$("#div1").html($("#div1").html() + ' ' + nice.version);

		$("#boxscroll").niceScroll({
			cursorborder: "",
			cursorcolor: "#00F",
			boxzoom: true
		}); // First scrollable DIV

		$("#boxscroll2").niceScroll("#contentscroll2", {
			cursorcolor: "#F00",
			cursoropacitymax: 0.7,
			boxzoom: true,
			touchbehavior: true
		}); // Second scrollable DIV
		$("#boxframe").niceScroll("#boxscroll3", {
			cursorcolor: "#0F0",
			cursoropacitymax: 0.7,
			boxzoom: true,
			touchbehavior: true
		}); // This is an IFrame (iPad compatible)

		$("#boxscroll4").niceScroll("#boxscroll4 .wrapper", {
			boxzoom: true
		}); // hw acceleration enabled when using wrapper

	});

</script>
<script>
	window.onload = function () {
		if (typeof oldIE === 'undefined' && Object.keys)
			hljs.initHighlighting();

		baguetteBox.run('.baguetteBoxOne');
		baguetteBox.run('.baguetteBoxTwo');
		baguetteBox.run('.baguetteBoxThree', {
			animation: 'fadeIn'
		});
		baguetteBox.run('.baguetteBoxFour', {
			buttons: false
		});
		baguetteBox.run('.baguetteBoxFive', {
			captions: function (element) {
				return element.getElementsByTagName('img')[0].alt;
			}
		});
	};

</script>


</html>
