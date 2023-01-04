<?php
require_once 'connect.php';

$topic_id = $_GET['id'];
$sql = "DELETE FROM topic WHERE topic_id='$topic_id'";
$result = mysql_query($sql);
header( "location: http://localhost/webboard" );

?>
