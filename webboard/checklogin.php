<?php
	session_start();
  require_once 'connect.php';

  $strSQL = "SELECT * FROM user WHERE user_username = '".mysql_real_escape_string($_POST['user_username'])."'
  	         and user_password = '".mysql_real_escape_string($_POST['user_password'])."'";
  $objQuery = mysql_query($strSQL);
  $objResult = mysql_fetch_array($objQuery);
  if(!$objResult)
	{ echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["user_username"] = $objResult["user_username"];
			$_SESSION["user_name"] = $objResult["user_name"];
      $_SESSION["user_sername"] = $objResult["user_sername"];
      $_SESSION["user_type"] = $objResult["user_type"];
			$_SESSION["user_id"] = $objResult["user_id"];

			if($objResult["user_type"]=="admin")
			{
				header("location:http://localhost/webboard/");
			}
			else
			{
				header("location:http://localhost/webboard");
			}
	}

?>
