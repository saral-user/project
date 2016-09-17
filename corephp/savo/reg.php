<?php     //start php tag
//include connect.php page for database connection
include('sql.php');
if($_POST['submitted'])
{
	if($_POST['fname']=='' || $_POST['lname']=='' || $_POST['uname']==''|| $_POST['pass']==''){
	   echo "please fill the empty field.";
	}
	else
	{
		$sql="insert into users(first_name,last_name,user_name,password) values('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['uname']."', '".$_POST['pass']."')";
		$res=mysql_query($sql);
		if($res)
		{
		echo "Record successfully inserted";
		}
		else
		{
		echo "There is some problem in inserting record";
		}

  }
}
else
{
	echo "PLease fill form";
}

?>