<?php
session_start();

require_once 'connect.php';

$topic_id = $_GET['id'];
$sql = "SELECT * FROM topic WHERE topic_id='$topic_id'";
$result = mysql_query($sql);
   while ($fetch = mysql_fetch_assoc($result)) {
?>

<html>
 <head>
  <title>Webboard</title>
  <style>
  body {
    margin:0;
    font-family: cursive;
  }

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #52bbc7;
}

input[type=submit] {
    background-color: #52bbc7;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-top:5px;
}

input[type=submit]:hover {
    background-color: #49a8b3;
}

a {
  text-decoration:none;
  color:#52bbc7;
}
a:hover{
  color:#39828B;
}
</style>
 </head>
 <body bgcolor="52bbc7">
   <?php
   include("top_menu.php");
   ?>

  <div style="margin-top:50px;">
  <table style="width:100%;" border="0" cellpadding="0" cellspacing="0" bgcolor="#e6e6e6">
    <tr height="100">
      <td bgcolor="#f2f2f2"><div style="margin-left:20px;"><font color="52bbc7" size="6"><b>Webboard of SKR</b></font>
      </td>
    </tr>
  </table>

  <table border="0" width="1100" align="center" bgcolor="#e6e6e6" style="border-style:groove;">
    <tr>
      <td>
        <table cellspacing="0" cellpadding="0" border="0" style="width:100%;padding-left:100px;padding-right:100px;padding-top:50px;padding-bottom:50px;">
          <tr>
            <td>
              <table style="width:100%;" border="0" cellspacing="0" cellpadding="0">
               <tr>
                <td>
                  <table bgcolor="#f2f2f2" style="width:100%;" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td bgcolor="#52bbc7" style="padding-left:20px;"colspan="2"><font color="#ffffff" size="4"><b><?php echo $fetch['topic_title']; ?></b></font>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding-top: 10px;padding-left:30px;padding-bottom:20px;"><?php echo $fetch['topic_detail']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td width="50px" style="padding-bottom:10px;padding-left:10px;padding-top:10px;">
                        <img src="profilelogo.png" width="50px" height="50px">
                      </td>
                      <td style="padding-left:10px;padding-bottom:10px;"><font size="3" color="808080">User<br><?php echo $fetch['topic_date']; ?>
                      </td>
                    </tr>
                  </table>

                </td>
               </tr>
             </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr height="100">
      <td bgcolor="#f2f2f2"><div style="margin-left:20px;"><font color="52bbc7" size="6"><b>Create by ABC</b></font>
      </td>
    </tr>
  </table>
  </div>
 </body>
</html>
<?php } ?>
