    <?php 
session_start();
include('db_connect.php');
    include ('header.php');

if(isset($_POST['login']))
{
    
    $l_uname=$_POST['l_uname'];
    $l_password=$_POST['l_password'];
    $q="SELECT * FROM login where l_uname='$l_uname' and l_password='$l_password'";
    var_dump($q);
    $eqr=mysqli_query($con,$q);
    $r=$eqr->fetch_assoc();
    if($r)
    {
        if($r['l_type']=="admin" and $r['l_approve']=="approve")
        {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;
        //header("Location:adminprofile.php");
        //echo '<script language="javascript">alert("Successfuly Login")</script>';
       echo "<script>window.location.replace('adminprofile.php');</script>";
       }
       else if($r['l_type']=="user" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;
        //header("Location:guideprofile.php");
        echo "<script>window.location.replace('userprofile.php');</script>";
       }
         else if($r['l_type']=="shop" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;
        //header("Location:guideprofile.php");
        echo "<script>window.location.replace('shopprofile.php');</script>";
       }
      
        
       else
       {
         $_SESSION['msg']="username and password mismatch";
       }
    }
    else
    {
         $_SESSION['msg']="username and password mismatch";
     
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
            <h3 class="title">LOGIN</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post">
                  
                  <div class="styled-input">
                     <input type="email" name="l_uname" placeholder="EMAIL" required=""> 
                  </div>
                  <div class="styled-input">
                     <input type="password" name="l_password" placeholder="PASSWORD" required="">
                  </div>

                     <div class="styled-input">
                        <input type="submit" name="login" value="LOGIN">
                     </div>
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
            
          
      <!--//newsletter -->
      <?php
      include 'footer.php';
      ?>