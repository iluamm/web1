<html>
<head>
 <title>Webboard</title>
 <mta charset="utf-8">
 <style>
 body {
   margin:0;
   font-family: cursive;
 }

.botton ul {
   list-style-type: none;
   margin: 0;
   padding: 0;
   overflow: hidden;
   background-color: #333;
   position: fixed;
   top: 0;
   width: 100%;
}

.botton li {
   float: left;
}

.botton li a {
   display: block;
   color: white;
   text-align: center;
   padding: 14px 16px;
   text-decoration: none;
}

.botton li a:hover:not(.active) {
   background-color: #111;
}

.botton .active {
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
</style>
</head>
<body bgcolor="#52bbc7">
 <div class="botton">
   <?php
   include("top_menu.php");
   ?>
 </div>

 <div style="margin-top:50px;">
 <table style="width:100%;" border="0" cellpadding="0" cellspacing="0" bgcolor="#e6e6e6">
   <tr height="100">
     <td bgcolor="#f2f2f2"><div style="margin-left:20px;"><font color="52bbc7" size="6"><b>Webboard of SKR</b></font>
     </td>
   </tr>
 </table>

 <table border="0" width="1100" align="center" bgcolor="e6e6e6" style="border-style:groove;">
   <tr>
     <td>
       <table border="0" style="width:100%;padding-left:100px;padding-right:100px;padding-top:50px;padding-bottom:50px;">
         <tr>
           <td>
             <table bgcolor="#f2f2f2" style="width:100%;" cellpadding="0" cellspacing="0" border="0">
               <tr>
                 <td bgcolor="#52bbc7" style="padding-left:20px;"colspan="2"><font color="#ffffff" size="4"><b>สมัครสมาชิก</b></font>
                 </td>
               </tr>
               <tr>
                 <td style="padding-left:10px;padding-top: 10px;padding-right: 30px;padding-bottom:20px;"><font size="3" color="808080">
                   <form name="frm"  method="post" action="checklogin.php" enctype="multipart/from-data">
                       <label>Username :</label>&nbsp;&nbsp;&nbsp;<input style=" width:80%;height:30px;" type="text" name="user_username" placeholder="username"><br><br>
                       <label>Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;<input style="height:30px;width:80%;" type="password" name="user_password" placeholder="password"><br><br>
                       <input type="submit" name="Submit" value="Login" />
                   </form>
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
