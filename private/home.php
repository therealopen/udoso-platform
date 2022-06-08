<?php include '../php/session.php';
 include '../config/connection.php';
 #FORCING USER TO CHANGE PASSWORD
 if($row['regno'] == $login_session_u && $row['password'] == sha1($row['lname'])){
    header("location: ../auth/index");
}   
?>
<html>
    <head>
    <title>UDOSO PLATFORM</title>   
    <link rel="icon" href="../assets/img/logo.jpg">
    <link rel="stylesheet" type="text/css" href="../assets/css/styl.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compactible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    
       <style>

       .msg{
        color: darkred;
        text-transform: capitalize;
       }
       .safe{
        color: darkgreen;
        text-transform: capitalize;
       }
       *{
        font-family: sans-serif;
        font-size: 13px;
        color: #777;
       }
       table{
        background: white;
       }
       #safe{
        color: green;
       }
       .link-reply{
        color: dodgerblue;
        font-style: italic;
        font-size: 12px;
        text-decoration: none;
       }
       .dw{
        text-transform: lowercase;
        text-decoration: none;
        padding: 5px;
        color: dodgerblue;
        font-style: italic;
        font-size: 12px;
       }
       .live{
            background: dodgerblue;
            color:#f8f8f8;
            font-weight: 900;
       }
           .try{
            width: 100%;
            outline: none;
            background: dodgerblue;
           }
           tt{
            float: left;
            font-family: monospace;
            text-transform: uppercase;
            text-align: left;
            font-size: 12px;
            word-spacing: 2px;
            color: #f8f8f8;
            margin-top: 20px;
            font-weight: 600;
            word-spacing: -5px;
            padding: 5px;

           }
          
           .link-logout{
            margin-right: 5px;
            font-weight: 600;
            font-size: px;
            text-decoration: none;
           }
           .btn-hid{
            float: right;
            margin-top: 10px;
            margin-right: 5px;
            background: #333;
            color: #999;
            padding: 10px;
            box-sizing: border-box;
            border: 1px #ccc solid;
            border-radius: 4px;
           }
           button{
            #margin-top: 10px;
            #margin-right: 5px;
            #background: #333;
            #color: #999;
            #padding: 10px;
            #box-sizing: border-box;
            #border: 1px #ccc solid;
            #border-radius: 4px;
           }
           .content{
            #display: none;
            background:#f8f8f8;
            height: auto;
            max-width: 100%;
            width: 100%;
            padding: 20px;
            margin: 20px;
            justify-content: center;
            align-content: center;
            border-radius: 2px;
            box-shadow: 0px 2px 3px #999;

           }
           
       #div{
        width: 100%;
       }
       .ministry{
        text-align: center;
       }
       .textarea{
        text-decoration: none;
        border: 1px #ccc solid;
        border-radius: 2px;
        outline: none;
       }
       a{
        text-transform: capitalize;
       }
       #results{
        width: 100% auto;
       }
       
       .thead, #info{
        #border: 1px #ccc solid;
        padding: 20px;
       }
       .info{
        max-height: 460px;
        text-transform: lowercase;
        padding: 20px;
        background: white;
        margin:5px;
        margin-top: 5px;
        margin-bottom: 5px;
        #border: 1px #ccc solid;
        height: auto;
        border-radius: 2px;
        float: left;
        overflow-y: scroll;
        
       }
       .info::-webkit-scrollbar-track{
        -webkit-box-shadow: inset 0 0 0px #999;;
        background-color: white;
       }
       .info::-webkit-scrollbar{
        width: 5px;
        background: #999;;
       }
       .info::webkit-scrollbar-thumb{
        background-color: #999;
        border: 2px solid #999;
       }
       .label-1,.label-2{
        text-transform: uppercase;
        font-size: 12px;
       margin-top: 5px;
       }
       .label-2{
        #text-transform: capitalize;
        font-size: 12px;
    
       }
       .info ,table{
        width: 350px;
         padding: 0px;
       #margin-left: 0px;
       text-align: left;
       }
       .top-cmt{
        width:auto;
        background: whitesmoke;
        padding: 10px;
        border-radius: 4px;
        text-transform: capitalize;
        font-size: 14px;
        font-weight: 600;
        color: #999;


       }
    
    #cmnt{
	text-decoration:none;
	text-orientation: sideways-right;
	text-overflow: initial;
	text-align: justify;
	text-align-last: left;
	font-size: 14px;
    word-wrap:break-word;
    padding:5px;
    font-family: serif;
}
       .cmt-txt{
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 10px;
        #background:dodgerblue;
        color:#222;
        margin-top:5px;
        
       }
       hr{
        background:dodgerblue;
        border-color:dodgerblue;
       }
       
       table.info{
        width: 300px;
        padding: 0px;
       #margin-left: 0px;
       }
       table{
       width: 350px;
       padding: 0px;
       margin: 5px;
       }
       .td-txt{
        padding: 5px 0px 5px;
       }
       th{
        text-transform: uppercase;
        text-align: left;
        padding: 5px;

       }
       .td-adv{
        text-transform: ;
        padding: 5px 5px ;
       }
       .textarea{
         padding: 15px;
       }
       table, td .textarea{
        width: 100%;
        text-decoration: none;
        font-family: sans-serif;
        color: #999;
        margin-bottom: 5px;

       }
       #cmt{
        margin-left: 0px;
       }
       .linkB{
        text-decoration: none;
        color: #2980B9;
        text-transform: lowercase;
        font-family: sans-serif;
       }
       .msg{
        color: darkred;
        text-transform: capitalize;
        font-family: sans-serif;
       }
       .i{
        text-decoration: none;
        outline: none;
        float: right;
        font-weight: normal;
        font-size: 10;
        color: dodgerblue;
        padding-left: 20px;
       }
       /*starting logout and passwd link*/
 .dropbtn {
    margin-top: 10px;   
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;

}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

.superControl-panel{
    background: white;
    margin: 0px;
    padding: 20px;
    font-size: 24px;
    text-transform: capitalize;
    font-weight: 900;
    color: dodgerblue;
    min-width: 100%;
    text-align:left;
}
.superControl-message{
    background: white;
    margin-top: 5px;
    border-radius: 8px;
    padding: 20px;
    text-align: left;
    font-family: sans-serif;
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 300;
    color: darkred;
    min-width: 100%;
}
.linkA{
    text-decoration: none;
    color: #000;
    width: 300px;
    height: 40px;
}
.linkA:hover{
color: red;
}
.list-input{
    box-sizing: border-box;
    outline: none;
    border: 1px solid #ccc;
    padding: 10px;
    width: 100%;
    border-radius: 3px;
}
input[list]
{
  margin-left:auto;
    margin-right:auto;
    padding: 20px 20px 20px 20px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #666;
}
option{
    width: 100%;
    padding: 0;
}

/*responsive for screen with maximum width 1000*/
@media only screen and (max-width: 1000px){
.dropdown{
    display: none;
}
 .dropbtn{
                display: none;
            }
}
.search{
    border: 1px solid red;
    box-sizing: border-box;
    border-radius: 2px;
    border-color: #000;
}
.btn-add{
    padding: 10px;
    background: dodgerblue;
    border: 1px solid dodgerblue;
    margin-top: 5px;
    color: white;
    width: 150px;
    font-size: 13px;
    text-transform: capitalize;
    margin-right: 5px;
    float:right;
    box-sizing: border-box;
    border-radius: 4px;
}

/*starting responsive for device with 768 display size*/

        @media only screen and (min-width: 768px){
            .search{
                min-width: 480px;
                max-width: 480px;
                border: 1px solid red;

            }
            tt{
                font-size: 24px;
                padding-left: 40px;
            }

            .info{
                max-height: 480px;
                width:600px;
                border-radius: 2px;
                border: 1px #ccc solid;
                margin: 10px;
                padding: 20px;
                text-align: left;
            }
            .label-1,.label-2{
            text-transform: capitalize;
            font-size: 13px;
            padding: 10px;
       }
         .label-2{
            text-transform: lowercase;
            font-size: px;
    
       }
       .content{
        width: auto;
        #margin-left: 50px;;

       }
       .dropbtn{
        width: 200px;
        height: 60px;
        margin-right: 0px;
       }
       .dropdown-content{
        #margin-top: 70px;
        width: 200px;
        margin-right: 0px;
       }
       .dropdown{
        float: right;
        top: 0;
       }
       .try{
        text-decoration:none;
        float: right;
        margin-top: -10px;
       }
       .btn-hid{
        display: none;
       }
       .label-2{
        text-transform: uppercase;
        font-size: 12px;
        font-family: sans-serif;
       }
   }

    /*superControl css*/
    .input-type{
        width: 250px;
    }
    .radio{
        width: 250px;
    }
    .radio-text{
        text-transform: capitalize;

    }
    input[type=radio]{
        margin: 5px;
    }
    .input-submit{
        width: 100px;
        padding-left: 0px;
        height: auto;
    }
   
    .img-superControl{
        width: 20px;
        height: 20px;
        border: 1px solid none;
        border-radius: 4px;
    }
    .note{
        font-size:10px;

    }
    #no{
        color:red;
        font-weight:900;
        text-decoration:none;
    }
    #yes{
        color:green;
        font-weight:900;
        text-decoration:none;
    }
 
    
       </style>
    </head>
    <body>
        <div class="side">

            <div id="div" style="width:100%;">

                <input type="checkbox" id="tog">
                <label for="tog">&#9776;</label>
            <div class="try" style="">
                <tt >welcome to udoso platform</tt>
                <button class="btn-hid" style=""><a class="link-logout" href="logout">logout</a></button>
                <div class="dropdown" style="">
  <button style="" onclick="myFunction()" class="dropbtn"><?php echo strtoupper($login_session_u).'<br><strong style="color:#f8f8f8;">'.$message_role.'</strong>';?></button>
  <div style="" id="myDropdown" class="dropdown-content">

    <?php
    if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
    <a href="?<?php echo $adm; ?>">admin panel</a>
<?php }elseif($login_session_u == $row['regno'] && $row['role'] == 'gavana'){ ?>
    <a href="?<?php echo $adm; ?>"><?php echo $role;?> panel</a>
    <?php }else{ ?>
    <a href="#"><?php echo strtoupper($login_session_u);?></a>
    
<?php } ?>
    <a href="?<?php echo $changePass //n - just a character can any character a-z?>">Change Password</a>
    <a href="logout">Logout</a>
  </div>
</div>

<script src="../assets/js/__.js"></script>

                <!--<button style="float: right;"><a class="link-logout" href="logout.php">logout</a></button>-->
            </div>
                
                
<!-- navigation sidebar user -->
                <nav>
                    <ul>
                        <?php if(isset($_GET['dashboard'])){?>
                        <li><a style="color: #f8f8f8;" class="live" href="?dashboard=dhd">dashboard</a></li>
                        <li><i class="fa fa-dashboard" style="font-size:36px"></i><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                         <?php if($role == 'superControl'){?> 
                            <!-- select ministry -->
<?php 
include '../config/connection.php';
$con=mysqli_connect("localhost","root","","information_schema");
$table_name = "student_tb";
$column_name = "role";

$list_min_all=mysqli_query($dbc,"select DISTINCT id,role from student_tb group by role  order by id desc limit 1");
//$drop_=mysqli_query($dbc,"ALTER TABLE `student_tb` DELETE COLUMN role WHERE ENUM($all_role) like '%afya%'");

$result = mysqli_query($con,"SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = '$table_name' AND COLUMN_NAME = '$column_name'");

while($row = mysqli_fetch_array($result)){
$enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

foreach($enumList as $value){

    $minstries .= $value;
}
}
?>                      <?php while($row=mysqli_fetch_array($list_min_all)){?>
                                <?php if($row['role']!=$value && $row['role'] != 'none'){?>
                            <li><a href="?<?php echo $value; ?>"><?php echo $value;?></a></li>
                            <?php }}} ?>
                        <?php } ?>
                    <?php }elseif(isset($_GET['michezo'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?>
                    <?php }elseif(isset($_GET['makazi'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a style="color: #f8f8f8;" class="live"  href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?> 
                     <?php }elseif(isset($_GET['mkopo'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?> 
                    <?php }elseif(isset($_GET['fedha'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?>
                    <?php }elseif(isset($_GET['elimu'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?>  
                    <?php }elseif(isset($_GET['afya'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?>   
                    <?php }elseif(isset($_GET['sheria'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?>   
                    <?php }elseif(isset($_GET['jinsia'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?>    
                     <?php }elseif(isset($_GET['comment'])){ ?>
                        <li><a href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <li><a style="color: #f8f8f8;" class="live" href="?comment">comment</a></li>
                                         
                    <?php }else{ ?>
                    <li><a style="color: #f8f8f8;" class="live" href="?dashboard">dashboard</a></li>
                        <li><a href="?michezo">michezo</a></li>
                        <li><a href="?makazi">makazi</a></li>
                        <li><a href="?mkopo">mikopo</a></li>
                        <li><a href="?fedha">fedha</a></li>
                        <li><a href="?elimu">elimu</a></li>
                        <li><a href="?afya">afya</a></li>
                        <li><a href="?sheria">sheria</a></li>
                        <li><a href="?jinsia">jinsia</a></li>
                        <?php if($login_session_u == $row['regno'] && $row['role'] == 'superControl'){ ?>
                        <li><a href="?comment">comment</a></li>
                        <?php } ?>
                     <?php } ?>  
                    
                    </ul>
                </nav>

              
            </div>
           

            
                <div class="content" id="id" style="margin: 0px;height: 20px;padding: 2px;width:auto;text-align: center;"><?php //echo $fullname;?></div> 
     <center><div class="content" style="float: left;max-width:97%;min-width:auto;background: ccc;padding: 5px;" >
             
              
                                     <!--starting users dashboard -->    
                     <?php    
            if(isset($_GET['dashboard'])){

                $select=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");

                    ?>

   
                        <div class="info" style="">
                            <table style="background:white;">
                                <tr>
                                        <th colspan="2"><div class="prog" style="margin-left:-5px;"><label class="ministry"><?php echo $_role;?></label></div></th>
                                </tr>
                                <?php 
                                    while($row=mysqli_fetch_array($select)){
                                ?>
                                
                                <tr>    
                                    <td class="td-txt"><label class="label-1">fullname:</label></td>
                                    <td class="td-txt"><label class="label-2"><?php echo strtoupper( $row['fname'] .' '. $row['mname'] .' '. $row['lname']);?></label></td>
                                </tr> 
                                <tr>   
                                   <td class="td-txt"><label class="label-1">reg no:</label></td>
                                   <td class="td-txt"><label class="label-2" style="text-transform: uppercase;"><?php echo $row['regno']; ?></label></td>
                                </tr>
                                <tr>   
                                    <td class="td-txt"><label class="label-1" >email:</label></td>
                                    <td class="td-txt"><label class="label-2" style="text-transform: lowercase;"><?php echo $row['email']; ?></label></td>
                                </tr>
                                <tr>    
                                    <td class="td-txt"><label class="label-1">sex:</label></td>
                                    <td class="td-txt"><label class="label-2"><?php echo $row['gender']; ?></label></td>
                                </tr>
                                <tr>    
                                    <td class="td-txt"><label class="label-1">phone:</label></td>
                                    <td class="td-txt"><label class="label-2"><?php echo $row['phone']; ?></label></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="td-txt"><a href="?edit_user=<?php echo sha1($row['id']);?>"><input style="margin-left:10px;" type="image" src="../assets/img/edit.png" title="Edit your information" class="img-superControl" style="background:cadetblue" type="submit" name="edit" class="action" onclick="return confirm('Are you sure you want to EDIT click ok to EDIT ?')"></a>
	</td>
                                </tr>
                            <?php } ?>
                            </table>
                            <!-- progressbar-->
                            <?php if($roles == 'superControl'){?>
                            <hr>
                            
                            <div class="prog">college of informatics and virtual education (cive)</div>
<?php


$total=53;
$convertPercent=100;
$select=mysqli_query($dbc,"select count(id) as me from student_tb");
while($row=mysqli_fetch_array($select)){
//echo $row['id'];
$quantity=$row['me'];
$res=$quantity * $convertPercent / $total;
$as=$total-$quantity;
$result=number_format($res,1);
?>
<p>
    Registered students is 
    <?php echo $quantity;?> <span style="font-size:12px;text-transform:capitalize"><?php// echo //$fname.' '. $lname; ?></span> and  <?php echo $as;?> students not registered.
</p>
<center><progress value="<?php echo $result;?>" max="<?php echo $convertPercent;?>"></progress>
<br><b><?php echo $result.'%';?><br>registered students in percentage</b></center>
<?php
}
}
?>

<hr style="margin-top:10px;">
<div class="linkq">
    <dd>quick inside link:</dd>
    <ul>
        <li class="list"><a href="?makazi">wizara ya makazi</a></li>
        <li class="list"><a href="?michezo">wizara ya michezo</a></li>
        <li class="list"><a href="?mkopo">wizara ya mikopo</a></li>
        <li class="list"><a href="?afya">wizara ya afya</a></li>
        <li class="list"><a href="?elimu">wizara ya elimu</a></li>
    </ul>
    <br><br>
    <dd>quick outside link:</dd>
    <ul>
        <li class="list"><a href="https://www.udom.ac.tz" target="_blank">university of dodoma</a></li>
        <li class="list"><a href="https://sr2.udom.ac.tz" target="_blank">student registration system (sr2)</a></li>
        <li class="list"><a href="https://www.heslb.go.tz" target="_blank">higher education students loans board (helsb)</a></li>
        <li class="list"><a href="https://www.tcu.go.tz" target="_blank">tanzania commision for universities (tcu)</a></li>
        <li class="list"><a href="https://online.crdbbank.co.tz/apply/heslb" target="_blank">helsb student account crdb online</a></li>
    </ul>
    <br>
    <hr>
    <br>
    <dd>contact with:</dd>
    <?php 
    $select_waziri=mysqli_query($dbc,"select fname,mname,lname,role,phone from student_tb");
    while($row_waziri=mysqli_fetch_array($select_waziri)){
        if($row_waziri['role']=='student' OR $row_waziri['role']=='gavana' OR $row_waziri['role']=='superControl'){

        }else{
    ?>
     <?php if($row_waziri['role']==''){}else{?>
    <div class="contact">
         <label class="lb">names:</label> 
          <span><?php echo $row_waziri['fname'].' '.$row_waziri['mname'].' '.$row_waziri['lname'];?></span><br>
         <label class="lb">status:</label>  
          <span><?php echo 'waziri wa '. $row_waziri['role'];?></span><br>
         <label class="lb">phone:</label> 
          <span><?php echo $row_waziri['phone'];?></span>
          
    </div> 
    <?php }?>
   
  <?php } }?>
</div>
<style>
    .contact{
        font-family:sans-serif;
        padding:10px;
        text-transform:capitalize;
        #background:#f7f7f7;
        margin:5px;
        font-weight:#900;
        border:1px solid #ddd;
        border-radius:4px;
        font-size:11px;
    }
    .contact span{
        color:darkblue;
        font-family:sans-serif;
        font-size:11px;
    }
    .contact .lb{
        font-weight:300;
        color:#222;
    }
    .linkq{
       
        font-family:sans-serif;
        padding:8px;
        margin-left:10px;
    }
    .list{
        list-style-type:none;
        padding-left:10px;

    }
    .list a{
        font-size:12;
        text-decoration:none;
        color:darkblue;
        padding:5px;
        text-transform:lowercase;
        font-family:sans-serif;
    }
    .list a:hover{
        color:darkblue;
        font-weight:300;
        
    }
    dd{
        text-transform:capitalize;
        font-size:12px;
        font-weight:900;
        font-family:sans-serif;
        
    }
    p{
        padding-left:20px;
        
    }
    progress{
        height:40px;
        width:320px;
        color:#999;
    }
    .prog{
        border-radius:4px;
        #background:#999;
        color:#555;
        font-weight:900;
        text-transform:capitalize;
        font-size:12px;
        font-family:sans-serif;
        padding:5px;
        margin-left:10px;
    }
    b{
        #font-weight:900;
        text-transform:capitalize;
        font-size:14px;
        #font-family:monospace;
    }
</style>
<!-- ends progressbar --> 
                
                    </div>
                   
                     <div class="info" style="">
                         <div id="loads">
                            <table style="background:white;width: auto;">
                                                                
                                <tr>
                                        <th colspan="3"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                 
                                <?php 
                                
                                //$select_comm=mysqli_query($dbc, "select * from comment inner JOIN adv_tb on adv_tb.a_id=comment.a_id order by adv_tb.a_id desc limit 5");
                                $select_comm=mysqli_query($dbc,"select * from comment");
                                
                                $query=mysqli_query($dbc, "select * from adv_tb order by date desc limit 5");
                            

                                if(mysqli_num_rows($query) == 0){
                                    ?>
                                <tr>
                                    <td colspan="2" class="td-txt"><label class="message">no data found.</label></td>
                                </tr>
                                 <?php   }
                                while($row=mysqli_fetch_array($query)){
                                   //echo $id_adv=$row['a_id'];
                                   $id_adv=$row['a_id'];
                                   
                                    
                                    if($row['confirm_adv'] == 'yes'){
                                           //date for adv gif popup
                                    $now=time();
                                    $date=strtotime($row['date']);
                                    $diff=$now - $date;
                                    $datediff=round($diff / (24*60*60));
                                    //echo $datediff;
                                    if($datediff < 8){ 
                                        //gif image
                                        $new="<img id='gif' style='width:40px;height:40px;' src='../assets/img/NEW1.gif'>";
                                        ?>
                                   
                                <tr>         
                                    <td class="td-txt" colspan="2"><label><a class="linkB" href="?dashboard&cat=<?php echo $id_adv;?>"><?php echo $row['description']. ' '.'('.$row['status'].')';?></a></label></td><td style="width:300px" colspan="3" class="linkB"><small style="color:blue;font-size:11px"><?php echo $row['date']; ?></small></td>
                                </tr>
                                <tr>    
                                    <td colspan="2" class="td-txt"><?php echo $row['adv']; ?></td><td><?php echo $new;?></td>
                                </tr> 
                                
                                <tr><td colspan="5">
                                <a href="?dashboard&com=<?php echo $id_adv;?>&r=<?php echo rand(11111,99999);?>" ><img src="../assets/img/ment.png" title="comment" class="imgcom"></a>
                                
                                <div class="contentc">
                                    <!-- dashboard comment start here -->
                                <?php if(isset($_GET['com'])){
                                     $id_com=$_GET['com'];
                                    //echo $id_com=$_GET['com'];
                                    
                                    if($id_com == $row['a_id']){
                                        if(isset($_POST['comm'])){
                                            if(empty($_POST['comment'])){
                                                echo "<span class='msg-com'>comment required!</span>";
                                            }
                                            if(!empty($_POST['comment'])){
                                                $p_comment=$_POST['comment'];
                                                //testing comment length
                                                if(str_word_count($p_comment)>100){
                                                    
                                                    echo "<span class='msg-com'>a comment must be less than 100 words!</span>";
                                                }else{
             
                                                $regno=$login_session_u;
                                                $id_com=$_GET['com'];
                                                //$insert=mysqli_query($dbc, "insert into comment(comments,a_id,regno) values('$comments','$adv_id','$regno')");
                                                $insert_com=mysqli_query($dbc,"insert into comment(comments,a_id,regno) values('$p_comment','$id_com','$regno')");
                                                if(!$insert_com){
                                                    echo "<span class='msg-com'>failed something wrong!</span>";
                                                }else{
                                                    echo "<span style='color:darkgreen' class='msg-com'>your comment submitted successful</span>";
                                                }
                                            }
                                        }
                                    }
                                 
                                ?>  
                                <!-- comment form start here -->
                                <form action="" method="post">
                                <textarea wrap="" cols="" rows="" autofocus placeholder="comment here!" name="comment" id="comment"></textarea>
                                <button type="submit" class="subcom" alt="submit"  name="comm">send</button>
                                </form>
                                <!-- comment form ending here-->
                                <div class="list-comment">
                                <?php
                                $sel_comm=mysqli_query($dbc,"select * from comment where a_id='$id_com' order by date desc limit 3");
                                 while($r=mysqli_fetch_array($sel_comm)){
                                    $adc= $r['a_id'].'<br>';
                                    
                                    
                        
                                   
                                    ?>
                                <!-- comment lists -->    
                                <p id="cm">
                                <span id="cms"><?php echo $r['date'];?></span>
                                <span id="cms"><?php echo $r['regno'];?></span><br>
                                <?php echo $r['comments'];?>
                                </p>
                                <!-- ending comment lists -->
                                
                                <?php }}else{//echo "id not match!";
                                }}?>


                                </div>
                                </div>  
                                    </td></tr>
                                

                                <?php }else{?>
                                    <tr>         
                                    <td class="td-txt" colspan="2"><label><a class="linkB" href="?dashboard&cat=<?php echo $id_adv;?>"><?php echo $row['description']. ' '.'('.$row['status'].')';?></a></label></td><td style="width:500px;"  colspan="3" class="linkB"><small style="color:blue;font-size:11px"><?php echo $row['date']; ?></small></td>
                                </tr>
                                <tr>    
                                    <td colspan="3" class="td-txt"><?php echo $row['adv']; ?></td>
                                </tr> 
                                
                                    <tr><td colspan="5">
                                <a class="linki" href="?dashboard&com=<?php echo $id_adv;?>&r=<?php echo rand(11111,99999);?>" >comment</a>
                                
                                <div class="contentc">
                                <?php if(isset($_GET['com'])){
                                     $id_com=$_GET['com'];
                                    //echo $id_com=$_GET['com'];
                                    
                                    if($id_com == $row['a_id']){
                                    if(isset($_POST['comm'])){
                                        if(empty($_POST['comment'])){
                                            echo "<span class='msg-com'>comment required!</span>";
                                        }
                                        if(!empty($_POST['comment'])){
                                            $p_comment=$_POST['comment'];
                                            //testing comment length
                                            if(str_word_count($p_comment)>100){
                                                echo "<span class='msg-com'>a comment must be less than 100 words!</span>";
                                            }else{
                                            $regno=$login_session_u;
                                            $id_com=$_GET['com'];
                                            //$insert=mysqli_query($dbc, "insert into comment(comments,a_id,regno) values('$comments','$adv_id','$regno')");
                                            $insert_com=mysqli_query($dbc,"insert into comment(comments,a_id,regno) values('$p_comment','$id_com','$regno')");
                                            if(!$insert_com){
                                                echo "<span class='msg-com'>failed something wrong!</span>";
                                            }else{
                                                echo "<span style='color:darkgreen' class='msg-com'>your comment submitted successful</span>";
                                            }
                                        }
                                    }
                                }
                                 
                                ?>  
                                <!-- else comment form --> 
                                <form action="" method="post">
                                <textarea wrap="" autofocus placeholder="comment here!" name="comment" id="comment"></textarea>
                                <input type="submit" hidden name="comm">
                                <button type="submit" class="subcom" alt="submit"  name="comm">send</button>
                                </form>
                                <!--ending of comment form -->
                                <div class="list-comment">
                                <?php
                                $sel_comm=mysqli_query($dbc,"select * from comment where a_id='$id_com' order by date desc limit 3");
                                 while($r=mysqli_fetch_array($sel_comm)){
                                    $adc= $r['a_id'].'<br>';
                                    
                                    
                        
                                   
                                    ?>
                                    <!-- list comment from db tb-->
                                <p id="cm">
                                <span id="cms"><?php echo $r['date'];?></span>
                                <span id="cms"><?php echo $r['regno'];?></span><br>
                                <?php echo $r['comments'];?>
                                </p>
                                
                                <?php }}else{//echo "id not match!";
                                }}?>

                                </div>
                                </div>  
                                   <br>
                                   <br>
                                   
                                 

                                <?php
                                }
                            } }  ?> 
                                
                            </table>
                        </div>
                        <?php //if(isset($_GET['com'])){?>
                            
                            <?php //} ?>
                    </div>

                  

 <style>
/* comment style css */
.msg-com{
    font-size:12px;
    text-transform:capitalize;
    color:darkred;
    
}
.linki{
    text-decoration:none;
    color:darkblue;
}
.imgcom,input[type=image]{
    width: 20px;
    height: 20px
}
.subcom{
   padding:5px;
   border:1px solid white;
   border-radius:4px;
   text-decoration:none;
   color:white;
   background:dodgerblue;
   
    
}
#comment{
  border:1px solid #ccc;
  border-radius:4px;
  outline:none;
  resize:none;
  overflow:none;
  color:#999;
  padding: 5px;
  width:300px;
  height:60px;
  
}
#cms{
    text-transform:uppercase;
    padding-left:10px;
    float:right;
    font-size:10px;
    color:blue;
    font-family:sans-serif;
}
#cm{
  font-size:12px;
  color:darkblue;
  font-family:sans-serif;
  padding: 10px;
  border:1px solid #f7f7f7;
  background:#f8f8f8;
  border-radius:10px;
  margin:3px 20px 3px;
  max-width: 400px;
  
}
</style>

                            <!-- end of dashboard -->
                   
                
        <!--starting wizara ya michezo tangazo --> 
             <?php }elseif(isset($_GET['michezo'])){ 

             $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
             $rows=mysqli_fetch_assoc($select_);
                $id=$rows['id'];

             

                          if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="michezo";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
               include '../config/connection.php';
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                   <center><label class="txt">wizara ya michezo</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from student_tb right JOIN adv_tb on adv_tb.a_id=student_tb.id where status='michezo' and confirm_adv='yes' order by adv_tb.a_id desc limit 5");

                //$__select=mysqli_query($dbc, "select * from adv_tb where status='michezo' order by id desc limit 5");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count; ?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){
                                $r=$_row['role']; ?>
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'michezo' or $row['role']=='superControl'){ ?>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?michezo&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>    

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                        

         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'michezo' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?>                
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                
                <?php } ?>
                    <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?michezo");

}
?>
        <!-- ending of wizara ya michezo-->
                
        <!--starting wizara ya makazi tangazo -->
                <?php    
                }elseif(isset($_GET['makazi'])){
            $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
             $rows=mysqli_fetch_assoc($select_);
                $id=$rows['id'];
                
                    if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="makazi";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
                
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                    <center><label class="ministry">wizara ya makazi</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where status='makazi' and confirm_adv='yes' order by id desc limit 5");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count; ?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'makazi' or $row['role']=='superControl'){ ?>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?makazi&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'makazi' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?> 
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                <?php } ?>
   <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?makazi");

}
?>             
                
       <!-- ending wizara ya makazi -->         


  
        <!-- starting wizara ya mikopo -->
                <?php 
                }elseif(isset($_GET['mkopo'])){
            $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
            $rows=mysqli_fetch_assoc($select_);
            $id=$rows['id'];
                 
                   if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="mikopo";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
                
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                     <center><label class="ministry">wizara ya mikopo</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where status='mikopo' and confirm_adv='yes' order by id desc limit 5");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count;?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'mikopo' or $row['role']=='superControl'){ ?>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?mkopo&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'mikopo' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?> 
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                <?php } ?>
                 <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?mkopo");

}
?>
 
        <!-- starting wizara ya fedha-->
                <?php 
                }elseif(isset($_GET['fedha'])){
                     $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
                     $rows=mysqli_fetch_assoc($select_);
                     $id=$rows['id'];
                
                    
  if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="fedha";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
                
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                    <center><label class="ministry">wizara ya fedha</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where status='fedha' and confirm_adv='yes' order by id desc limit 5");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count; ?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?><i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'fedha' or $row['role']=='superControl'){ ?>
                                   <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?fedha&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'fedha' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?> 
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                <?php } ?>
                 <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?fedha");

}
?>
       <!-- ending of wizara ya fedha-->  

       <!-- starting of wizara ya elimu-->
                <?php 
                }elseif(isset($_GET['elimu'])){
             $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
             $rows=mysqli_fetch_assoc($select_);
                $id=$rows['id'];
                
                    
   if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="elimu";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
                
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                   <center><label class="ministry">wizara ya elimu</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where status='elimu' and confirm_adv='yes' order by id desc limit 5");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
            <div class="info" style="height:">
                         <table style="background:white;width:auto;height: auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count;?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'elimu' or $row['role']=='superControl'){ ?>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?elimu&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'elimu' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?> 
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                <?php } ?>
                 <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?elimu");

}
?>
    <!--ending of wizara ya elimu--> 
                 
    <!-- starting of wizara ya afya-->  
<?php 
                }elseif(isset($_GET['afya'])){
                $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
                $rows=mysqli_fetch_assoc($select_);
                $id=$rows['id'];
                
                    
   if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="afya";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
                
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                   <center><label class="ministry">wizara ya afya</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where status='afya' and confirm_adv='yes' order by id desc limit 5");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count; ?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                    <?php if($row['role'] == 'afya' or $row['role']=='superControl'){ ?>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?afya&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>
                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'afya' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?> 
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                <?php } ?>
                 <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?afya");

}
?>

     <!-- ending of wizara ya afya--> 

    <!-- starting of wizara ya sheria -->
                <?php 
                }elseif(isset($_GET['sheria'])){
                     $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
                    $rows=mysqli_fetch_assoc($select_);
                    $id=$rows['id'];
                
                   
   if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="sheria";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
                
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                   <center><label class="ministry">wizara ya sheria</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where status='sheria' and confirm_adv='yes' order by id desc limit 5");
               $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count;?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'sheria' or $row['role']=='superControl'){ ?>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?sheria&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'sheria' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?> 
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                <?php } ?>
                 <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?sheria");

}
?>
        <!--ending of wizara ya sheria--> 

        <!-- starting of wizara ya jinsia-->
                <?php 
                }elseif(isset($_GET['jinsia'])){
                     $select_=mysqli_query($dbc, "select * from student_tb where regno='$login_session_u'");
                    $rows=mysqli_fetch_assoc($select_);
                    $id=$rows['id'];
                
                    
if(isset($_POST['upload'])){
                    if(empty($_POST['description'])){
                             $message_dsc="<tr><td><label class='msg'>description required<label></td></tr>";
                             //echo $message_dsc;
                    }if(empty($_POST['adv'])){
                                $message_cmt="<tr><td><label class='msg'>field required<label></td></tr>";
                                //echo $message_cmt;
         }else{
            if(!empty($_POST['description']) || !empty($_POST['adv'])){
                $__description=$_POST['description'];
                //$__file=$_POST['file'];
                $__adv=$_POST['adv'];
                $__status="jinsia";
                $__file=$_FILES['file']['name'];
                $target="../file/".basename($_FILES['file']['name']);
                //$__file=$_FILES['file']['tmp_name'];
                
                $ins=mysqli_query($dbc, "insert into adv_tb(description,file,adv,status,id) values('$__description','$__file','$__adv','$__status','$id')");
                if(!$ins){
                    $message_ins="<tr><td><label class='msg'>fail uploading!<label></td></tr>";
                }else{
                    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            //$msg4="<label class='yes'>file uploaded successfully,</label>";
            //header("location:file.php?upload=succes");
        }
                    $message_ins="<tr><td><label class='msg' id='safe'>advertisement successful uploaded<label></td></tr>";
                }
            }
         }
        }

                   ?>     
                
                   <center><label class="ministry">wizara ya jinsia</label></center>
                    
                <!--</div>-->
                <?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where status='jinsia' and confirm_adv='yes' order by id desc limit 5");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count;?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'jinsia' or $row['role']=='superControl'){ ?>
                                   <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?jinsia&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>
                         <?php if($login_session_u == $rows['regno'] && $rows['role'] == 'jinsia' OR $rows['role'] == 'superControl' OR $rows['role'] == 'gavana'){?> 
         <div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>add advertisement</th></tr>
                             
                    <?php error_reporting(0); echo $message_dsc . $message_ins;?>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    <?php error_reporting(0); echo $message_cmt;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" name="adv" autofocus=""></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="upload" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>
                <?php } ?>
                 <?php 
    if(isset($_GET['adv'])){ 
   $delid=$_GET['adv'];
   $adv=$row['adv'];
    $query=mysqli_query($dbc, "delete from adv_tb where sha1(a_id)='$delid'");
    header("location: ?jinsia");

}
?>
        <!-- ending of wizara ya jinsia--> 

        <!--starting comments--> 
                <?php 
                }elseif(isset($_GET['comment'])){

                error_reporting(0); $adv_id=$_GET['adv'];
                    //echo $adv_id;
                    if(isset($_POST['send'])){
                    if(empty($_POST['cmt'])){
                        $message="<tr><td><label class='msg'>comment required</label></td></tr>";

                    }else{
                        $comments=$_POST['cmt'];
                        $regno=$login_session_u;
                        $insert=mysqli_query($dbc, "insert into comment(comments,a_id,regno) values('$comments','$adv_id','$regno')");
                        if($insert){
                        $message="<tr><td><label class='msg' id='safe'>comment saved</label></td></tr>";
                        }else{
                        $message="<tr><td><label class='msg'>fail</label></td></tr>";
                        }
                    }
                 }
?>
        <center><label class="ministry">comment</label></center>
        <?php if($adv_id  != 0){ //comment starting here ?>
                    <div class="info" style="width: auto;">
                    <table border="0" style="width: auto;">
                        <form action="" method="post">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>comment / complain</th></tr>
                    <?php error_reporting(0); echo $message;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="comments" autofocus="" name="cmt"></textarea></td>
                </tr>
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="send" value="send"></td>
                </tr>

            </form>
            </table>
        </div>
       
    <?php } 
// comment ending here  

//comments list starting here
    //echo $adv_id;
    $query=mysqli_query($dbc, "select * from adv_tb where a_id='$adv_id'");
    $row_a=mysqli_fetch_assoc($query);
    $adv_description=$row_a['description'];
    if($row_a['a_id'] == $adv_id){
       //echo $adv_description;
    }
    $query=mysqli_query($dbc, "select * from comment order by id desc");
            //$query=mysqli_query($dbc, "select * from comment where status='michezo' order by id desc limit 5");
            $count_row=mysqli_num_rows($query);
            if($count_row == 0){
                $msg_c="<label class='msg'>you dont have any comment yet!</label>";
            }
            ?>            
            <div class="info" style="float: ;max-width: 620px;max-height: 460px;padding: 15;border-radius: 4px;">
                <div class="top-cmt" style="">comments (<?php echo $adv_description;?>)</div>
                <table style="background-color:white;width:auto;">
                    
                    <tr><td><?php echo $msg_c; ?></td></tr>
                    
                   <!-- <th colspan="2" id="top-cmt">my comment</th>-->
                    <?php while($row=mysqli_fetch_array($query)){?>
                       
                    
                    <div class="cmt-txt">
                            <i class="i"><?php echo $row['description']; ?>
                                <i class="i" style=""><?php echo $row['date']; ?></i>
                            </i><i class="i" style="text-transform: uppercase;color: #222;"><?php echo $row['regno']; ?></i>
                            
                        
                    
                        
                       <br><hr class="line"><p id="cmnt"><?php echo $row['comments']; ?></p>
                        <?php if($login_session_u == $row['regno']){?>
                        <i class="i"><a onclick="return confirm('Are you sure you want to DELETE click ok to DELETE ?')" class="i" href="?comment&adv=<?php echo $row['a_id'] ?>&del=<?php echo $row['id'];?>">delete</a></i>
                        <i class="i"><a onclick="return confirm('Are you sure you want to EDIT click ok to EDIT ?')" class="i" href="?edit=<?php echo $row['id'];?>">edit</a></i>
                    
                        
                        <?php }elseif($role == 'superControl'){ ?>
                        <i class="i"><a onclick="return confirm('Are you sure you want to DELETE click ok to DELETE ?')" class="i" href="?comment&adv=<?php echo $row['a_id'] ?>&del=<?php echo $row['id'];?>">delete</a></i>
                        <i class="i"><a onclick="return confirm('Are you sure you want to EDIT click ok to EDIT ?')" class="i" href="?edit=<?php echo $row['id'];?>">edit</a></i>
                    <?php }?>
                        <br>   
                        </div>
                    
                <?php } ?>
                
                </table>
            </div>
        <!-- comment list ending  -->

        <?php //delete comment starting here
if(isset($_GET['del'])){
    $del=$_GET['del'];
    $adv=$_GET['adv'];

    $query=mysqli_query($dbc, "delete from comment where id='$del'");
    if($query){
        $message="<label class='msg'>data deleted successful</label>";
        header("location: home?comment&adv=$adv");
    }
} //ending of deleting comment
        ?>
        <!-- edit comment starting here -->
        <?php }elseif(isset($_GET['edit'])){ 
                        $edit=$_GET['edit'];
                        $query=mysqli_query($dbc, "select * from comment where id='$edit'");
                        $rows=mysqli_fetch_assoc($query);
                        $adv=$rows['a_id'];
                        if(isset($_POST['update'])){
                            $cmt=$_POST['comment'];
                        $update=mysqli_query($dbc, "update comment set comments='$cmt' where id='$edit'");
                        if($update){
                            echo "update successful";
                            header("location: ?comment&adv=$adv");
                        }else{echo "fail";}
                    }
            ?>
                    <div class="info" style="width: auto;">
                    <table border="0" style="width: auto;">
                        <form action="" method="post">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>edit comments</th></tr>
                    <?php error_reporting(0); //echo $message;?>
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="3" value="<?php echo $rows['comments'];?>" autofocus="" name="comment"><?php echo $rows['comments'];?></textarea></td>
                </tr>
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="update" value="update"></td>
                </tr>

            </form>
            </table>
        </div>
            
    <?php //ending here editing comment ?>
   
                    
       <!-- superControl panel page-->
            <?php }elseif(isset($_GET[$adm])){
            if($login_session_u == $row['regno'] && $row['role'] == 'superControl' or $row['role'] == 'gavana'){ ?>
   <?php
    if(isset($_GET['del'])){
    $del=$_GET['del'];
    $sql=mysqli_query($dbc, "delete from student_tb where id='$del'");
    if($sql){
        echo 'succes';
    } 
}?>             
                <!--search starting here inside superControl panel-->
<script src="../assets/js/jquery.js"></script>
                <center>
                    <div class="superControl-panel"><?php echo $role;?> panel</div>
                    <?php
                        #starting here update or change students role and information
                        if(isset($_GET['upt'])){
                          $usr_id=$_GET['upt'];
                           // echo "<br>take cake";
                            $query=mysqli_query($dbc, "select * from student_tb order by id desc limit 7");
                            $sql=mysqli_query($dbc, "select * from student_tb where sha1(id)='$usr_id' order by id desc limit 7");
                            $rows=mysqli_fetch_assoc($sql);

                            if(isset($_POST['UserRole'])){
                                if(empty($_POST['role'])){
                                        $msg="<label class=''>role is requred</label>";
                                }else{
                                    $role=$_POST['role'];
                                    $sql=mysqli_query($dbc, "update student_tb set role='$role' where sha1(id)='$usr_id'");
                                    if(!$sql){
                                        $message="<label class=''>fail update role</label>";
                                    }else{
                                        $message="<label class=''>successfully role applied!</label>";
                                    }
                                }
                            }
                            ?>
                            
                            <div class="info">
                                <div class="superControl-panel" style="margin:0px;padding: 5px;background: whitesmoke;">change role</div>
                            <table>
                                <form action="" method="post">
                                    <tr>
                                        <td>Change role</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $message ?></td>
                                    </tr>
                                    <tr>
                                        <td><input class="list-input" list="roles" id="role" autofocus="" name="role" placeholder="role">
                                        <datalist id="roles">
                                   <?php// while($row=mysqli_fetch_assoc($query)){?>
                                    <?php if($role == 'superControl'){ ?>
                                            <option value="gavana<?php //echo $row['role']?>">
                                            <?php } ?>
                                                <option value="makazi">
                                                <option value="elimu">
                                                <option value="michezo">
                                                <option value="sheria">
                                                <option value="afya">
                                                <option value="mikopo">
                                                <option value="fedha">
                                                <option value="jinsia">   
                                            <?php //} ?>
                                            
                                        </datalist>    
                                        </td>

                                    </tr>
                                    <tr><td><?php echo $msg; ?></td></tr>
                                    <tr>
                                        <td><input style="margin: 0px;" type="submit" value="submit" name="UserRole">
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                            <?php

    }elseif(isset($_GET['confirm'])){
    $conf=$_GET['confirm'];
?>
    <div class="info" style="max-height:400px;width:auto">
    <table style="background:white;width: auto;">
                                        
        <tr>
                <th colspan="3"><div><label class="ministry">allow advertisement</label><span class="note"> [ click <strong id="yes">yes</strong> to approve advertisement. ]</span></div></th>
        </tr>
         
        <?php 
        $query=mysqli_query($dbc, "select * from adv_tb order by a_id desc");
       
        
            
        if(mysqli_num_rows($query) == 0){
            ?>
        <tr>
            <td colspan="2" class="td-txt"><label class="message">no data found.</label></td>
        </tr>
         <?php   }
        while($row=mysqli_fetch_array($query)){
           $no_id=$row['a_id'];
           $yes_id=$row['a_id']; 
            if($row['confirm_adv'] == 'no' or 'yes' or ''){
                   //date for adv gif popup
            $now=time();
            $date=strtotime($row['date']);
            $diff=$now - $date;
            $datediff=round($diff / (24*60*60));

           
            if($datediff < 8 && $row['confirm_adv'] == 'yes'){ ?>
             <tr>         
            <td class="td-txt"><label><a class="linkB" href="#"><?php echo $row['description']. ' '.'('.$row['status'].')';?></a></label><label class="linkB" style="float:right;color:blue;font-size:11px"><?php echo $row['date']; ?></label></td>
        </tr>
        <tr>    
            <td colspan="2" class="td-txt"><?php echo $row['adv']; ?>
            <img class='img-superControl' style="float:right;" src='../assets/img/approve.png' name='approve' title='approve'>
            </td>

            <td> <img id='gif' style='width:40px;height:40px;' src='../assets/img/NEW1.gif'></td>
        </tr> 
        <tr>
        <td  class="td-approve"><label style="font-weight:900;text-transform:capitalize">approve:</label>
        <a title="click here to approve!" id="yes" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&yes_id=<?php echo $yes_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">yes</a>
            <a title="click here to disapprove!" id="no" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&no_id=<?php echo $no_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">no</a>
        <label class="approve" for="">already done with this, and approved!</label>      
        </td>
        </tr>
               
     

        <?php }elseif($datediff < 8 && $row['confirm_adv'] == 'no'){?>
            <tr>         
            <td class="td-txt"><label><a class="linkB" href="#"><?php echo $row['description']. ' '.'('.$row['status'].')';?></a></label><label class="linkB" style="float:right;color:blue;font-size:11px"><?php echo $row['date']; ?></label></td>
        </tr>
        <tr>    
            <td colspan="2" class="td-txt"><?php echo $row['adv']; ?>
            <img class='img-superControl' style="float:right;" src='../assets/img/reject.png' name='reject' title='not approve'>

        </td>
        <td><img id='gif' style='width:40px;height:40px;' src='../assets/img/NEW1.gif'></td>
        </tr> 
        <tr>
        <td class="td-approve"><label style="font-weight:900;text-transform:capitalize">approve: </label>
        <a title="click here to approve!" id="yes" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&yes_id=<?php echo $yes_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">yes</a>
         <a title="click here to disapprove!" id="no" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&no_id=<?php echo $no_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">no</a>
            <label class="notapprove" for="">already done with this, and approved!</label>
        </td>
        </tr>

        <?php
        }elseif($datediff > 8 && $row['confirm_adv'] == 'yes'){?>
            <tr>         
            <td class="td-txt"><label><a class="linkB" href="#"><?php echo $row['description']. ' '.'('.$row['status'].')';?></a></label><label class="linkB" style="float:right;color:blue;font-size:11px"><?php echo $row['date']; ?></label></td>
        </tr>
        <tr>    
            <td colspan="2" class="td-txt"><?php echo $row['adv']; ?>
  <img class='img-superControl' style="float:right;" src='../assets/img/approve.png' name='reject' title='not approve'>
        </td>
        </tr>
        <tr>
        <td class="td-approve"><label style="font-weight:900;text-transform:capitalize">approve: </label>
        <a title="click here to approve!" id="yes" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&yes_id=<?php echo $yes_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">yes</a>
        <a title="click here to disapprove!" id="no" title="click here to disapprove!" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&no_id=<?php echo $no_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">no</a>
        <label class="approve" for="">already done with this, and approved</label>    
    </td>
            </tr>
        <?php }elseif($datediff > 8 && $row['confirm_adv'] == 'no'){?>

            <tr>         
            <td class="td-txt"><label><a class="linkB" href="#"><?php echo $row['description']. ' '.'('.$row['status'].')';?></a></label><label class="linkB" style="float:right;color:blue;font-size:11px"><?php echo $row['date']; ?></label></td>
        </tr>
        <tr>    
            <td colspan="2" class="td-txt"><?php echo $row['adv']; ?>
            <img class='img-superControl' src='../assets/img/reject.png' name='approve' title='approve'>
        </td>
        </tr>
        <tr>
            <td class="td-approve"><label style="font-weight:900;text-transform:capitalize">approve:</label>
            <a title="click here to approve!" id="yes" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&yes_id=<?php echo $yes_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">yes</a>
            <a title="click here to disapprove!" id="no" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&no_id=<?php echo $no_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">no</a>
            <label class="notapprove" for="">already done with this, and approved</label>    
        </td></tr>

  <?php }elseif($row['confirm_adv'] == ''){?>
            <tr>         
            <td class="td-txt"><label><a class="linkB" href="#"><?php echo $row['description']. ' '.'('.$row['status'].')';?></a></label><label class="linkB" style="float:right;color:blue;font-size:11px"><?php echo $row['date']; ?></label></td>
        </tr>
        <tr>    
            <td colspan="2" class="td-txt"><?php echo $row['adv']; ?>
        </td>
        </tr>
        <tr>
        <td  class="td-approve"><label style="font-weight:900;text-transform:capitalize">approve: </label>
        <a title="click here to approve!" id="yes" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&yes_id=<?php echo $yes_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">yes</a>
        <a title="click here to disapprove!" id="no" title="click here to disapprove!" href="?<?php echo $adm;?>&confirm=<?php echo $conf;?>&no_id=<?php echo $no_id;?>" onclick="return confirm('Are you sure you want to Approve click ok to Approve ?')">no</a>
            
    </td>
            </tr>
            
        <?php }
 } }  ?> 
  
    </table>
    <style>
        .td-approve{
            padding-bottom:20px;

        }
        #no{
            margin-left:5px;
        }
        .notapprove{
            color:darkred;
            text-transform:capitalize;
        }
        .approve{
            color:darkgreen;
            text-transform:capitalize;
        }
        .notapprove, .approve{
            #background:#ccc;
            #border:1px solid #ccc;
            border-radius:4px;
            font-size:11px;
            padding:5px;
            margin-left:15px;
            font-weight:300;
        }
    </style>
    <?php
    if(isset($_GET['yes_id'])){
        $yes_id=$_GET['yes_id'];

        $update=mysqli_query($dbc, "update adv_tb set confirm_adv='yes' where a_id='$yes_id'");
        if(!$update){
            $msg="fail to change";
        }else{
            $msg="successful changed";
            header("location:?$adm&confirm=$conf");
        }
    }

    if(isset($_GET['no_id'])){
        $no_id=$_GET['no_id'];

        $update=mysqli_query($dbc, "update adv_tb set confirm_adv='no' where a_id='$no_id'");
        if(!$update){
            $msg="fail to change";
        }else{
            $msg="successful changed";
            header("location:?$adm&confirm=$conf");
        }
    }
    
    ?>

</div>
<?php

                        #ending here allow gavana advertisement

 #starting adding wizara
 #nuke
}elseif(isset($_GET['new_ministry'])){
    
    $query="select * from student_tb GROUP BY role";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_assoc($result)){
    $all_role .= "'".$row['role']."',";
   
}
//enum remove ministry here...
if(isset($_GET['en_remove'])){
$alter_en=mysqli_query($dbc,"ALTER TABLE `student_tb` MODIFY COLUMN role ENUM($all_role'none')");
header("location: ?$adm&new_ministry");
}

//echo $all_role .'<br>';
//echo "'".$all_role."',";
if(isset($_POST['ministry'])){
    if(empty($_POST['role'])){
        $message="<label>Add ministry is required!</label>";
    }else{
        $ministry_new = $_POST['role'];
        

$alter_=mysqli_query($dbc,"ALTER TABLE `student_tb` MODIFY COLUMN role ENUM($all_role'$ministry_new')");
if(!$alter_){
    $message="<label>fail to add ministry!</label>";
}else{
    $message="<label>successful added new ministry!</label>";
}    
}    }
    
    
    ?>
    <div class="info">
    <div class="superControl-panel" style="margin:0px;padding: 5px;background: whitesmoke;">adding new ministry</div>
<table>
    <form action="" method="post">
        <tr>
            <td>new ministry</td>
        </tr>
        <tr>
            <td><?php echo $message ?></td>
        </tr>
        <tr>
            <td><input style="width:95%" class="list-input" type="text" autofocus="" name="role" placeholder="ministry">
        
            </td>

        </tr>
        <tr><td><?php //echo $message; ?></td></tr>
        <tr>
            <td><input style="margin: 0px;" type="submit" value="submit" name="ministry">
            </td>
        </tr>
    </form>
</table>
</div>

<!-- select ministry -->
<?php 
include '../config/connection.php';
$con=mysqli_connect("localhost","root","","information_schema");
$table_name = "student_tb";
$column_name = "role";

$list_min_all=mysqli_query($dbc,"select DISTINCT id,role from student_tb group by role");
//$drop_=mysqli_query($dbc,"ALTER TABLE `student_tb` DELETE COLUMN role WHERE ENUM($all_role) like '%afya%'");

$result = mysqli_query($con,"SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_NAME = '$table_name' AND COLUMN_NAME = '$column_name'");

while($row = mysqli_fetch_array($result)){
$enumList = explode(",", str_replace("'", "", substr($row['COLUMN_TYPE'], 5, (strlen($row['COLUMN_TYPE'])-6))));

foreach($enumList as $value){

    $minstries .= $value;
}
}


//remove role 
if(isset($_GET['remove'])){
    $remove_id=$_GET['remove'];
    $sql_up=mysqli_query($dbc,"update student_tb set role='none' where sha1(id)='$remove_id'");
   header("location: ?$adm&new_ministry");
   //$ms="remove ministry successful";
}
?>
<div class="info" style="max-height:350px">
    <div class="superControl-panel" style="margin:0px;padding: 5px;background: whitesmoke;"> ministry list</div>

    
    <table class="min">
  
    <tr>
                <th>ministry</th>
                <th>assign</th>
                <th>action</th>
    </tr>
    <tr>
        <?php 
        $none1='none';
        $none2='';
        if($value != 'none'){?>
        <td class="td-cap"><?php echo $value; ?></td>
            <td>not assigned new(<a class="link-min-a" href="?<?php echo $adm;?>">role</a>)</td>
            <td><a class="link-min-r" onclick="return confirm('are you sure you want to remove this ministry?')"; href="?<?php echo $adm;?>&new_ministry&en_remove">remove</a></td>
            
        <?php }else{}?>    
        </tr>
            <?php while($row=mysqli_fetch_array($list_min_all)){?>
            <tr>
                <?php if($row['role']=='superControl' or $row['role']=='none' or $row['role']=='student' or $row['role']=='gavana' or $row['role']==''){}else{?>      
            <td class="td-cap"><?php echo $row['role']; ?></td>
            <td><a class="link-min-a" href="?<?php echo $adm;?>">role</a></td>
            <td><a class="link-min-r" onclick="return confirm('are you sure you want to remove this ministry?')"; href="?<?php echo $adm;?>&new_ministry&remove=<?php echo sha1($row['id']);?>">remove</a></td>
            <?php }?>
            </tr>
            <?php } ?>
        </tr>
</table>
</div>
<style>
    .link-min-r, .link-min-a{
        text-decoration:none;
    }
    .link-min-r{
        color:darkred;
    } 
    .link-min-r:hover{
        font-weight:900;
    } 
    .min{
	width: auto;
	#border: 1px solid #ccc;
	#background-color: #222;
    border-spacing:5px;
}
.min td,th{
	width: auto;
    padding:5px 15px;
}
.min{
    #background:#f7f7f7;
    border:1px solid dodgerblue;
    border-collapse:collapse;
    margin:10px 10px;
}
.min th{
    padding-bottom:0px;
    background:dodgerblue;
    color:#f8f8f8;
    padding:10px;
}
.td-cap{
    text-transform:uppercase;
    font-family:sans-serif;
    font-size:12px;

}
</style>
<?php

    #ending adding wizara
    #starting register form here
}elseif(isset($_GET['reg'])){
        if(isset($_POST['register']) or !isset($_POST['register'])){

#starting inserting data into table student_tb
$accept_special="/^[0][\d]{3} [\d]{3} [\d]{3}$/";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$program=$_POST['program'];

$text=preg_match('[a-zA-Z]', $fname);
$text=preg_match('[a-zA-Z]', $mname);
$text=preg_match('[a-zA-Z]', $lname);
$text=preg_match('[a-zA-Z]', $program);
                          
if(isset($_POST['submit'])){
if(empty($_POST['regno'])){
    $msg_reg="<label class='msg'>registration is required!</label>";
}if(empty($_POST['fname'])){
    $msg_fn="<label class='msg'>firstname is required!</label>";
}if(empty($_POST['mname'])){
    $msg_mn="<label class='msg'>middlename is required!</label>";
}if(empty($_POST['lname'])){
    $msg_ln="<label class='msg'>lastname is required!</label>";
}if(empty($_POST['gender'])){
    $msg_g="<label class='msg'>sex is required!</label>";
}if(empty($_POST['email'])){
    $msg_em="<label class='msg'>email is required!</label>";
}if(empty($_POST['program'])){
   $msg_pro="<label class='msg'>program is required!</label>";

}if($text != $lname or $mname or $fname or $program){
   /* $msg_ln="<label class='msg'>please only text is allowed!</label>";
    $msg_fn="<label class='msg'>please only text is allowed!</label>";
    $msg_mn="<label class='msg'>please only text is allowed!</label>";
    $msg_pro="<label class='msg'>please only text is allowed!</label>";
*/
}if(empty($_POST['phone'])){
    $msg_ph="<label class='msg'>mobile is required!</label>";   
}elseif(strlen($_POST['phone']) < 10){
    $msg_ph="<label class='msg'>mobile number must be 10 digit!</label>";
}elseif(strlen($_POST['phone']) > 10){
    $msg_ph="<label class='msg'>mobile number must be 10 digit!</label>"; 

}else{     

    
    $fname=strtoupper($_POST['fname']);
    $lname=strtoupper($_POST['lname']);
    $mname=strtoupper($_POST['mname']);
    $sex=strtoupper($_POST['gender']);
    $program=strtoupper($_POST['program']);
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $reg=strtoupper($_POST['regno']);
    $passwd=strtoupper($_POST['lname']);
    $role='student';


  
    $query=mysqli_query($dbc, "insert into student_tb(regno,fname,mname,lname,gender,email,phone,password,program,role) 
        values('$reg','$fname','$mname','$lname','$sex','$email','$phone',sha1('$passwd'),'$program','$role')");

    if(!$query){
        $message="<label class='msg'><center>data not saved!</center></label>";
    }else{
        $message="<label class='safe'><center>data saved successfully!</center></label>";
    }  
}

}

                                ?>
                            <div class="info" style="">
                                <form action="" method="post">
                                <table style="width:auto;margin-right:20px;">
                                    <th>
                                        new registration <?php echo $message_e.$ms;?>
                                    </th>
                                    <tr>
                                        <td>
                                            <input type="text" class="input-type" name="regno" placeholder="registration number" value="<?php echo $_POST['regno']; ?>">
                                            <?php echo $msg_reg;?>
                                        </td>
                                    
                                        <td>
                                            <input type="text" class="input-type" name="fname" placeholder="firstname" value="<?php echo $_POST['fname']; ?>">

                                            <?php echo $msg_fn;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="input-type" name="mname" placeholder="middlename" value="<?php echo $_POST['mname']; ?>">
                                            <?php echo $msg_mn;?>
                                        </td>
                                    
                                        <td>
                                            <input type="text" class="input-type" name="lname" placeholder="lastname" value="<?php echo $_POST['lname']; ?>">
                                            <?php echo $msg_ln;?>
                                        </td>
                                    </tr>
                                     <tr>
                                         <td>
   
                                        <div class="radio" style="margin-left: 10px;padding: 10px;border:1px solid #ccc;">        <label style="text-transform:capitalize;font-weight: 900;">choose sex:</label><br>
                                                <label class="radio-text">male</label><input type="radio" class="" name="gender" value="male">
                                                <label class="radio-text">female</label><input type="radio" name="gender" value="female">
                                            <?php echo $msg_g;?>
                                        </div>
                                        </td>
                                    
                                    
                                        <td>
                                            <input type="email" class="input-type" name="email" placeholder="email" value="<?php echo $_POST['email']; ?>">
                                            <?php echo $msg_em . $massage;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            <input type="tel" class="input-type" name="phone" placeholder="mobile number" value="<?php echo $_POST['phone']; ?>">
                                            <?php echo $msg_ph;?>
                                        </td>
                                         <td>
                                            <input type="text" class="input-type" name="program" placeholder="program" value="<?php echo $_POST['program']; ?>">
                                            <?php echo $msg_pro;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" class="input-submit" name="submit" value="submit">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><?php echo $message;?></td>
                                    </tr>
                                </table>
                            </form>
                            </div>
                         
                        <?php }
                         #register ending here
                        }elseif(isset($_GET['error'])){
                            header("location: ?error");
                        }elseif(isset($_GET[$adm])){ ?>
                   <!-- search starting displaying here -->
                    <div class="superControl-panel" style="margin-top: 10px;padding: 5px;">
                    <form action="?<?php echo $adm; ?>&&reg=new" method="post">
                    <?php if($role =='superControl'){?>
                        <button class="btn-add" name="register">register new user</button>
                        <?php } ?>
                    </form>
                    <form action="?<?php echo $adm; ?>&&confirm=advconf" method="post">
                        <button class="btn-add" name="confirm">approve</button>
                    </form>
                    <form action="?<?php echo $adm; ?>&&new_ministry" method="post">
                        <button class="btn-add" name="confirm">adding ministry</button>
                    </form>
                     <form action="" method="post">
                       <input class="search" type="text" name="search" placeholder="search" autofocus="" id="search" style="">
                    </form>
                </div>
                <?php
                    if(isset($_GET['del_user'])){?>
                    <div class="superControl-message">successfully removed!<i style="float:right;"><a class="linkA" href="?<?php echo $adm;?>">✖</a></i></div>

               <?php }?>
                    <div id="results"></div>
                <?php
            
            }else{
                            header("location: ?error"); }?>
                </center>
                <!-- search starting displaying here -->

<script>
$(document).ready(function(){
    load_data();
    function load_data(search)
    {
        $.ajax({
            url:"../php/users_search.php",
            method:"post",
            data:{search:search},
            success:function(data)
            {
                $('#results').html(data);
            }
        });
    }
    
    $('#search').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
            load_data(search);
        }
        else
        {
            load_data();            
        }
    });
});
</script>
              

            <?php }else{
                echo "you are not allowed here!";
                #reload page if link not matches
                header("location: ?dashboard");
            }
#ending of superControl  page

#starting changing passwd here.. users          
}elseif(isset($_GET[$changePass])){

    $pwd_reg="/^[a-zA-Z0-9]+$/";
    if($login_session_u == $row['regno']){
        #code for changing passwd
        if(isset($_POST['change'])){
if(empty($_POST['pwd'])){
    $msg_p="old password required";
}elseif(sha1($_POST['pwd']) != $pa_s){
    $msg_op="wrong password";
}
if(empty($_POST['npwd'])){
    $msg_p="new password required";
}if(empty($_POST['cpwd'])){
    $msg_p="confirm password required";
}if($_POST['npwd'] != $_POST['cpwd']){
    $msg_nm="password not match!";
}else{
//database connection
 $cpwd=$_POST['cpwd'];   
        $accept_special=preg_match('[a-zA-Z0-9@_!#$%^&*()<>?/|}{~:]', $cpwd);
        if($cpwd != $accept_special){
            $msg_p="<label class='msg'>password must be combination of lowercase,<br> uppercase, numbers, letters and special character!</label>";
    }else{
 $oldpasswd=sha1($_POST['pwd']);
 $newpasswd=sha1($_POST['npwd']);
 $cpwd=sha1($_POST['cpwd']);
 if($oldpasswd == $pa_s and $newpasswd == $cpwd){
     if(strlen($_POST['cpwd']) < 8){
        $msg_p="<label class='msg'>password must be atleast 8 character!</label>";
     }else{
    $query=mysqli_query($dbc, "update student_tb set password='$cpwd' where regno='$login_session_u'");
    if(!$query){
        echo "fail to update password";
        //header("location: ?dashboard");
    }else{
        $msg_success="<label class='msg' style='color:darkgreen'>password successfully updated!</label>";
    }
}
 }

 }
}
}
?>
<!--form for changing passwd-->
 <center>
          
         <table style="width: auto;">
         <tr>   
        <td class="head" style="size: 300px;">change password</td>
       </tr>
       <tr>
           <td><?php echo $msg_success; ?></td>
       </tr>
                <form action="" method="post">
                    
                    <tr>
                        <td class="message"><?php error_reporting(0); echo $msg_op . $msg_p;?></td>
                    </tr>
                    <tr>
                       <td class="input"><input type="password" name="pwd" placeholder="old password" size="40" value="<?php error_reporting(0); echo $_POST['pwd'];?>" requred autofocus></td>
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
                       <td class="input"> <input type="submit" value="change" name="change" required=""></td>
                   </tr>

                    </form>
                    </fieldset>
                    </table>
  
  </center>
  </div>
  <?php




        #end of changing password form
}else{
#reload page if link not matches
   header("location: ?dashboard");
}
?>


<?php
#reload page if link not matches

}elseif(isset($_GET['error'])){
      
echo $error;
?>
<style>
    .error{
        font-size: 24px;
        padding: 10px;
        margin: 10px;
        text-transform: capitalize;
    }
    #id{
        display: none;
    }
    .content{
        display: contents;
    }
    .error,.content{
        display: ruby;

    }
</style>

<!-- edit advertisement advatisement  -->
<?php
echo "<label class='error'>page not found</label>";


}elseif(isset($_GET['edit_adv'])){
    $adv=$_GET['adv'];

    $query=mysqli_query($dbc, "select * from adv_tb where sha1(a_id)='$adv'");
    $rows=mysqli_fetch_assoc($query);

    if(isset($_POST['update'])){
        $desc=$_POST['description'];
        $advert=$_POST['adv'];
        $file=$_FILES['file']['name'];
        $target="../file/".basename($_FILES['file']['name']);

        $query=mysqli_query($dbc, "update adv_tb set description='$desc',adv='$advert',file='$file' where sha1(a_id)='$adv'");
        if(!$query){
            $message="<label class='msg'>data updated successfully</label>";
        }else{

        if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
            
        }
        $message="<label class='msg'>data updated successfully</label>";
    
    }
}
?>

<div class="info" style="background: white;"> 

         <table border="0" style="background: white;padding: 10;">   
                      
              <form action="" method="post" enctype="multipart/form-data">
                    <tr><th style='font-size:16px;text-transform:capitalize;font-weight:900;text-align:left;'>edit advertisement</th></tr>
                             
                    <td><?php error_reporting(0); echo $message;?></td>
                    <tr>
                        <td class="cmt"><input class="textarea" id="cmt" type="text" name="description" value="<?php echo $rows['description'];?>" placeholder="description" autofocus=""></td>
                    </tr>
                    <tr>
                        <td class="cmt"><input style="background:white;" class="textarea" type="file" name="file" accept="application/" value="<?php echo $_FILES['image']['name'];?>"></td>
                        
                    </tr>
                    
                    <tr>
                    <td><textarea class="textarea" cols="60" rows="4" placeholder="advertisement" values="<?php echo $rows['adv'];?>" name="adv" autofocus=""><?php echo $rows['adv'];?></textarea></td>
                </tr>
                
                <tr>
                    <td class="cmt"><input id="cmt" type="submit" name="update" value="upload"></td>
                </tr>
            </form>
            </table>
                    </div>

<?php 
                include '../config/connection.php';
                $__select=mysqli_query($dbc, "select * from adv_tb where sha1(a_id)='$adv'");
                $count=mysqli_num_rows($__select);
                if($count == 0){
                    $message_count="<tr><td><label class='msg'>data not found!<label></td></tr>";
                }

                ?>
                    
                        <div class="info" style="">
                         <table style="background:white;width:auto;">
                            <tr>
                                        <th colspan="2"><div><label class="ministry"> advertisement</label></div></th>
                                </tr>
                                <?php error_reporting(0); echo $message_count; ?>
                                <tr> 
                            <?php
                                while($_row=mysqli_fetch_assoc($__select)){?>
                        
                        
                                    <td colspan="5" style="font-weight: 600" class="td-adv"><label><?php echo $_row['description'];?></label><i class="i"><?php echo strtolower($_row['date']);?></i></td>
                                </tr> 
                                <tr>   
                    
                                   <td colspan="3" class="td-adv"><label><?php echo strtolower($_row['adv']);?></label><br>
                                    <?php if($_row['file'] != ""){?>
                                    <i class="dw"><?php echo $_row['file'];?></i>
                                    <download class="dw"><a class="dw" href="../file/<?php echo $_row['file'];?>" type="">download</a></download><?php } ?>
                                    <i class="i"><a class="link-reply" href="?comment&&adv=<?php echo $_row['a_id'];?>">reply</i></a>
                                     <?php if($row['role'] == 'makazi' or $row['role']=='superControl'){ ?>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to delete')"; href="?makazi&&adv=<?php echo sha1($_row['a_id']);?>">delete</i></a>
                                    <i class="i"><a class="link-reply" onclick="return confirm('are you sure you want to EDIT')"; href="?edit_adv&&adv=<?php echo sha1($_row['a_id']);?>">edit</i></a></td>
                                <?php } ?>

                                </tr>
                               
                               <?php } ?>
                            </table>
                         </div>

<?php
//stating comments *
}elseif(isset($_GET['comments'])){?>
   
   <div class="info" style="float: ;max-width: 720px;max-height: 460px;padding: 15;border-radius: 4px;">
                <div class="top-cmt" style="">comments</div>
                <table style="background-color:white;width:auto;">
                    
                    <tr><td><?php echo $msg_c; ?></td></tr>
                    
                   <!-- <th colspan="2" id="top-cmt">my comment</th>-->
                    <?php 
                    $select_cmt=mysqli_query($dbc, "select * from comment order by id desc");
                    while($row=mysqli_fetch_array($select_cmt)){?>
                       
                    
                    <div class="cmt-txt">
                            <i class="i"><?php echo $row['description']; ?>
                                <i class="i" style=""><?php echo $row['date']; ?></i>
                            </i><i class="i" style="text-transform: uppercase;color: #222;"><?php echo $row['regno']; ?></i>
                            
                        
                    
                        
                       <br><hr class="line"><p id="cmnt"><?php echo $row['comments']; ?></p>
                        <?php if($login_session_u == $row['regno']){?>
                        <i class="i"><a onclick="return confirm('Are you sure you want to DELETE click ok to DELETE ?')" class="i" href="?comment&adv=<?php echo $row['a_id'] ?>&del=<?php echo $row['id'];?>">delete</a></i>
                        <i class="i"><a onclick="return confirm('Are you sure you want to EDIT click ok to EDIT ?')" class="i" href="?edit=<?php echo $row['id'];?>">edit</a></i>
                    
                        <?php }?>
                        
                        <?php if($role == 'superControl'){ ?>
                        <i class="i"><a onclick="return confirm('Are you sure you want to DELETE click ok to DELETE ?')" class="i" href="?comment&adv=<?php echo $row['a_id'] ?>&del=<?php echo $row['id'];?>">delete</a></i>
                        <i class="i"><a onclick="return confirm('Are you sure you want to EDIT click ok to EDIT ?')" class="i" href="?edit=<?php echo $row['id'];?>">edit</a></i>
                    <?php }?>
                        <br>   
                        </div>
                    
                <?php } ?>
                
                </table>
            </div>

 
<!--starting edit student information-->
<?php

}elseif(isset($_GET['edit_user'])){
$usr_id=$_GET['edit_user'];
//echo "trying to get cake";
$select=mysqli_query($dbc, "select * from student_tb where sha1(id)='$usr_id'");
$edt_row=mysqli_fetch_assoc($select);
if(isset($_POST['submit_edit_form'])){
if(empty($_POST['regno'])){
$msg_reg="<label class='msg'>registration is required!</label>";
}if(empty($_POST['fname'])){
$msg_fn="<label class='msg'>firstname is required!</label>";
}if(empty($_POST['mname'])){
$msg_mn="<label class='msg'>middlename is required!</label>";
}if(empty($_POST['lname'])){
$msg_ln="<label class='msg'>lastname is required!</label>";
}if(empty($_POST['gender'])){
$msg_g="<label class='msg'>sex is required!</label>";
}if(empty($_POST['email'])){
$msg_em="<label class='msg'>email is required!</label>";
}if(empty($_POST['phone'])){
$msg_ph="<label class='msg'>mobile is required!</label>";
}if(empty($_POST['program'])){
$msg_pro="<label class='msg'>program is required!</label>";

}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$sex=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$program=$_POST['program'];
$reg=$_POST['regno'];
$passwd=sha1($_POST['lname']);
$role='student';
if(!empty($reg) || !empty($fname) || !empty($lname) || !empty($mname) || !empty($sex) || !empty($phone) || !empty($email) || !empty($program) || !empty($passwd) || !empty($role)){

$query=mysqli_query($dbc, "update student_tb set fname='$fname',mname='$mname',lname='$lname',gender='$sex',email='$email',phone='$phone',program='$program',regno='$reg' where sha1(id)='$usr_id'");

if(!$query){
$message="<label class='msg'><center>data not updated!</center></label>";
header("location: ?edit_user=$usr_id&&fail");
}else{
$message="<label class='safe'><center>data updated successfully!</center></label>";
//echo $message;
header("location: ?edit_user=$usr_id&&success");

}  
}else{
echo "fields are empty";
}
}


if(isset($_GET['success'])){
$mess="<label class='safe'><center>data updated successfully!</center></label>";
header('refresh:3; ?dashboard');    
}elseif(isset($_GET['fail'])){
echo $mess="<label class='safe'><center>failed to update data!</center></label>";
header('refresh:3; ?dashboard');

}  

?>

<div class="info" style="">
    <form action="" method="post">
    <table style="width:auto;margin-right:20px;">
        <th>
            edit registration
            <?php //echo $message;?>
        </th>
        <tr>
            <td>
                <input type="text" class="input-type" name="regno" value="<?php echo strtoupper($edt_row['regno']);?>" placeholder="registration number">
                <?php echo $msg_reg;?>
            </td>
        
            <td>
                <input type="text" class="input-type" name="fname" value="<?php echo $edt_row['fname'];?>" placeholder="firstname">

                <?php echo $msg_fn;?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" class="input-type" name="mname" value="<?php echo $edt_row['mname'];?>" placeholder="middlename">
                <?php echo $msg_mn;?>
            </td>
        
            <td>
                <input type="text" class="input-type" name="lname" value="<?php echo $edt_row['lname'];?>" placeholder="lastname">
                <?php echo $msg_ln;?>
            </td>
        </tr>
         <tr>
         <td>

            <div class="radio" style="margin-left: 10px;padding: 10px;border:1px solid #ccc;">        <label style="text-transform:capitalize;font-weight: 900;">choose sex:</label><br>
                    <label class="radio-text">male</label><input type="radio" name="gender" value="male">
                    <label class="radio-text">female</label><input type="radio" name="gender" value="female">
                <?php echo $msg_g;?>
            </div>
            </td>
        
            <td>
                <input type="email" class="input-type" name="email" value="<?php echo $edt_row['email'];?>" placeholder="email">
                <?php echo $msg_em;?>
            </td>
        </tr>
         <tr>
            <td>
                <input type="text" class="input-type" name="phone" value="<?php echo $edt_row['phone'];?>" placeholder="mobile number">
                <?php echo $msg_ph;?>
            </td>
             <td>
                <input type="text" class="input-type" name="program" value="<?php echo $edt_row['program'];?>" placeholder="program">
                <?php echo $msg_pro;?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="input-submit" name="submit_edit_form" value="submit">
            </td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $mess;?></td>
        </tr>
    </table>
</form>
</div>

<?php

#ending here editing student data  

}else{
        header("location: ?error");
    }
    ?>   
</div>    

<?php include '../common/footer.php';?>

    </body>
</html>