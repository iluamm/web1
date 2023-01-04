<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
?>
<style>
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

</style>
<ul>
  <li><a href="index.php">Home</a></li>
  <?php if($_SESSION['user_username']!="") { ?><li><a href="Create.php">สร้างกระทู้</a></li><?php } ?>
  <li><a href="#Contact">ติดต่อเรา</a></li>
  <?php if($_SESSION['user_username']=="") { ?><li style="padding:0px 0px 0px 950px;"><a href="register.php">สมัครสมาชิก</a></li><?php } ?>
 <?php if($_SESSION['user_username']=="") { ?><li><a href="login.php">ลงชื่อเข้าใช้</a></li><?php } ?>
<?php if($_SESSION['user_username']!="") { ?><li style="padding:14px 0px 14px 750px;color:#ffffff;">สวัสดีคุณ!&nbsp;<?php echo $_SESSION['user_username']; ?></li><?php } ?>
 <?php if($_SESSION['user_username']!="") { ?><li style="padding:0px 0px 0px 20px;color:#ffffff;"><a href="logout.php">ออกจากระบบ</a></li><?php } ?>
</ul>
