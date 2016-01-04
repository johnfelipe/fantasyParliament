        <?php  
          	$colors = array("#2E64FE",  "#2EFE2E",  "#BFFF00",  "#FF4000");
                $res = mysql_query('SELECT * FROM Equipe ORDER BY score DESC') or die(mysql_error());
                $i=0;
                while(($data = mysql_fetch_array($res)) and $i<4 ) {
		$i++;
		?>
		  {            	
                 	label : "<?php echo $data['name'] ?>",
                 	color:"<?php echo $colors[$i] ?>",
              		highlight: "<?php echo $colors[$i] ?>",
                  	value : <?php echo $data['score'] ?>
                  },
 		

           <?php } ?>  