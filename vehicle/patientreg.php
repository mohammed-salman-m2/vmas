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
   $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   $age=$_POST['age'];

  $phone=$_POST['phone'];
   $city=$_POST['city'];
   $state=$_POST['state'];
   $pincode=$_POST['pincode'];


  
  $address=$_POST['address'];
  $type='patient';

  $approve='approve';

  $b="INSERT INTO login(l_uname,l_password,l_approve,l_type)VALUES('$email','$password','$approve','$type')";
  //var_dump($b);

  if($con->query($b))

  {
    $id=mysqli_insert_id($con);
   // echo $id;

    $q="INSERT INTO `patient`(`pl_id`, `p_name`, `p_dob`, `p_age`, `p_gender`, `p_phone`, `p_email`, `p_password`, `p_city`, `p_state`, `p_address`, `p_pincode`, `image`)VALUES($id,'$name','$dob','$age','$gender','$phone','$email','$password','$city','$state','$address','$pincode','$image')";
   //var_dump($q,$b);
    //var_dump($q);
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
    $_SESSION['msg']="Successfully Register";
    }
  }
}
?>
	<!-- page details -->
	<div class="breadcrumb-agile py-1">
		<ol class="breadcrumb m-0">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Patient Form</li>
		</ol>
	</div>
	<!-- //page details -->




<!-- doctor form -->
	<section class="loan_w3ls py-5" id="loan">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-3">
					<div class="title-section mb-md-5 mb-4">
						<h6 class="w3ls-title-sub text-li">Form</h6>
						<h3 class="w3ls-title text-uppercase text-wh font-weight-bold">Patient Register</h3>
					</div>
				</div>
				<div class="col-lg-9">
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="row loan-form-w3ls">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Name" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="age" placeholder="Age" required="">
								</div>
							</div>
								<div class="col-lg-4">
								
								<div class="form-group date-plu">
									<input type="date" name="dob" id="dateofbirth" required="" placeholder="Date Of Birth">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="phone" placeholder="Phone Number" required="">
								</div>
							</div>
							<div class="col-lg-4">
								
								<div class="form-group">
									<input class="form-control" type="email" name="email" placeholder="Email" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Password" required="">
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<select required="" name="gender" class="form-control">
										<option value="">Select</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
								</div>
								<div class="form-group">
									<textarea class="form-control"  name="address" placeholder="Address" required=""></textarea>
									
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" name="city" placeholder="City" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="state" placeholder="State" required="">
								</div>
							</div>
						
							
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" name="pincode" placeholder="Pincode" required="">
								</div>
								<div class="form-group">
									<input class="form-control" type="file" name="image" placeholder="Photo" required="">
								</div>

							</div>
							<div class="col-lg-4">
								<button type="submit" name="submit" class="btn btn_apt">Send Form</button>
								<br><br>
								<?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>

							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- //doctor form -->
<?php
include 'footer.php';
?>
