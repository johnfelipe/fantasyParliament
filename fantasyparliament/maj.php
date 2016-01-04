<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'arfaoui');    // DB username
define('DB_PASSWORD', 'azerty');    // DB password
define('DB_DATABASE', 'watchIntegrity');      // DB name

$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");

echo 'hi'.$_POST['ch']; 
$req = 'INSERT INTO Equipe VAlUES ("","'.$_POST['name'].'","0","'.$_POST['ch'].'","'.$_POST['idfb'].'")' ; 
mysql_query($req) or die(mysql_error());


?>