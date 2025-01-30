<!--footer -->
      <footer>
         <div class="container">
            <div class="col-md-6 col-sm-7 header-side">
               <div class="header-side">
                  <div class="buttom-social-grids">
                     <ul>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-rss"></span></a></li>
                        <li><a href="#"><span class="fa fa-vk"></span></a></li>
                     </ul>
                  </div>
               </div>
               <p>©2018 VEHICLE MODIFICATION APPROVAL. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">GROUP 1</a></p>
            </div>
            <div class="col-md-6 col-sm-5 header-right">
               <h2><a href="index.php">VEHICLE MODIFICATION APPROVAL</a></h2>
            </div>
         </div>
      </footer>
      <!--//footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!-- //js  working-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
               event.preventDefault();
               $('html,body').animate({
                  scrollTop: $(this.hash).offset().top
               }, 1000);
            });
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- for-bottom-to-top smooth scrolling -->
      <script>
         $(document).ready(function () {
            /*
               var defaults = {
               containerID: 'toTop', // fading element id
               containerHoverID: 'toTopHover', // fading element hover id
               scrollSpeed: 1200,
               easingType: 'linear' 
               };
            */
            $().UItoTop({
               easingType: 'easeOutQuart'
            });
         });
      </script>
      <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
      <!-- //for-bottom-to-top smooth scrolling -->
      <!-- bootstrap-->
      <script src="js/bootstrap.js"></script>
      <!--// bootstrap-->
   </body>
</html>