<?php
session_start();
include("db_connect.php");
if(isset($_GET['sl_id']))
{
	$sl_id=$_GET['sl_id'];
	 

 $query="DELETE s,n FROM shop AS s INNER JOIN login AS n ON s.sl_id=n.l_id WHERE s.sl_id=$sl_id";
 //var_dump($query);
	// $query="DELETE FROM login,registration using login INNER JOIN registration INNER JOIN astrologer WHERE login.lo_id=registration.lo_id AND registration.lo_id=astrologer.lo_id";
	$result=$con->query($query);
	if($result)
	{
		header('Location:index.php');
	}
}
?>