<?php
ob_start();
include '../config/connection.php';
//session starting here.
session_start();
#----------- anything you can put on variable $adm and $changePass ---------#
#encrypt text to avoid appearing text on GET url $adm for superControl view and changePass for all users including superControl#
#starting here
$adm=sha1('u_d_o_s_o_p_l_a_t_f_o_r_m');
$changePass=sha1('p_a_s_s_C_h_a_n_g_e_h_e_r_e');
#ending here
#variable $log_e session for email
#variable $pa_s session for passwd
#variable $log_u session for regno or username
$log_e=$_SESSION['log_in'];
//$pa_s=$_SESSION['pas'];
$log_u=$_SESSION['log_user'];
/*if(!$_SESSION['pas']){
    echo "sorry";
    header("location: ../?expire1");
    }else{*/
$sql=("select phone,accademic_year,fname,lname,mname,role,regno,email,password from student_tb where regno='$log_u' or email='$log_e' and password='$pa_s'");
$result=mysqli_query($dbc,$sql);
$row=mysqli_fetch_assoc($result);
$pa_s=$row['password'];

#variable login_session_e for email 
$login_session_e=$row['email'];
$roles=$row['role'];

#variable login_session_u for regno or student registration numbers
$login_session_u=$row['regno']; 
$pas_session=$row['password'];
$name=$row['regno'];

//LIMIT YEAR OF STUDY
$acyear=$row['accademic_year'];
        $date=$acyear;
        $now=date('Y-m-d');
        $diff=abs(strtotime($now) - strtotime($date));
        $year=floor($diff / (365*60*60*24)); //for year
        $month=floor(($diff - $year * 365 *24*60*60) /(30*60*60*24)); //for month
        $day=floor(($diff - $year *365*60*60*24 - $month*30*60*60*24)/ (24*60*60)); //for day
        if($year >= 4){
        header("location: ../?expire");
        ob_end_flush();
       }

#testing if session not meet with... session will expire..
if(!$login_session_u){
header("location: ..");
ob_end_flush();
 }elseif(!$_SESSION['log_user']){
    echo "sorry";
    header("location: ..");
}

/*}*/

$role=$row['role'];
$fname=strtoupper($row['fname']);
$lname=strtoupper($row['lname']);
$mname=strtoupper($row['mname']);
$fullname=$fname .' '. $mname .' '. $lname;

//STATUS FOR USERS
if($role=='makazi'){
    $message_role=" Waziri wa makazi ";
}elseif($role=='superControl'){
    $message_role=" System admin ";
}elseif($role=='elimu'){
    $message_role=" Waziri wa elimu ";
}elseif($role=='afya'){
    $message_role=" Waziri wa afya ";
}elseif($role=='mikopo'){
    $message_role=" Waziri wa mikopa ";
}elseif($role=='fedha'){
    $message_role=" Waziri wa fedha ";
}elseif($role=='jinsia'){
    $message_role="Waziri wa jinsia";
}elseif($role=='gavana'){
    $message_role="Gavana";
}elseif($role=='sheria'){
    $message_role=" Waziri wa sheria ";
}elseif($role=='student'){
    $message_role=" ( student ) ";
}

//DETAILS OF USER
if($role == 'student'){
    $_role="student information";
}elseif($role == 'gavana'){
    $_role="gavana information";
}elseif($role == 'superControl'){
    $_role="system admin information";
}elseif($role=='fedha'){
    $_role=" waziri wa fedha ";
}elseif($role=='elimu'){
    $_role=" waziri wa elimu ";
}elseif($role=='jinsia'){
    $_role=" waziri wa jinsia ";
}elseif($role=='mikopo'){
    $_role=" waziri wa mikopo ";
}elseif($role=='afya'){
    $_role=" waziri wa afya ";
}elseif($role=='makazi'){
    $_role=" waziri wa makazi ";
}elseif($role=='sheria'){
    $_role=" waziri wa sheria ";
}



     
      
//CLOSING DB
mysqli_close($dbc);

 ?>
