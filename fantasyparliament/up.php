
<?php require 'admin/dbconfig.php'; 
$res = mysql_query('SELECT top FROM top_flop WHERE id="'.$_POST['id'].'"');
$rows =mysql_fetch_row($res);
$top = $rows[0] + 1 ; 
mysql_query('UPDATE top_flop SET top="'.$top.'" WHERE id="'.$_POST['id'].'"');
 ?>