<?php 
include "connect.php";
$key=$_GET['key'];
$q="select * from movies where name like '%$key%'";
$res=mysqli_query($connect,$q);
if($res){
	$result="";
	while($row=mysqli_fetch_array($res)){
		$result.=$row[2];		
	}
	echo $result;
	}
	else{
		echo "<script type='text/javascript'>alert('something went wrong')</script>";
	}
 ?>
