<?php 
require 'dbconfig.php';

$req = 'SELECT * FROM Equipe ';
$result = mysql_query($req);

while($data = mysql_fetch_array($result))
{	
	$score = 0 ; 
	foreach ( $d as $data['deputes']){
		$res = mysql_query('SELECT * FROM Depute WHERE id="'.$d.'"');
		$rows = mysql_fetch_row($res);
		$score_aux = 0 ;
		for ($i=2; $i <7 ; $i++) { 
			$score_aux = $score_aux + $rows[i];
		}
		$score = $score_aux + $score ; 
		mysql_query('INSERT INTO Equipe VALUES ('',"'.$score.'",''));

	}
}





 ?>