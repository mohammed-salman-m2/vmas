<?php
include('db_connect.php');
if(isset($_GET['m_id']))
{
  $m_id=$_GET['m_id'];
  //var_dump($l_id);
  
}

  $approve='not approve';

  $q="UPDATE modified SET m_approve='$approve' WHERE m_id=$m_id"; 
  
  	$result=$con->query($q);
  	if($result)
  	{
  		header("location:vmodified.php");
  	}
  ?>