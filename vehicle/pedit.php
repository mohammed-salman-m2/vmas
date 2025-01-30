   <?php
    session_start();
include 'db_connect.php';
include 'sheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
    
}
if(isset($_GET['a_id']))
  {
    $a_id=$_GET['a_id'];
    }

    $w="SELECT * FROM product WHERE a_id=$a_id";
// var_dump($w);
    if(!$stmt=mysqli_query($con,$w))
    {
      die("prepare statement error1");
    }
    $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
  $pname=$_POST['pname'];
  $price=$_POST['price'];
  $model=$_POST['model'];
  $image=$_FILES['image']['name'];
  

  

  if($image=="")
    {
        $image=$_POST['image1'];
    }
  $qu="UPDATE product SET a_pname='$pname',image='$image',a_model='$model',a_price='$price' where a_id=$a_id";
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
   // echo "<script>
   //  window.location.replace('viewproduct.php')
   //  </script>";
    $_SESSION['msg']="Successfully Updated";
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
                     <input type="text" name="pname" placeholder="PRODUCT NAME : " required="" value="<?php echo $result['a_pname'];?>">
                  </div>
                  <div class="styled-input">
                     <input type="text" name="price" placeholder="PRICE : " required="" value="<?php echo $result['a_price'];?>">
                  </div>
                     <div class="styled-input" >
                     <input type="text" name="model" placeholder="MODEL : " required="" value="<?php echo $result['a_model'];?>">
                   </div>
                  <div class="styled-input">
                    
                     
  Upload Image
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