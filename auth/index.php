<?php include '../php/session.php';?>
<html>
    <head>
        <title>UDOSO PLATFORM</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compactible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" href="assets/img/logo.jpg">
    </head>
    <body>
<!--php script sessions and validation -->
<?php 
if(isset($_POST['submit'])){

if(empty($_POST['npwd'])){
    $msg_p="new password required";
}if(empty($_POST['cpwd'])){
    $msg_p="confirm password required";
}if($_POST['npwd'] != $_POST['cpwd']){
    $msg_nm="password not match!";
}else{
//database connection
include '../config/connection.php';
 $cpwd=$_POST['cpwd'];   
        $accept_special=preg_match('[a-zA-Z0-9@_!#$%^&*()<>?/|}{~:]', $cpwd);
        if($cpwd != $accept_special){
            $msg_p="<label class='msg'>password must be combination of lowercase,<br> uppercase, numbers, letters and special character!</label>";
    }else{
 
 $newpasswd=sha1($_POST['npwd']);
 $cpwd=sha1($_POST['cpwd']);
 if($newpasswd == $cpwd){
     if(strlen($_POST['cpwd']) < 8){
        $msg_p="<label class='msg'>password must be atleast 8 character!</label>";
     }else{
    $query=mysqli_query($dbc, "update student_tb set password='$cpwd' where regno='$login_session_u'");
    if(!$query){
        //echo "fail to update password";
        //header("location: ?dashboard");
    }else{
        $msg_success="<label class='msg' style='color:darkgreen'>password successfully changed!</label>";
        header("refresh:3, ../private/home?dashboard");
    }
}
 }

 }
}
}
?>
<style>
    .msg{
	padding:10px;
	font-size:12px;
    text-transform:capitalize;
}
    </style>
<!--form for changing passwd-->
<!-- login form interface --> 
 <center>
          <div content>
          <table class="table" style="height: 350px;background-color:RGB(
 253, 254, 254);margin-top: 100px;border-radius: 4px;">
         <tr>   
        <td class="head" style="size: 300px;">change password</td>
       </tr>
       <tr>
           <td><?php error_reporting(0); echo $msg_success; ?></td>
       </tr>
                <form action="" method="post">
                    
                    <tr>
                        <td class="message"><?php error_reporting(0); echo $msg_op . $msg_p;?></td>
                    </tr>
                    
                   <tr>
                       <td class="message"><?php error_reporting(0); echo $msg_nm;?></td>
                   </tr>
                   
                      
                       <tr>
                       <td class="input"><input type="password" name="npwd" placeholder="new Password" size="40" value="<?php error_reporting(0); echo $_POST['npwd'];?>" required></td>
                   </tr>
                   <tr>
                       <td class="input"><input type="password" name="cpwd" placeholder="confirm new Password" size="40" value="<?php error_reporting(0); echo $_POST['cpwd'];?>" required></td>
                   </tr>
                   
                   <tr>
                       <td class="input"> <input type="submit" value="change" name="submit" required=""></td>
                   </tr>

                    </form>
                    </fieldset>
                    </table>
  
  
  </div>
 <style>
  .warn{
        width:300px;
    }
.warn p{
    font-weight:300;
    width:auto;
    color: darkred;
    font-size: 12px;
    font-style: oblique;
}
 </style>
  <div class='warn'><p>You must change your current password before continue!.</p></div>

  <div id="footer">udoso platform &copy;<?php echo date("Y")?></div>
</center>
    </body>
</html>