<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'admin/dbconfig.php';  ?>
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
					<a class="navbar-brand" href="index.html">

					</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html">Home</a></li>

                        <li><a href="#">Login</a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>





	<section id="details" class="pfblock-gray">
		<div class="container">
            <div class="row">

				<div class="col-sm-6 col-sm-offset-3 title-section">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title"><br>My Stats For this Tournament</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">

						</div>
					</div>

				</div>

			</div>
			<div class="row">

                <div class="col-md-4 stat-week charts">
                    <div class="title-chart">My top deputes</div>
                    <canvas id="canvas1"   width="50%" height="20%"></canvas>
                </div>
                <div class="col-md-4 stat-week charts">
                    <div class="title-chart">Weekly evolution</div>
                    <canvas id="canvas"  class="charts" width="50%" height="20%"></canvas>
                </div>
                <div class="col-md-4 stat-week charts">
                    <div class="title-chart">Top team comparaison</div>
                    <canvas id="canvas2"  class="charts" width="50%" height="20%"></canvas>
                </div>

            </div>

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
               
            <?php  
          
                $res = mysql_query('SELECT * FROM Equipe WHERE id="1"') or die(mysql_error());
                $data =mysql_fetch_row($res);
                $team = $data[2];
                $players = explode(',', $team);
                
                for ($i=0; $i < 11 ; $i++) { 
                  # code...
                $result = mysql_query('SELECT * FROM Depute WHERE id = "'.$players[$i].'"') or die(mysql_error());
                $player = mysql_fetch_array($result); ?>
                <div class="panel panel-default col-md-1 player">
		            <div class="panel-body">
    			        <img src="<?php echo 'assets/img/'.$players[$i]; ?>.jpg" width=100% class="img_player">
  		            </div>
  		        <div class="panel-footer"><strong class="note-deputee"> <?php echo -2*$player['r1']+3*$player['r2']+5*$player['r3']+$player['r4']+2*$player['r5']+$player['r6']?> </strong></div>
	            </div>
         
              <?php } ?>
               

			     </div><!-- .row -->
<div class="row">

				<div class="col-sm-6 col-sm-offset-3 title-section">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title"><br>Top Ranked this week</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">

						</div>
					</div>

				</div>

			</div>
            <div class="row">
               <table class = "table table-striped ">

   <thead>
      <tr>
         <th>Name</th>
         <th>User</th>
         <th>Score</th>
      </tr>
   </thead>

   <tbody>
      <tr>
         <td>Winners</td>
         <td>mostfa46</td>
         <td>560001</td>
      </tr>

      <tr>
         <td>Nouwab</td>
         <td>lamia</td>
         <td>400003</td>
      </tr>

      <tr>
         <td>taraji</td>
         <td>khaled1919</td>
         <td>311027</td>
      </tr>

         <tr>
         <td>Nahdha2</td>
         <td>Malek</td>
         <td>200001</td>
      </tr>

         <tr>
         <td>NIDA</td>
         <td>SAFA_Lahmar</td>
         <td>145457</td>
      </tr>

         <tr>
         <td>FARI9</td>
         <td>SLIM46</td>
         <td>90000</td>
      </tr>
   </tbody>

</table><br><br>
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
