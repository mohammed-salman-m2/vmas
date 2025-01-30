   <?php
    session_start();
include 'db_connect.php';
include 'sheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_POST['submit']))
{
  $pname=$_POST['pname'];
  $price=$_POST['price'];
  $model=$_POST['model'];
  $image=$_FILES['image']['name'];
  

  

  $q="INSERT INTO `product`(`asl_id`, `a_pname`, `a_price`, `a_model`, `image`)VALUES('$l_id','$pname','$price','$model','$image')";
  //var_dump($b);

 
    
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
            <h3 class="title">ADD PRODUCT</h3>
            <div class="col-md-6 contact-us">
               <form action="#" method="post" enctype="multipart/form-data">
               <div class="styled-input">
                     <input type="text" name="pname" placeholder="PRODUCT NAME : " required="">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="price" placeholder="PRICE : " required="">
                  </div>
                     <div class="styled-input" >
                     <input type="text" name="model" placeholder="MODEL : " required="">
                   </div>
                  <div class="styled-input">
                    
                     
  Upload Image
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