<?php require 'dbconfig.php'; 
$res = mysql_query('SELECT flop FROM top_flop WHERE id="'.$_POST['id'].'"');
$rows =mysql_fetch_row($res);
$flop = $rows[0] + 1 ; 
mysql_query('UPDATE top_flop SET flop="'.$flop.'" WHERE id="'.$_POST['id'].'"');
 ?>