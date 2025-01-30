  <?php
session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    //var_dump($l_id);
}
// $s="SELECT * FROM  admin";
//         if(!$stmt=mysqli_query($con,$s))
//         {
//             die("prepare statement error1");
//         }
//         $result=mysqli_fetch_array($stmt);
?>

    <!-- page details -->
<!--   <div class="breadcrumb-agile py-1">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Patient</li>
    </ol>
  </div> -->
  <!-- //page details -->
   <style>
    .button {
  /*background-color: #4CAF50;*/
  border-radius: 12px;
  border: none;
  color: white;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #fff;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #031427;
  color: white;
}
</style>
<br><br>
<center>
    <div><h1>Shop</h1></div></center>
<center><div style="width:90%; background-color: white; ">
<table id="customers">
  <tr>
    <th>Proof</th>
    <th>Name</th>

    <th>Place</th>
    <th>Contact No</th>
    <th>Email</th>
    <th>Status</th>
    <!-- <th>Approve</th> -->
    <th>View</th>


    <!--<th>Engin No</th> -->
    <!-- <th>Edit</th>
    <th>Delete</th> -->
    <!-- <th>Modified</th> -->

    <!-- <th>City</th>
    <th>State</th>
    <th>Pincode</th>
 -->


  </tr>
                    <?php

//$s="SELECT * FROM shop";
$s="SELECT * FROM shop INNER JOIN login on shop.sl_id=login.l_id where login.l_approve='approve'";

//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $s_id=$row['s_id'];
  $sl_id=$row['sl_id'];

  // $subject=$row['subject'];
  $name=$row['s_name'];
 $image=$row['image'];
  $phone=$row['s_phone'];
  $email=$row['s_email'];

  $place=$row['s_place'];
  $approve=$row['l_approve'];


 

  

                                ?>
                    <tr>
    <td><img src="images/<?php echo $image;?>" width="100px" height="100px"></td>
    <!-- <td><img src="images/<?php echo $v_rc;?>" width="100px" height="100px"></td> -->

                                     <td><?php echo $name;?></td>
                                    <td><?php echo $place;?></td>
                                    <td><?php echo $phone;?></td> 
                                    <td><?php echo $email;?></td>
                                    <td><?php echo $approve;?></td>


                                
                                  <td><a href="vproduct.php?sl_id=<?php echo $sl_id;?>&s_id=<?php echo $s_id;?>"><button class="button" style="background-color: #4CAF11;">Product</button></a></td>

  </tr>
  <?php
                             }
                             ?>
  
</table>
</div></center> 
<br><br>

    <?php
    include 'footer.php';
    ?>