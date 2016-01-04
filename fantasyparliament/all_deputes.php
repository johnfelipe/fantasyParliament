<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>FantasyParliament</title>
<?php require 'admin/dbconfig.php' ; ?>
	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
    <script src="assets/js/Chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">

	<link rel="shortcut icon" href="assets/icons/iconAkram.png">

    <script src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript">
  


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
				</div>

			</div><!-- .container -->

		</nav>

	</header>





	<section id="details" class="pfblock-gray">
		<div class="container">

             <div class="row">

				<div class="col-sm-6 col-sm-offset-3 title-section">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title"><br>This Week Results</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">

						</div>
					</div>

				</div>

			</div>

            <div class="row">

            <?php $result = mysql_query('SELECT * FROM Depute');
                  while ($data = mysql_fetch_array($result)) { 
                    $score = -1*$data['r1'] + 2*$data['r1'] + 2*$data['r1'] + 4*$data['r1'] + 5*$data['r1'] + $data['r1'] ;
                    ?>
                        <div class="panel panel-default col-md-1 player">
                        <a href="depute.php?id=<?php echo $data['id'];?>">
                <div class="panel-body">
                  <img src="images/<?php echo $data['id']; ?>.png" width=100% class="img_player">
                  </div> </a>
              <div class="panel-footer"><strong class="note-deputee"><?php echo $score ?></strong></div>
              </div>
               <?php   }
             ?>
              


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
    <script>
   var lineChartData = {
             labels: ["week1", "week2", "week3"],
             datasets: [{
                 label: "My Second dataset",
                 fillColor: "rgba(151,187,205,0.2)",
                 strokeColor: "rgba(151,187,205,1)",
                 pointColor: "rgba(151,187,205,1)",
                 pointStrokeColor: "#fff",
                 pointHighlightFill: "#fff",
                 pointHighlightStroke: "rgba(151,187,205,1)",
                 data: [20, 10, 30]
             }]
         }

         var options = {
             responsive: true,
             scaleShowGridLines: false,
             scaleLineColor: "rgba(0,0,0,.1)",
         }

         var ctx = document.getElementById("canvas").getContext("2d");
         window.myLine = new Chart(ctx).Line(lineChartData, options);



    </script>

    <script>
        var data = [
    {
        value: 20,
        color:"#FF0000",
        highlight: "#FF0000",
        label: "My team"
    },
    {
        value: 50,
        color: "#58ACFA",
        highlight: "#58ACFA",
        label: "3rd"
    },
    {
        value: 70,
        color: "#58FA82",
        highlight: "#58FA82",
        label: "2nd"
    },
    {
        value: 100,
        color: "#D0FA58",
        highlight: "#D0FA58",
        label: "1st"
    }

];

    var ctx = document.getElementById("canvas2").getContext("2d");
    window.myLine = new Chart(ctx).PolarArea(data, options);


    </script>

    <script>

    var data = [
    {
        value: 20,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Mourad"
    },
    {
        value: 30,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Mohamed"
    },
    {
        value: 35,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Basma"
    }
]


    var ctx = document.getElementById("canvas1").getContext("2d");
    window.myPieChart = new Chart(ctx).Pie(data,options);
    </script>

</body>
</html>