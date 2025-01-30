  <?php
  session_start();
include 'db_connect.php';
      include 'aheader.php';
      if(isset($_SESSION['l_id']))
{
   $l_id=$_SESSION['l_id'];
   //var_dump($l_id);
}
// $s="SELECT * FROM  user WHERE ul_id=$l_id";
//       if(!$stmt=mysqli_query($con,$s))
//       {
//          die("prepare statement error1");
//       }
//       $result=mysqli_fetch_array($stmt);
      ?>
<div class="ser-img-grids" >
         <div class="container">
            <div class="blog-top-grids">
             
               <!-- <div class="col-md-5 ser-gr">
               </div> -->
               <!-- <div class="clearfix"> </div> -->
            <div class="image-low-gr" style="margin-left: 20%;">
                  <div class="blog-top-grids low-grid">
                     <div class="col-md-5 ser-bo">
                     </div>
                     <div class="col-md-7 service-two-grid imgser-right-side">
                        <h4>Admin Profile
                        </h4>
                       <p>Name :John Matew<br>
                    Phone : 9876542210<br>
                     Email : john@gmail.com<br>
                     Possition : MVD department Director</p>
                        <!-- <div class="w3layouts_more-buttn">
                           <a href="uedit.php?ul_id=<?php echo $l_id;?>">Edit</a>
                           <a href="udlete.php?ul_id=<?php echo $l_id;?>">Delete</a>
                        </div> -->
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