<?php
include 'session.php';
include '../config/connection.php';
    if(isset($_GET['rmv'])){
   $del=$_GET['rmv'];
    $sql=mysqli_query($dbc, "delete from student_tb where sha1(id)='$del'");
    if(!$sql){
        echo 'not succes';
        //header("location: home.php?$adm");
    }else{
    	echo "succes";
    	header("location: ../private/home?$adm");
    }
}

?>