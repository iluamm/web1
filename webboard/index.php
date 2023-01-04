<?php
session_start();
require_once 'connect.php';

$sql = "SELECT * FROM topic";
$result = mysql_query($sql);
?>

<html>
 <head>
  <title>Webboard</title>
  <style>
  body {
    margin:0;
    font-family: cursive;
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
                  <table border="0" bgcolor="#f2f2f2" style="width:100%;" cellpadding="0" cellspacing="0">

                    <tr>
                      <td bgcolor="#52bbc7" colspan="3" style="padding-left:20px;" colspan="2"><font color="#ffffff" size="4"><b>กระทู้ที่น่าสนใจ</b></font>
                      </td>
                    </tr>
                    <tr>
                      <?php
                         while ($fetch = mysql_fetch_assoc($result)) {
                      ?>
                       <tr>

                         <td width="700px;"><a href="topic.php?id=<?php echo $fetch['topic_id']; ?>"><?php echo $fetch['topic_title']; ?></a>  </td>

                    <?php	if($_SESSION['user_type']=="admin") { ?>
                        <td><a href="edit.php?id=<?php echo $fetch['topic_id']; ?>">edit </a></td>
                        <td><a href="delete.php?id=<?php echo $fetch['topic_id']; ?>" onclick="return confirm('Are you sure you want to delete?')">delete</a></td>
                    <?php } ?>

                    <?php	if($fetch['user_id']==$_SESSION['user_id']) { ?>
                        <td><a href="edit.php?id=<?php echo $fetch['topic_id']; ?>">edit </a></td>
                        <td><a href="delete.php?id=<?php echo $fetch['topic_id']; ?>" onclick="return confirm('Are you sure you want to delete?')">delete</a></td>
                    <?php } ?>
                   </tr>
                 <?php } ?>
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
