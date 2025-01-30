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


  $phone=$_POST['phone'];
   $aadhar_no=$_POST['aadhar_no'];
   $type="user";

  $approve='approve';

  $b="INSERT INTO login(l_uname,l_password,l_approve,l_type)VALUES('$email','$password','$approve','$type')";
  //var_dump($b);

  if($con->query($b))

  {
    $id=mysqli_insert_id($con);
   // echo $id;

    $q="INSERT INTO `user`( `ul_id`, `u_name`, `u_email`, `u_password`, `u_phone`, `u_aadhar`)VALUES($id,'$name','$email','$password','$phone','$aadhar_no')";
   //var_dump($q,$b);
  //  var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

    {
      
  
    $_SESSION['msg']="Successfully Registered";
    }
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
                     <input type="text" name="name" placeholder="NAME" required="">
                  </div>
                  <div class="styled-input">
                     <input type="email" name="email" placeholder="EMAIL" required=""> 
                  </div>
                   <div class="styled-input">
                     <input type="password" name="password" placeholder="PASSWORD" required=""> 
                  </div>
                  <div class="styled-input">
                     <input type="text" name="phone" placeholder="PHONE" required="">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="aadhar_no" placeholder="AADHAR NO:" required="">
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