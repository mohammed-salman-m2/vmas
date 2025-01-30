<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['v_id']))
 	{
 		$v_id=$_GET['v_id'];
 		$query="DELETE FROM vehicle_details WHERE v_id=$v_id";
 		$result=$con->query($query);
 		if($result)
 			{
 				header('Location:viewvdetails.php');
 			}
 		}
?>