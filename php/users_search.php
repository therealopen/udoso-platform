
<?php

include 'session.php'; 
include '../config/connection.php';

?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="..assets/css/style.css">
	<script src="../assets/js/jquery.js"></script>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compactible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
	.action{
		width: 100px;
		border: none;
		color: white;
	}
	.action button:hover{
		background: dodgerblue;
	}
	.info{
		max-height:250px;
		width:auto;
		padding: 10px;
		margin: 20px;
		background-color: white;
	}
	table{
		text-transform: uppercase;
		width: auto;
		padding: 10px;
		background-color: whitesmoke;
		border: 1px solid #ccc;
		border-radius: 3px;
	}
	table.content{
		width: 480px;
	}
	.content{
		margin-left: 5px;
		margin-right: 0px;
		
	}
	th{
		background: whitesmoke;
		padding: 10px;
		text-transform: capitalize;
		font-family: sans-serif;
		font-size: 12;
	}
	td{
		font-size: 12px;
		padding: 15px;
		font-family: sans-serif;
		text-transform: capitalize;
	}
	.msg{
		font-size: 12px;
	}
@media only screen and (min-width: 768px){
	.content{
		margin-left: 20px;
		margin-right: 0px;
		min-width:97%;
	}	
	.info{
		max-height: 250px;
		width:auto;
		padding: 10px;
		margin: 20px;
		background-color: white;
		border-radius: 8px;
		border: none;
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
	table{
		border-collapse: collapse;
		border-spacing: 3px;
		text-transform: uppercase;
		width: auto;
		padding: 15px;
		background-color: white;
		border: none;
		border-radius: 4px;
	}
	td{
		border-radius: 4px;
		#border: 1px solid #ccc;
		padding: 10px;
	}
	
}
    .img-superControl{
        width: 20px;
        height: 20px;
        border: 1px solid none;
        border-radius: 4px;
    }

</style>
</head>
<body>

	<?php
	if(isset($_POST['search'])){
		
	$search=mysqli_real_escape_string($dbc, $_POST['search']);
	$query="
	 select * from student_tb where fname like '%".$search."%' 
	 OR regno like '%".$search."%'
	 OR fname like '%".$search."%'
	 OR mname like '%".$search."%'
	 OR lname like '%".$search."%'
	 OR gender like '%".$search."%'
	 OR email like '%".$search."%'
	 OR program like '%".$search."%'
	 OR role like '%".$search."%'
	 order by fname asc
	 ";

	 $sql=mysqli_query($dbc,$query);
	 $count=mysqli_num_rows($sql);
	if($count > 0){

		
?>
		

<div class="info">
<table>
	<form action="" method="post">
	<tr>
	<th>reg</th>
	<th>fullname</th>
	<th>phone</th>
	<th>role</th>
	<th>sex</th>
	<th>email</th>
	<th>program</th>
	<th></th>
	<?php 
	//hide gavana
	if($role == 'gavana'){?>
		<th colspan="3">role</th>
	<?php }else{
	?>
	<th colspan="3">operation</th>
	<?php }?>
</tr>
<?php
while($row=mysqli_fetch_array($sql)){
	$upt=sha1($row['id']);
	$edt=sha1($row['id']);
	$del=sha1($row['id']);

?>
<?php if($row['role']=='superControl'){}else{?>
<tr>
	<td><mark style="text-transform:uppercase"><?php echo $row['regno'];?></mark></td>
	<td><?php echo strtoupper($row['fname'].'  '.$row['mname'].'  '.$row['lname']);?></td>
	<td><?php echo strtoupper($row['phone']);?></td>
	<td><?php echo $row['role'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td style="text-transform:lowercase;"><?php echo $row['email'];?></td>
	<td><?php echo strtoupper($row['program']);?></td>
	
	
	<td><form method="post" action="?<?php echo $adm;?>&&upt=<?php echo $upt;?>"><input type="image" src="../assets/img/role.png" title="change role" class="img-superControl"  style="background:cadetblue;color: white;" name="update" class="action" onclick="return confirm('Are you sure you want to CHANGE ROLE click ok to CHANGE ROLE ?')"></form></td>
	
	<?php 
	//hide gavana
	if($role == 'gavana'){
		
	}else{
	?>
	<td><form method="post" action="?<?php echo $adm;?>&&edit_user=<?php echo $edt;?>"><input type="image" src="../assets/img/edit.png" title="edit details" class="img-superControl" style="background:cadetblue" type="submit" name="edit" class="action" onclick="return confirm('Are you sure you want to EDIT click ok to EDIT ?')"></form></td>
	
	<td><form action="../php/operation.php?rmv=<?php echo $del;?>" method="post">
		<input type="image" class="img-superControl" src="../assets/img/remove.png" name="remove" title="remove student" style="background:#ed400c" onclick="return confirm('Are you sure you want to DELETE click ok to DELETE ?')" class="action">
		</form>
	</td>

</tr>
<?php } ?>

<?php 
}
}
?>
<!--<tr class="tr"><td class="td"><button id="print" onclick="window.print();" target="_blank" style="cursor:pointer;">Print</button></td></tr>-->
</table>
</form>
</div>

<?php
}else{
	$mms= "<label class='msg' style='padding:10px;'>no data found ! </label><br>";
	echo $mms;
}

?>

<?php
}else{
	$query="select * from student_tb order by fname asc";
	$sql=mysqli_query($dbc,$query);
	$count=mysqli_num_rows($sql);
	if($count > 0){
		
?>


<div class="info">
	<table style="text-transform: uppercase;">
			<tr>
	<th>reg</th>
	<th>fullname</th>
	<th>phone</th>
	<th>role</th>
	<th>sex</th>
	<th>email</th>
	<th>program</th>
	<th></th>
	<?php 
	//hide gavana
	if($role == 'gavana'){?>
		<th colspan="3">role</th>
		<?php
	}else{
	?>
	<th colspan="3">operation</th>
	<?php } ?>
</tr>

<?php

while($row=mysqli_fetch_array($sql)){
	$upt=sha1($row['id']);
	$edt=sha1($row['id']);
	$del=sha1($row['id']);

?>
<?php if($row['role']=='superControl'){}else{?>
<tr>
	<td style="text-transform:uppercase"><?php echo strtoupper($row['regno']);?></td>
	<td><?php echo strtoupper($row['fname'].' '.$row['mname'].' '.$row['lname']);?></td>
	<td><?php echo strtoupper($row['phone']);?></td>
	<td><?php echo $row['role'];?></td>
	<td><?php echo $row['gender'];?></td>
	<td style="text-transform:lowercase;"><?php echo $row['email'];?></td>
	<td><?php echo strtoupper($row['program']);?></td>
	<td><form method="post" action="?<?php echo $adm;?>&&upt=<?php echo $upt;?>"><input type="image" src="../assets/img/role.png" title="change role" class="img-superControl"  style="background:cadetblue;color: white;" name="update" class="action" onclick="return confirm('Are you sure you want to CHANGE ROLE click ok to CHANGE ROLE ?')"></form></td>
	
	<?php 
	//hide gavana
	if($role == 'gavana'){
		
	}else{
	?>
	<td><form hidden method="post" action="?<?php echo $adm;?>&&edit_user=<?php echo $edt;?>"><input type="image" src="../assets/img/edit.png" title="edit details" class="img-superControl" style="background:cadetblue" type="submit" name="edit" class="action" onclick="return confirm('Are you sure you want to EDIT click ok to EDIT ?')"></form></td>
	
	<td><form action="../php/operation.php?rmv=<?php echo $del;?>" method="post">
		<input type="image" class="img-superControl" src="../assets/img/remove.png" name="remove" title="remove student" style="background:#ed400c" onclick="return confirm('Are you sure you want to DELETE click ok to DELETE ?')" class="action">
		</form>
	</td>


</tr>
<?php } ?>

<?php
	}

}
}else{
	echo "<label class='msg'>no data found</label>";
}
}

?>
</table>
</div>
</center>
</body></html>