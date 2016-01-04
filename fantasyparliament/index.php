<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns:fb="http://www.facebook.com/2008/fbml" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>FantasyParliament</title>

	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
    
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">

	<link rel="shortcut icon" href="assets/icons/iconAkram.png">
    
    <script src="assets/js/modernizr.custom.js"></script>
       
</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start -->

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start"><img width="20%" src="assets/img/logo-big.png"/></div>
			<h1><span class="myRed">F</span>antasy <span class="myRed">P</span>arliament</h1>
			<div class="start">Parliament Based Web Game<br/></div>
			<ul class="social-links">
						<li><a href="#" target="_blank" class="wow fadeInUp gras" data-wow-delay=".1s"><i class="fa fa-facebook-square fa-lg"></i></a></li>
						<li><a href="#"  target="_blank" class="wow fadeInUp gras" data-wow-delay=".4s"><i class="fa fa-twitter fa-lg" ></i></a></li>
						<li><a href="#" target="_blank" class="wow fadeInUp gras" data-wow-delay=".5s"><i class="fa fa-google-plus fa-lg"></i></a></li>
					</ul>
		</div>

        <a href="#experience">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
										
					<ul class="nav navbar-nav navbar-left">
					<?php if ($_SESSION['FBID']): ?>
					  <li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture" style="margin-top:Opx;"/> </li>
					   <li><a> Hello <?php echo $_SESSION['FULLNAME']; ?></a></li>
					</ul>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li> 
 						<li><a href="logout.php">Logout</a></li>
						<?php else:
						 header('Location: http://fantasyparliament.akramrekik.com/index.php');
						?>
						<li><a href="index.php">Home</a></li> 
						<li><a href="fbconfig.php">Connect</a></li>
						<?php endif; ?>
					</ul>
				</div>
				</div>

			</div><!-- .container -->

		</nav>

	</header>


	<!-- Navigation end -->

    <!-- app -->

	<section id="app" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Enjoy the game</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							
						</div>
					</div>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<!-- <span class="icon-users"></span> -->
							<a href="drag.php" >
								<img src="assets/images/ballon.png" width="55px">
							</a>	
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Make your team</h3>
							<div class="iconbox-desc">Choose from our deputies and make your custom team. Play and win each 3 months if your team is composed by the best.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<!-- <span class="icon-puzzle"></span> -->
							<a href="details.php">
								<img src="assets/images/ballon.png" width="55px">
							</a>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">View your results</h3>
							<div class="iconbox-desc">
								Based on our statistics, you can view your detailed results each week and you can see your rank compared to other users.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<a href="all_deputes.php">
								<img src="assets/images/ballon.png" width="55px">
							</a>	
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Evaluate the deputees</h3>
							<div class="iconbox-desc">
                                You can join our evaluation interface and judge deputies, make comments and ask them questions using your fb acoount.
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<a href="details.php">
								<img src="assets/images/ballon.png" width="55px">
							</a>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">top users</h3>
							<div class="iconbox-desc">
								Get our top users scores and try to improve your self and be one of them. Be the best!!!
							</div>
						</div>
					</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>





	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li><a href="#" target="_blank" class="wow fadeInUp gras" data-wow-delay=".1s"><i class="fa fa-facebook-square fa-lg"></i></a></li>
						<li><a href="#"  target="_blank" class="wow fadeInUp gras" data-wow-delay=".4s"><i class="fa fa-twitter fa-lg" ></i></a></li>
						<li><a href="#" target="_blank" class="wow fadeInUp gras" data-wow-delay=".5s"><i class="fa fa-google-plus fa-lg"></i></a></li>
					</ul>

					
                    <p class="copyright">
                        © I watch <span class="fa fa-heart fa-2x animated pulse"></span>

					</p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>
    
    <!-- Scroll to top end-->

	<!-- Javascript files -->

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>