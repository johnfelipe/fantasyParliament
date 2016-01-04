 	<?php  
          	$colors = array("#2E64FE", "#58FAF4", "#2EFE2E", "#64FE2E", "#BFFF00", "#FFBF00", "#FF4000", "#8A0808", "#3B170B");
                $res = mysql_query('SELECT * FROM Equipe WHERE user = "'.$_SESSION['FBID'].'"') or die(mysql_error());
                $data =mysql_fetch_row($res);
                $team = $data[3];
                $players = explode(',', $team);
                for ($i=0; $i < 11 ; $i++) { 
                $result = mysql_query('SELECT * FROM Depute WHERE id = "'.$players[$i].'"') or die(mysql_error());
                $player = mysql_fetch_array($result);
             ?>
             { value: <?php echo -2*$player['r1']+3*$player['r2']+5*$player['r3']+$player['r4']+2*$player['r5']+$player['r6']?>,
               color:"<?php echo $colors[$i] ?>",
               highlight: "<?php echo $colors[$i] ?>",
               label: "<?php echo $player['nom'] ?>"
             },
             <?php } ?>