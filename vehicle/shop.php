 <?php
session_start();
include 'db_connect.php';
include 'header.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $image=$_FILES['image']['name'];

  $phone=$_POST['phone'];
   $place=$_POST['place'];
   $type="shop";

  $approve='not approve';

  $b="INSERT INTO login(l_uname,l_password,l_approve,l_type)VALUES('$email','$password','$approve','$type')";
  //var_dump($b);

  if($con->query($b))

  {
    $id=mysqli_insert_id($con);
   // echo $id;

    $q="INSERT INTO `shop`(`sl_id`, `s_name`, `s_place`, `s_phone`, `s_email`, `image`)VALUES($id,'$name','$place','$phone','$email','$image')";
   //var_dump($q,$b);
  //  var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

    {
      
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
    $_SESSION['msg']="Successfully Registered";
    }
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
            <h3 class="title">SHOP REGISTRATION</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post" enctype="multipart/form-data">
               <div class="styled-input">
                     <input type="text" name="name" placeholder="NAME : " required="">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="place" placeholder="PLACE : " required="">
                  </div>
                     <div class="styled-input" >
                     <input type="text" name="phone" placeholder="CONTACT : " required="">
                   </div>
                      <div class="styled-input">
                     <input type="text" name="email" placeholder="EMAIL : " required="">
                  </div>
                    <div class="styled-input">
                     <input type="password" name="password" placeholder="EMAIL : " required="">
                  </div>
                  <div class="styled-input">
                    
                     
  Upload Proof
  <input type="file" name="image" >
  
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