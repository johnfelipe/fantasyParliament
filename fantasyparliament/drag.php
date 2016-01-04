<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <?php require 'admin/dbconfig.php';  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FantasyParliament</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/drag.css">

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">


  <link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
  <link href="assets/css/animate.css" rel="stylesheet">


  <link rel="shortcut icon" href="assets/icons/iconAkram.png">
<link href="assets/css/style.css" rel="stylesheet" media="screen">	
  <script src="assets/js/modernizr.custom.js"></script>

  <style type="text/css">

      .btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
  </style>

  <script type="text/javascript">
   Team = []; 
   function drop(){
   	$( "#1" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
           $('#1').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    }); 
      $( "#2" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#2').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
      
      $( "#3" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#3').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
       
      $( "#4" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#4').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
     
      $( "#5" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#5').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
      
      $( "#6" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#6').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
      
      $( "#7" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#7').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
     
      $( "#8" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#8').droppable( "disable" );
        
        a = ui.draggable[0].children[0].src;
        console.log('in'+a);
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
     
      $( "#9" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#9').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
     
      $( "#10" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#10').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
   
      $( "#11" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
          $('#11').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('images/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
        console.log('out');
        
      }
    });
   }
  function confirm(){
    console.log(Team);
    var name = $('#name').val(); 
    if(Team.length == 11 && !(name === '') ){
    ch ='';

    for( var i=0 ; i< Team.length ; i++){
      ch = ch+Team[i]+',';
    }
    ch = ch.substring(0,ch.length-1);
    console.log(ch);
    $.ajax({
   url: 'maj.php',
   data: {
      ch: ch ,
      idfb : '<?php echo $_SESSION['FBID'] ; ?>' , 
      name : name , 
   },
   error: function() {
      alert('error');
   },
   success: function(data) {
   		$('#msg').html('equipe enregistrée');
   },
   type: 'POST'
});
 }
 else {
 	$('#msg').html('completez votre équipe et saisir son nom avant de confirmer');
 }   
};

  function revert() {
    console.log('rev');
    $('.player').css("left",'0');
    $('.player').css("right",'0');
    $('.player').css("top",'0');
    $('.player').css("bottom",'0');
    $('#1').droppable( "enable" );
    $('#2').droppable( "enable" );
    $('#3').droppable( "enable" );
    $('#4').droppable( "enable" );
    $('#5').droppable( "enable" );
    $('#6').droppable( "enable" );
    $('#7').droppable( "enable" );
    $('#8').droppable( "enable" );
    $('#9').droppable( "enable" );
    $('#10').droppable( "enable" );
    $('#11').droppable( "enable" );
    Team = [];
 $(".player").draggable({
              
                 snap: ".carre",
                 
                 snapMode: "inner",
                 snapTolerance: 15 , 

                 revert : function(event, ui) {
            // on older version of jQuery use "draggable"
            // $(this).data("draggable")
            // on 2.x versions of jQuery use "ui-draggable"
            // $(this).data("ui-draggable")
            $(this).data("uiDraggable").originalPosition = {
                top : 0,
                left : 0
            };
            // return boolean
            return !event;
            // that evaluate like this:
            // return event !== false ? false : true;
        }
                 
        });
  }
  $(document).ready(function(){
    
     $(".player").draggable({
              
                 snap: ".carre",
                 
                 snapMode: "inner",
                 snapTolerance: 15 , 

                 revert : function(event, ui) {
            // on older version of jQuery use "draggable"
            // $(this).data("draggable")
            // on 2.x versions of jQuery use "ui-draggable"
            // $(this).data("ui-draggable")
            $(this).data("uiDraggable").originalPosition = {
                top : 0,
                left : 0
            };
            // return boolean
            return !event;
            // that evaluate like this:
            // return event !== false ? false : true;
        }
                 
        });
      drop();
     
      $('#revert').on( "click", revert);
      $('#confirm').on( "click", confirm);
      $('.player').tooltip({
  tooltipClass: "player-names",
  
});
 });
  </script>
</head>
<body style="margin:0;padding:0;">

<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">			
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
  



<div style="text-align: center;">
  <h1>Choose your Team ! </h1>
  <h4 id="msg"></h4>
</div>
  

<div class="pfblock">
<div class="foot" >




<!-- 1 -->
<div class="ligne">
  
<div class="carre" id="1"></div>

</div>

<!-- 2 -->
<div class="ligne">
  
  <div class="carre" id="2"></div>
<div class="carre" id="3"></div>
<div class="carre" id="4"></div>
<div class="carre" id="5"></div>

</div>



<!-- 3 -->
<div class="ligne">
  
    <div class="carre" id="6"></div>
<div class="carre" id="7"></div>
<div class="carre" id="8"></div>
<div class="carre" id="9"></div>

</div>


<!-- 4 -->
<div class="ligne">
    <div class="carre" id="10"></div>
<div class="carre" id="11"></div>

</div>

<!-- <div id="revert">revert</div> -->
<div id="revert" style="text-align: center; padding: 30px;">
  <button class="btn" style="margin-top: 30px;">
  revert
 </button>
</div>
<div style="text-align: center; padding: 30px;">
  <label> Nom de l'équipe : </label>
  <input id='name' type="text" >
</div>
<div style="text-align: center; padding: 30px;">
  <a ><button id='confirm' class="btn">
  SUBMIT 
 </button></a>
</div>

</div>
<div class="players">
<?php $req = 'SELECT * FROM Depute LIMIT 56';
$res = mysql_query($req);
while($data = mysql_fetch_array($res)){
 ?>




<div class="player" title="<?php echo $data['nom'] ?>"> <img src="images/<?php echo $data['id'];?>.png" > </div> <?php } ?>
</div>
</div>



<div style="">
  

</div>



</body>
</html>

<!-- <img src="vik.png" width="100" height="160" class="drag">
<img src="vik.png" width="100" height="160" class="drag"> -->


<!-- <div class="square"> 
<p></p>
 </div> -->