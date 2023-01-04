<?php
$host = 'localhost';
$username = 'root';
$password = '12345678';
$db = 'webboard';

mysql_connect($host, $username, $password) or die('Connect Failed');
mysql_query('set name utf8');
mysql_select_db($db) or die('Select DB Failed');

?>
