    
<?php
session_start();
//mysqli_query($connect, "INSERT INTO employees1(fname,lname, email)VALUES('$fname','$lname', '$email')");
//include('connection.php');
include 'connect.php'; 
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];

mysqli_query($connect, "INSERT INTO register(id,name, email, password, contact)VALUES('$id','$name', '$email', '$password','$contact')");
header("location: main.html?remarks=success");
mysqli_close($con);

?>




/* //start php tag
//include connect.php page for database connection
Include('connect.php')
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit'])!='')
{
If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''|| $_REQUEST['repassword']==''|| $_REQUEST['contact']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into register(name,email,password,repassword) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['repassword']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}
}

?>