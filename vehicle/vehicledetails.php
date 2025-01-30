   <?php
    session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $license_no=$_POST['license_no'];
  $vehicle_no=$_POST['vehicle_no'];
  $vehicle_type=$_POST['vehicle_type'];
  $image=$_FILES['image']['name'];
  $rc=$_FILES['rc']['name'];

   $vehicle_name=$_POST['vehicle_name'];
   $vehicle_model=$_POST['vehicle_model'];
   $engine_no=$_POST['engine_no'];

  

  $q="INSERT INTO `vehicle_details`(`vul_id`, `v_license`, `v_no`, `v_type`, `v_name`, `v_model`, `v_engine`, `v_rc`, `image`)VALUES('$l_id','$license_no','$vehicle_no','$vehicle_type','$vehicle_name','$vehicle_model','$engine_no','$rc','$image')";
  //var_dump($b);

 
    
    if(mysqli_query($con,$q))

    {
          $rc="images/";
    $rc=$rc.basename($_FILES['rc']['name']);
    if(move_uploaded_file( $_FILES['rc']['tmp_name'],$rc))
    {
        echo "file upload";
        
    }
    //
    else
    {
        echo "error to upload file";
    }
      
      $image="images/";
    $image=$image.basename($_FILES['image']['name']);
    if(move_uploaded_file( $_FILES['image']['tmp_name'],$image))
    {
        echo "file upload";
        
    }
    //
    else
    {
        echo "error to upload file";
    }
    $_SESSION['msg']="Successfully Register";
    }
  
}
?>
      <!-- banner -->
      <!-- <div class="inner_page_about">
      </div> -->
      <!--//banner -->
      <!--contact-->
      <div class="contact" id="contact">
         <div class="container">
            <h3 class="title">VEHICLE DETAILS</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post" enctype="multipart/form-data">
               <div class="styled-input">
                     <input type="text" name="license_no" placeholder="LICENSE NO:" required="">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="vehicle_no" placeholder="VEHICLE NO:" required="">
                  </div>
                
                  <div class="styled-input" >
                     <select name="vehicle_type" style="color: #000;
    border: none;
    padding: 1em;
    border:2px solid #000;
    font-size: 15px;
    width: 100%;
    background: rgba(229, 143, 230, 0);
    outline: none;
    letter-spacing: 1px;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;">
  <option value="">SELECT VEHICLE TYPE</option>
  <option value="TWO WHEELER">TWO WHEELER</option>
  <option value="THREE WHEELER">THREE WHEELER</option>
    <option value="FOUR WHEELER">FOUR WHEELER</option>
      <option value="HEAVY VEHICLE">HEAVY VEHICLE</option>
             </select>
                  </div>
                     <div class="styled-input" >
                     <input type="text" name="vehicle_name" placeholder="VEHICLE NAME" required="">
                   </div>
                      <div class="styled-input">
                     <input type="text" name="vehicle_model" placeholder="VEHICLE MODEL" required="">
                  </div>
                     <div class="styled-input">
                     <input type="text" name="engine_no" placeholder="ENGINE NO:" required="">
                  </div>
                  


                  <div class="styled-input">
                    
                     
  Upload RC Details
  <input type="file" name="rc" >
  
                  </div>
                  <div class="styled-input">
                    Upload Image
                    <input type="file" value="Upload Image" name="image">

                  </div>
                  <div>
                     <div class="styled-input">
                        <input type="submit" name="submit" value="SUBMIT">
                     </div>
                  </div>
                  <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>
              <!--  </form> -->

           </form></div></div></div>
          <!-- </form></div></div></div> -->

           
       <?php
      include 'footer.php';
      ?>