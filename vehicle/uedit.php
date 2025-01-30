 <?php
session_start();
include 'db_connect.php';
include 'uheader.php';
if(isset($_GET['ul_id']))
  {
    $ul_id=$_GET['ul_id'];
    }

    $w="SELECT * FROM user WHERE ul_id=$ul_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];


  $phone=$_POST['phone'];
   $aadhar_no=$_POST['aadhar_no'];
  // $type="user";

  //$approve='approve';

   $qu="UPDATE user SET u_name='$name',u_phone='$phone',u_email='$email',u_aadhar='$aadhar_no' where ul_id=$ul_id";
  //var_dump($qu);

 $result1=$con->query($qu);
  if($result1)
  {
  
     echo "<script>
    window.location.replace('userprofile.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
    }

}
?>
      <!--//navbar-->
      <!-- banner -->
      <!-- <div class="inner_page_about">
      </div> -->
      <!--//banner -->
      <!--contact-->
      <div class="contact" id="contact">
         <div class="container">
            <h3 class="title">REGISTRATION</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post">
                  <div class="styled-input">
                     <input type="text" name="name" placeholder="NAME" required="" value="<?php echo $result['u_name'];?>">
                  </div>
                  <div class="styled-input">
                     <input type="email" name="email" placeholder="EMAIL" required="" value="<?php echo $result['u_email'];?>"> 
                  </div>
                   <!-- <div class="styled-input">
                     <input type="password" name="password" placeholder="PASSWORD" required=""> 
                  </div> -->
                  <div class="styled-input">
                     <input type="text" name="phone" placeholder="PHONE" required="" value="<?php echo $result['u_phone'];?>">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="aadhar_no" placeholder="AADHAR NO:" required="" value="<?php echo $result['u_aadhar'];?>">
                  </div>
          
                     <div class="click">
                        <input type="submit" name="submit" value="SUBMIT">
                     </div><br>
                     <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>

                  </div>
               </form>
            </div>
         
            <div class="clearfix"> </div>
         </div>
      </div>
      
       <?php
      include 'footer.php';
      ?>