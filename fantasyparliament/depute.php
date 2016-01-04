<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require 'admin/dbconfig.php' ; ?>
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
    <script src="assets/js/Chart.js"></script>
<script src="assets/js/jquery-1.11.1.min.js"></script>
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">

	<link rel="shortcut icon" href="assets/icons/iconAkram.png">

    <script src="assets/js/modernizr.custom.js"></script>
    <script type="text/javascript">
    function up(){
    	$.ajax({
    type: 'POST',
   
    url: 'up.php',
    data: { 
        'id': <?php echo $_GET['id'] ?>, 
         
    },
    success: function(){
    	
        $('#up-score').html(parseInt($('#up-score').html()) + 1); 
    }
});
    };

    function down(){
$.ajax({
    type: 'POST',
    
    url: 'down.php',
    data: { 
        'id': <?php echo $_GET['id'] ?>, 
        
    },
    success: function(){
    	
        $('#down-score').html(parseInt($('#down-score').html()) + 1); 
    }
});
    }
    	$(document).ready(function(){

    		$('#up').on( "click", up);
    		$('#down').on( "click", down);

    	});

    </script>
</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start -->



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

			</div><!-- .container -->

		</nav>

	</header>





	<section id="details" class="pfblock-gray">
		<div class="container">

			<div class="row" style="margin-top:5%">
                <div class="col-md-4 text-center">
									<img width="30%"  src="images/<?php echo $_GET['id']; ?>.png"/>
                </div>
                <div class="col-md-4">
                <?php $res = mysql_query('SELECT top FROM top_flop WHERE id="'.$_GET['id'].'"');
$rows =mysql_fetch_row($res);
$top = $rows[0]; 
$res = mysql_query('SELECT flop FROM top_flop WHERE id="'.$_GET['id'].'"');
$rows =mysql_fetch_row($res);
$flop = $rows[0] ; ?>
									<div class="row">

											<div class="col-md-6 text-center">
													<i id='up'  style="color:green;" class="fa fa-thumbs-o-up icon-large" ></i>

													<div style="margin-top:7%">

														<span><strong id='up-score'><?php echo $top ?></strong>
														</div>
											</div>
											<div class="col-md-6 text-center">
													<i id='down' style="color:red;"class="fa fa-thumbs-o-down icon-large" ></i>
													<br>
											<div style="margin-top:7%">
												<span><strong id='down-score'><?php echo $flop ?></strong>
												</div>
												</div>
									</div>
                </div>
                <div class="col-md-4 stat-week charts">
                    <canvas id="canvas1"   width="50%" height="20%"></canvas>
                </div>


            </div>

						<div class="row">

			 <div class="col-sm-6 col-sm-offset-3 title-section">

				 <div class="pfblock-header wow fadeInUp">
					 <h2 class="pfblock-title"><br>What do you think about this deputy</h2>
					 <div class="pfblock-line"></div>
					 <div class="pfblock-subtitle">
					<div style="align:center;" class="fb-comments" data-href="http://fantasyparliament.akramrekik.com/depute.html"  data-numposts="5"></div>
    <div id="fb-root"></div>	
					 </div>
				 </div>

			 </div>

		 </div>



			</div>


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
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5&appId=433101910226827";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script>

    var data = [
    {
        value: <?php echo $top ?>,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "TOP"
    },
    {
        value: <?php echo $flop ?>,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "FLOP"
    }
]
     var options = {
             responsive: true,
             scaleShowGridLines: false,
             scaleLineColor: "rgba(0,0,0,.1)",
         }

    var ctx = document.getElementById("canvas1").getContext("2d");
    window.myPieChart = new Chart(ctx).Pie(data,options);
    </script>

</body>
</html>