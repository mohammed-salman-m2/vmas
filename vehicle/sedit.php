 <?php
session_start();
include 'db_connect.php';
include 'sheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_GET['sl_id']))
  {
    $sl_id=$_GET['sl_id'];
    }

    $w="SELECT * FROM shop WHERE sl_id=$sl_id";
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
  //$password=$_POST['password'];

  $image=$_FILES['image']['name'];

  $phone=$_POST['phone'];
   $place=$_POST['place'];
   if($image=="")
    {
        $image=$_POST['image1'];
    }
  $qu="UPDATE shop SET s_name='$name',image='$image',s_place='$place',s_phone='$phone',s_email='$email' where sl_id=$sl_id";
  // var_dump($qu);
  // exit();

 $result1=$con->query($qu);
  if($result1)
  {
  //echo "<script>window.location.replace('viewsubjecten.php');</script>";
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
    window.location.replace('shopprofile.php')
    </script>";
    }
       //$_SESSION['msg']="Successfully Updated....";
    //}
}
?>
      <!-- banner -->
      <!-- <div class="inner_page_about">
      </div> -->
      <!--//banner -->
      <!--contact-->
      <div class="contact" id="contact">
         <div class="container">
            <h3 class="title">SHOP REGISTRATION</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post" enctype="multipart/form-data">
               <div class="styled-input">
                     <input type="text" name="name" placeholder="NAME : " required="" value="<?php echo $result['s_name'];?>">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="place" placeholder="PLACE : " required="" value="<?php echo $result['s_place'];?>">
                  </div>
                     <div class="styled-input" >
                     <input type="text" name="phone" placeholder="CONTACT : " required="" value="<?php echo $result['s_phone'];?>">
                   </div>
                      <div class="styled-input">
                     <input type="text" name="email" placeholder="EMAIL : " required="" value="<?php echo $result['s_email'];?>">
                  </div>
                  <!--   <div class="styled-input">
                     <input type="password" name="password" placeholder="EMAIL : " required="">
                  </div> -->
                  <div class="styled-input">
                    
                     
  Upload Proof
  <img width="20%" height="40%" src="images/<?php echo $result['image'];?>">
          <input placeholder="Image" name="image" type="file"  value="<?php echo $result['image'];?>">
                        <input type="hidden" name="image1" value="<?php echo $result['image'];?>" >
  
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
              <!--  </form> -->

           </form></div></div></div>
          <!-- </form></div></div></div> -->

           
       <?php
      include 'footer.php';
      ?>