<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="newmembers"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$name= $_POST['name'];
$email= $_POST['email'];
$user= $_POST['user'];
$pass= $_POST['pass'];
$check = mysql_query("select * from newmembers where username='$user'") or die(mysql_error());
$count = mysql_num_rows($check);
if ($count > 0)
{
	$msg='Username Already Exist!'; 
}
else
{
	$sql = mysql_query("INSERT INTO newmembers (name,email,username,password) VALUES ('$name','$email','$user','$pass')");
	
}
header("location:main_login.php");

?>
