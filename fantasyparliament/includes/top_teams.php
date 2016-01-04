    <?php  
          
                $res = mysql_query('SELECT * FROM Equipe ORDER BY score DESC') or die(mysql_error());
                $i=0;
                while($data = mysql_fetch_array($res) ) {
		$i++;
            	echo 
                "<tr>
 			<td>" . $i . "</td>
                 	 <td>" . $data['name'] . "</td>
                  	 <td>" . $data['score'] . "</td>
 		 </tr>";

            } ?>   