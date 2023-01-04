<?php

require_once 'connect.php';

if(isset($_POST['regis']))
{
$username = $_POST['user_username'];
$password = $_POST['user_password'];
$name = $_POST['user_name'];
$sername = $_POST['user_sername'];
$email = $_POST['user_email'];
$user = $_POST['user_type'];

$sql = "INSERT INTO user (	user_username, 	user_password, user_name, user_sername, user_email, user_type)
VALUES ('$username', '$password' ,'$name' ,'$sername' ,'$email' ,'$user')";
mysql_query($sql) or die('Insert Error');

echo 'Insert Success';

header( "location: http://localhost/webboard" );
}
?>
