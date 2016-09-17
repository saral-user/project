<html>
<head>
<title >login</title>
<script type="text/javascript">
function valid()
{
	var username=document.getElementById("username").value;
	var password=document.getElementById("pass").value;
    var errors="";
  
	if(username=="" )
	{
		errors = errors+"username  is blank\n";
	}
	if(password=="")
	{
		errors=errors+"password is blank\n";
	}
//if error occurs
	if(errors!="")
	{

		alert(errors);
		return false;
		
	}
}

</script>
</head>
<body>
Hi! <?php 
if(isset($_GET['name']))
{
echo $_GET['name'];
}
?>


<form  action="student.php" onsubmit="return valid()"  method="post">
<fieldset>
<legend>Login user</legend>
user name : <input type="text" id="username" name="username"></br></br>
Password : <input type="password"  id="pass" name="pass"></br></br>
<input type="submit"  name="login" value="login">
</fieldset>
</form>
</body>
</html>
