<?php
$host = "localhost";
$user = "root"; //adjust according to your mysql setting
$pass = ""; //adjust according to your mysql setting
$dbName = "db_buku";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());
?>