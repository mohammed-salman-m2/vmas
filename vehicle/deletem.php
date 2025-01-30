<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['m_id']))
 	{
 		$m_id=$_GET['m_id'];
 		$query="DELETE FROM modified WHERE m_id=$m_id";
 		$result=$con->query($query);
 		if($result)
 			{
 				header('Location:viewmodified.php');
 			}
 		}
?>