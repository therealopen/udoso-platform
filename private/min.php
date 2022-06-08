<!-- remove ministry -->
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
<div class="info">
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
        <td><?php echo $value; ?></td>
            <td><a class="link-min-a" href="?<?php echo $adm;?>">role</a></td>
            <td><a class="link-min-r" onclick="return confirm('are you sure you want to remove this ministry?')"; href="?<?php echo $adm;?>&new_ministry&en_remove">remove</a></td>
            
        <?php }else{}?>    