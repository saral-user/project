welcome! 
 <?php
 session_start();
   echo $_GET['name'];
   echo "</br>";
    //print_r($_SESSION['user']);
    if(isset($_SESSION['user']))
    {
    	echo '<a href="logout.php">logout</a>';
    }
    else
    {
    	echo "";
    }
?>
<html>
<head>
<head><title>school website</title>
<style>
	#header
	{
		background-color: black;
		padding:5px;
		height:100;
		width: 981px;
	}
	
	#log
	{
		
		line-height: 30px;
		float:right;
		background-color:orange;
		height:536px;
		width:100;
		padding: 30;
		line-height: 30px;
	}
	#Menu
	{
		
		line-height: 30px;
		float:left;
		height:600;
		width:300;
		background-color: orange;
	}
	#image
	{
		
		text-align:center;
	}
	#section
	{
		width:450;
		height:200;
		padding:30px;
		margin-right: auto;
		margin-left: auto;
	}
	
</style>
</head> 
<body>
<div id="header">
<h1   align="center" style="color:violet"> Holy matriculation  higher secondary school</h1>
</div>
<div id="Menu">
<h3>Menu</h3>
<li> About us
<li> Gallery
<li> Achievements
<li> Awards
<li> Sports
</div>

<div id="log">
	<a href="login.php">Login</a>
	</br>
	<a href="registration.php">Register</a>
</div>

<div id="image">
<img src="photo.jpg" alt="school image" width="500" height="300">
</div>
<h2> Branches</h2>
<li>  primary school-Trichy
<li>  secondary school-Tambaram
<li>  higher secondary-chennai
</div>
</body>
</html>
