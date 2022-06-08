<html>
    <head>
        <title>UDOSO PLATFORM</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compactible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" href="assets/img/logo.jpg">
    </head>
    <body>
<!--php script sessions and validation -->
<?php
if(isset($_POST['login'])){
if(empty($_POST['usr'])){
    $msg_u="username required";
}
if(empty($_POST['pwd'])){
    $msg_p="password required";
}else{
//database connection
include 'config/connection.php';  
            session_start();
            $usr=strtoupper($_POST['usr']);
            $pas=sha1($_POST['pwd']);
            
            //query for select
            $sql=mysqli_query($dbc, "select regno,email,password from student_tb where regno='" .$_POST['usr']."' OR email='" .$_POST['usr']."' and password='" .$_POST['pwd']."'");
            while($rows=mysqli_fetch_array($sql)){
                $email_pass=$rows['email'];
                $username=$rows['regno'];
                $password=$rows['password'];
               
                $_SESSION['log_in']=$email_pass;
                $_SESSION['log_user']=$username;
                //$_SESSION['pas']=$password;
                $login_session_e=$email_pass;
                $login_session_u=$username;

                #echo $login_session;
                if(strtoupper($username) == $usr && $password == $pas){
                    header("location: private/home?dashboard");
                }elseif(strtoupper($email_pass) == $usr && $password == $pas){
                    header("location: private/home?dashboard");
                    
                }
                
                }
                    
                    $msg_u_p="wrong username or password";
                }
      
}


?>



 <!-- login form interface -->       
 <center>
         <div content>   
         <table class="table" style="height: 350px;background-color:RGB(
 253, 254, 254);margin-top: 100px;border-radius: 4px;">
         <tr>   
        <td colspan="2" class="head">udoso</td>
       </tr>
                <form action="" method="post">
                    <tr> 
                    <td colspan="2"><center><img id="img" src="assets/img/logo.jpg"></center></td>
                    </tr>
                    <tr>
                        <td class="message"><?php error_reporting(0); echo $msg_u_p;?></td>
                    </tr>
                    <tr>
                       <td class="input"><input type="text" name="usr" placeholder="Username" size="40" value="<?php error_reporting(0); echo $_POST['usr'];?>" requred autofocus></td>
                   </tr>
                   <tr>
                       <td class="message"><?php error_reporting(0); echo $msg_u;?></td>
                   </tr>
                   
                      
                       <tr>
                       <td class="input"><input type="password" name="pwd" placeholder="Password" size="40" value="<?php error_reporting(0); echo $_POST['pwd'];?>" required></td>
                   </tr>
                   <tr>
                       <td class="message"><?php error_reporting(0); echo $msg_p;?></td>
                   </tr>
                   <tr>
                       <td class="input"> <input type="submit" value="login" name="login" required=""></td>
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
  <?php 
  if(isset($_GET['expire'])){
      $ms="<div class='warn'><p> Your account has already expired please contact with system administrator!.</p></div>";
  }
  echo $ms;
  ?>
  <div id="footer">udoso platform &copy;<?php echo date("Y")?></div>
</center>
    </body>
</html>