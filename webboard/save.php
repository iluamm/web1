<?php
session_start();
require_once 'connect.php';

if(isset($_POST['save']))

$topic = $_POST['topic_title'];
$detail = $_POST['topic_detail'];
$userid = $_SESSION['user_id'];

$sql = "INSERT INTO topic (	topic_title, 	topic_detail, user_id)
VALUES ('$topic', '$detail', '$userid')";
mysql_query($sql) or die('Insert Error');

echo 'Insert Success';

header( "location: http://localhost/webboard" );
?>
