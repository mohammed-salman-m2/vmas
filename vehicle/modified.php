   <?php
    session_start();
include 'db_connect.php';
include 'uheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
 if(isset($_GET['v_id']))
{
    $v_id=$_GET['v_id'];
    
}
if(isset($_POST['submit']))
{
  $descp=$_POST['descp'];
  
  $image=$_FILES['image']['name'];
  

  

  $q="INSERT INTO `modified`(`mv_id`,`mul_id`, `m_description`,`image`)VALUES('$v_id','$l_id','$descp','$image')";
  var_dump($q);

 
    
    if(mysqli_query($con,$q))

    {
         
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
            <h3 class="title">VEHICLE Modification</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post" enctype="multipart/form-data">
                 <textarea id="descp" name="descp" rows="10" cols="70" placeholder="Enter the Description Here....">
 
  </textarea>
                 
                  <div class="styled-input">
                                       
  Upload your Images Here...
  <input type="file" name="image" id="fileToUpload">
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