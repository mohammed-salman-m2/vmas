<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['a_id']))
 	{
 		$a_id=$_GET['a_id'];
 		$query="DELETE FROM product WHERE a_id=$a_id";
 		$result=$con->query($query);
 		if($result)
 			{
 				header('Location:viewproduct.php');
 			}
 		}
?>