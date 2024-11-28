<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'projekt_3a';

$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$db -> set_charset('utf8');
?>