   <?php
    session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
 if(isset($_GET['m_id']))
{
    $m_id=$_GET['m_id'];
    
}
$w="SELECT * FROM modified WHERE m_id=$m_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
  $descp=$_POST['descp'];
  
  $image=$_FILES['image']['name'];
  

    
  if($image=="")
    {
        $image=$_POST['image1'];
    }
  $qu="UPDATE modified SET m_description='$descp',image='$image' where m_id=$m_id";
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
   echo "<script>
    window.location.replace('viewmodified.php')
    </script>";
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
            <h3 class="title">VEHICLE Modification</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post" enctype="multipart/form-data">
                 <textarea id="descp" name="descp" rows="10" cols="70" placeholder="Enter the Description Here...."><?php echo $result['m_description'];?>
 
  </textarea>
                 
                  <div class="styled-input">
                                       
  Upload your Images Here...
   <img width="20%" height="40%" src="images/<?php echo $result['image'];?>">
          <input placeholder="Image" name="image" type="file"  value="<?php echo $result['image'];?>">
                        <input type="hidden" name="image1" value="<?php echo $result['image'];?>" >
  <!-- <input type="submit" value="Upload Image" name="submit"> -->

                  </div>
              
                     <div class="styled-input">
                        <input type="submit" name="submit" value="SUBMIT">
                     </div>
                     <?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>
            </form>
                  </div>
                  
              <!--  </form> -->

           </div></div>
          <!-- </form></div></div></div> -->

           
       <?php
      include 'footer.php';
      ?>