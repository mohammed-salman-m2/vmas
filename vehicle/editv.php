   <?php
    session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
 if(isset($_GET['vul_id']))
{
    $vul_id=$_GET['vul_id'];
    
}
 if(isset($_GET['v_id']))
{
    $v_id=$_GET['v_id'];
    
}
$w="SELECT * FROM vehicle_details WHERE v_id=$v_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
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

  if($rc=="")
    {
        $rc=$_POST['rc1'];
    }

  if($image=="")
    {
        $image=$_POST['image1'];
    }
  $qu="UPDATE vehicle_details SET v_name='$vehicle_name',v_no='$vehicle_no',v_license='$license_no',v_engine='$engine_no',v_type='$vehicle_type',v_model='$vehicle_model',v_rc='$rc',image='$image' where v_id=$v_id";
  var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
  //echo "<script>window.location.replace('viewsubjecten.php');</script>";
    $rc="images/";
    $rc=$rc.basename($_FILES['rc']['name']);
    if(move_uploaded_file( $_FILES['rc']['tmp_name'],$rc))
    {
        echo "file upload";
        
    }
    //$_SESSION['msg']="Successfully Updated";
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
    //$_SESSION['msg']="Successfully Updated";
    else
    {
        echo "error to upload file";
    }
     echo "<script>
    window.location.replace('viewvdetails.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
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
                     <input type="text" name="license_no" placeholder="LICENSE NO:" required=""value="<?php echo $result['v_license'];?>">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="vehicle_no" placeholder="VEHICLE NO:" required=""value="<?php echo $result['v_no'];?>">
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
  <option value="<?php echo $result['v_type'];?>"><?php echo $result['v_type'];?></option>
  <option value="TWO">TWO WHEELER</option>
  <option value="THREE">THREE WHEELER</option>
    <option value="FOUR">FOUR WHEELER</option>
      <option value="HEAVY">HEAVY VEHICLE</option>
             </select>
                  </div>
                     <div class="styled-input" >
                     <input type="text" name="vehicle_name" placeholder="VEHICLE NAME" required="" value="<?php echo $result['v_name'];?>">
                   </div>
                      <div class="styled-input">
                     <input type="text" name="vehicle_model" placeholder="VEHICLE MODEL" required="" value="<?php echo $result['v_model'];?>">
                  </div>
                     <div class="styled-input">
                     <input type="text" name="engine_no" placeholder="ENGINE NO:" required="" value="<?php echo $result['v_engine'];?>">
                  </div>
                  


                  <div class="styled-input">
                    
                     
  Upload RC Details
  <img width="20%" height="40%" src="images/<?php echo $result['v_rc'];?>">
          <input placeholder="Image" name="rc" type="file"  value="<?php echo $result['v_rc'];?>">
                        <input type="hidden" name="rc1" value="<?php echo $result['v_rc'];?>" >
  
                  </div>
                  <div class="styled-input">
                    Upload Image
                    <img width="20%" height="40%" src="images/<?php echo $result['image'];?>">
          <input placeholder="Image" name="image" type="file"  value="<?php echo $result['image'];?>">
                        <input type="hidden" name="image1" value="<?php echo $result['image'];?>" >

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