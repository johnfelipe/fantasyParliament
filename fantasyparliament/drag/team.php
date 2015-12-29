<!DOCTYPE html>
<html>
<head>
	<title> </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript">
  Team = []; 

  function confirm(){
    console.log(Team);
    ch ='';
    for( var i=0 ; i< Team.length ; i++){
      ch = ch+Team[i]+',';
    }
    ch = ch.substring(0,ch.length-1);
    console.log(ch);
    $('#ch').value(ch);
    
});
  }

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
     
     $( "#1" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .find( "p" )
          .html( "Dropped!" );
       	   $('#1').droppable( "disable" );
        console.log('in');
        a = ui.draggable[0].children[0].src;
        b = a.split('img/')
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
        b = a.split('img/')
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
        b = a.split('img/')
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
        
         a = ui.draggable[0].children[0].src;
        b = a.split('img/')
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
        a = ui.draggable[0].children[0].src;
        b = a.split('img/')
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
       a = ui.draggable[0].children[0].src;
        b = a.split('img/')
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
       a = ui.draggable[0].children[0].src;
        b = a.split('img/')
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
        b = a.split('img/')
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
        a = ui.draggable[0].children[0].src;
        b = a.split('img/')
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
       a = ui.draggable[0].children[0].src;
        b = a.split('img/')
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
        a = ui.draggable[0].children[0].src;
        b = a.split('img/')
        c = b[1].split('.')
        Team.push(c[0]);
      },
      out: function( event, ui ) {
      	console.log('out');
      	
      }
    });
      $('#revert').on( "click", revert);
      $('#confirm').on( "click", confirm);
      $('.player').tooltip({
  tooltipClass: "player-names",
  
});
 });
	</script>
</head>
<body >

<div >
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



</div>


<div class="players">

<div class="player" title="Foulen Ben Foulen"> <img src="img/1.jpg" > </div>
<div class="player" title="Foulena"> <img src="img/2.jpg" > </div>
<div class="player"> <img src="img/3.jpg"> </div>
<div class="player"> <img src="img/4.jpg"> </div>
<div class="player"> <img src="img/5.jpg"> </div>
<div class="player"> <img src="img/6.jpg"> </div>
<div class="player"> <img src="img/7.jpg"> </div>
<div class="player"> <img src="img/8.jpg"> </div>
<div class="player"> <img src="img/9.jpg"> </div>
<div class="player"> <img src="img/10.jpg"> </div>
<div class="player"> <img src="img/11.jpg"> </div>
</div>
</div>


<div id="revert">revert</div>
<div id="confirm">confirm</div>
<form action="maj.php" method="POST">
  <input type="hidden" value="" id="ch" name="ch"> 
  <button type="submit"> SUBMIT </button>
</form>
</body>
</html>

<!-- <img src="vik.png" width="100" height="160" class="drag">
<img src="vik.png" width="100" height="160" class="drag"> -->


<!-- <div class="square"> 
<p></p>
 </div> -->