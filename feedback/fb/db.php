<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="feedback";
mysql_connect($dbhost,$dbuser,$dbpass) or die("not connected");
mysql_select_db($dbname) or die("db not found");
?>