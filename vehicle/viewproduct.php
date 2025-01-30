 <?php
session_start();
include 'db_connect.php';
include 'sheader.php';
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
<!-- services-->
      <div class="services" id="services">
         <h3 class="title clr">View product</h3>
         <div class="banner-bottom-girds">
             <?php

$s="SELECT * FROM product WHERE asl_id=$l_id ";

      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $a_id=$row['a_id'];
  $asl_id=$row['asl_id'];

 
  $pname=$row['a_pname'];

  $price=$row['a_price'];
  $model=$row['a_model'];
   $image=$row['image'];
  
   ?>
            <div class="col-md-4 col-sm-6 col-xs-6 its-banner-grid gird-ser-clr2">
               <div class="white-shadow">
                  <div class="white-left">
                     <span class="fa fa-truck banner-icon" aria-hidden="true"></span>
                  </div>
                  <div class="white-right">
                    <p><img src="images/<?php echo $image;?>" width="100px" height="100px"></p>
                     <h4><?php echo $pname; ?></h4>
                     <p>Price :<?php echo $price; ?></p>
                     <p>Model : <?php echo $model; ?></p>
                     <!-- <p>Aadhar No : <?php echo $aadhar; ?></p> -->
                      <div class="w3layouts_more-buttn">
                           <a href="pedit.php?a_id=<?php echo $a_id;?>">Edit</a>
                           <a href="pdelete.php?a_id=<?php echo $a_id;?>">Delete</a>
                        </div>

                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <?php
         }
         ?>
            <!-- <div class="col-md-4 col-sm-6 col-xs-6 its-banner-grid gird-ser-clr">
               <div class="white-shadow">
                  <div class="white-left">
                     <span class="fa fa-clock-o banner-icon" aria-hidden="true"></span>
                  </div>
                  <div class="white-right">
                     <h4>Fast Delivery</h4>
                     <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 its-banner-grid gird-ser-clr2">
               <div class="white-shadow">
                  <div class=" white-left">
                     <span class="fa fa-lock banner-icon" aria-hidden="true"></span>
                  </div>
                  <div class=" white-right">
                     <h4>Secured Service</h4>
                     <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div> -->
          <!--   <div class="col-md-4 col-sm-6 col-xs-6 its-banner-grid colo">
               <div class="white-shadow">
                  <div class=" white-left">
                     <span class="fa fa-archive banner-icon" aria-hidden="true"></span>
                  </div>
                  <div class="white-right">
                     <h4>Packing</h4>
                     <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 its-banner-grid gird-ser-clr2">
               <div class="white-shadow">
                  <div class="white-right">
                     <div class="white-left">
                        <span class="fa fa-fighter-jet banner-icon" aria-hidden="true"></span>
                     </div>
                     <h4>Fly Anywhere</h4>
                     <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 its-banner-grid colo">
               <div class="white-shadow">
                  <div class="white-right">
                     <div class=" white-left">
                        <span class="fa fa-home banner-icon" aria-hidden="true"></span>
                     </div>
                     <h4>Warehousing </h4>
                     <p>delectus reiciendis maiores alias consequatur aut.maiores alias consequatur aut.</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div> -->
            <div class="clearfix"> </div>
         </div>
      </div>
      <!--// services-->
      <?php
      include 'footer.php';
      ?>