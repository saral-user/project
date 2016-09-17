<?php 

$servername="localhost";
$username="root";
$password="";
/*$conn= new mysqli($servername,$username,$password);
if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}
*/
	$connect=mysql_connect("$servername","$username","$password") or die("not connecting"); 
	mysql_select_db("record") or die("no db");

?>
