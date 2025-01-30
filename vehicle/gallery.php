  <?php 
session_start();
include('db_connect.php');
    include ('header.php');
    ?>
<!-- gallery-->
      <div id="gallery" class="gallery">
         <div class="container">
            <h3 class="title">Gallery</h3>
            <div class="gallery-info">
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids">
                  <a href="images/g10.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g10.jpg" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids">
                  <a href="images/g11.jpeg" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g11.jpeg" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids">
                  <a href="images/g12.png" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g12.png" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids  grid-mdl">
                  <a href="images/g14.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g14.jpeg" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids grid-mdl">
                  <a href="images/g15.jpeg" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g15.jpeg" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids  grid-mdl">
                  <a href="images/g15.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g15.jpg" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids  grid-mdl">
                  <a href="images/g17.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g17.jpg" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids  grid-mdl">
                  <a href="images/g18.png" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g18.png" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 gallery-grids  grid-mdl">
                  <a href="images/g13.webp" class="gallery-box" data-lightbox="example-set" data-title="">
                  <img src="images/g13.webp" alt="" class="img-responsive zoom-img">
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- //gallery-->

      <?php 

include('footer.php');
  ?>