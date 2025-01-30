  <?php
  session_start();
include 'db_connect.php';
      include 'sheader.php';
      if(isset($_SESSION['l_id']))
{
   $l_id=$_SESSION['l_id'];
   //var_dump($l_id);
}
$s="SELECT * FROM  shop WHERE sl_id=$l_id";
      if(!$stmt=mysqli_query($con,$s))
      {
         die("prepare statement error1");
      }
      $result=mysqli_fetch_array($stmt);
      ?>
<div class="ser-img-grids">
         <div class="container">
            <div class="blog-top-grids">
             
               <!-- <div class="col-md-5 ser-gr">
               </div> -->
               <!-- <div class="clearfix"> </div> -->
               <div class="image-low-gr" style="margin-left: 20%;">
                  <div class="blog-top-grids low-grid">
                     <div class="col-md-5 ser-bu">
                     </div>
                     <div class="col-md-7 service-two-grid imgser-right-side">
                        <h4>Shop Profile
                        </h4>
                       <p>Name :<?php echo $result['s_name'];?><br>
                    Phone : <?php echo $result['s_phone'];?><br>
                     Email : <?php echo $result['s_email'];?><br>
                     Place : <?php echo $result['s_place'];?></p>
                        <div class="w3layouts_more-buttn">
                           <a href="sedit.php?sl_id=<?php echo $l_id;?>">Edit</a>
                           <a href="sdlete.php?sl_id=<?php echo $l_id;?>">Delete</a>
                        </div>
                     </div>
                     <div class="clearfix"> </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
        <?php
      include 'footer.php';
      ?>