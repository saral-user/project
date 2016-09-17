<?php 
$fnameerr=$unameerr=$emailerr=$passworderr="";
$fname=$uname=$email=$password="";
$flag=true;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST['fname']))
	{
		$fnameerr="First name is required";
		$flag=false;
	}
	else
	{
	$fname=test($_POST['fname']);
    }
    if(empty($_POST['uname']))
    {
    	$unameerr="User name is required";
    	$flag=false;
    }
    else
    {
    	$uname=test($_POST['uname']);
    }
    if(empty($_POST['email']))
    {
    	$emailerr="Email is required";
    	$flag=false;
    }
    else
    {
    	$email=test($_POST['email']);
    }
    if(empty($_POST['password']))
    {
    	$passworderr="password is reqiured";
    	$flag=false;
    }else
    {
    	$password=test($_POST['password']);
    }

}
function test($data)
{
$data=trim($data);
$data=stripslashes($data);
return $data;
}
if(isset($_POST['submitted'])&& $flag)
{
	include('db.php');
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$sqlinsert="INSERT INTO users(first_name,last_name,user_name,email,password,address,phone) VALUES ('$fname','$lname','$uname','$email','$password','$address','$contact')";
	if(!mysql_query($sqlinsert,$connect))
	{
		die('error in inserting new record');
	}
	
	echo $newrecord="1 record added to the database";
header("Location: login.php?name=$uname");

}
?>
<html>
<head>
<title>
user registration</title>
</head>
<body>
<h1 align="center">User Registration</h1>
<form   onsubmit="return validateform()" method="post">
<input type="hidden" name="submitted" value="true"/>
<fieldset>
<legend>New users</legend>
FirstName<input type="text" name="fname">
<span class="error">* <?php echo $fnameerr;?></span>
LastName<input type="text" name="lname"></br></br>
UserName<input type="text" name="uname">
<span class="error">* <?php echo $unameerr;?></span></br></br>
Email<input type="text" name="email">
<span class="error">* <?php echo $emailerr;?></span></br></br>
Password<input type="password" name="password">
<span class="error">* <?php echo $passworderr;?></span></br></br>
Address<textarea name="address" rows="3" coloumn="9"> </textarea></br></br>
ContactNumber<input type="text" name="contact"></br></br>
</fieldset>
<input type="submit" value="register">

</form>

</body>
</html>
