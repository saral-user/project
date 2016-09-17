<?php
/*echo "welcome ! ".$_POST["name"];
</br>*/
$servername="localhost";
$username="root";
$password="";
session_start();

/*$conn= new mysqli($servername,$username,$password);
if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}
echo "connected successfully";*/
$user=$_POST['username'];
$pass=$_POST['pass'];
if($user && $pass)
{
	$connect=mysql_connect("$servername","$username","$password") or die("not connecting"); 
	mysql_select_db("record") or die("no db");
	$sql="SELECT * FROM users WHERE user_name='$user' and password='$pass'";
	//echo $sql;die;
	$query=mysql_query($sql);
	$numrows=mysql_num_rows($query);
	
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbusername=$row['user_name'];
			$dbpassword=$row['password'];
			$_SESSION['user'] = $row;
		
		}
        echo "Valid user";
		
		header("Location: index.php?name=$dbusername");
	}
	else
		echo "user not valid";      
}
else
	     echo "please enter username and password";
?>
