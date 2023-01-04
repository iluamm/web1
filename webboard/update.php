<?php

require_once 'connect.php';

if(isset($_POST['save']))

$topic_id = $_GET['id'];
$topic = $_POST['topic_title'];
$detail = $_POST['topic_detail'];

$sql = "UPDATE topic SET topic_title = '$topic' WHERE topic_id='$topic_id'";
mysql_query($sql) or die('Update Error');

echo 'Update Success';

header( "location: http://localhost/webboard" );
?>
