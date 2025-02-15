<?php 
include('config.php');
include("includes/header.php");

?>
      <!-- Sign in Start -->
      <section class="sign-in-page">
         <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-6 col-sm-12 col-12 align-self-center">
                  <div class="sign-user_card ">
                     <div class="d-flex justify-content-center">

                     </div>
                     <div class="sign-in-page-data">
                        <div class="sign-in-from w-100 pt-5 m-auto">
                           <h1 class="mb-3 text-center">Admin Login</h1>
                           <form class="mt-4" action="insert-admin-login.php" method="POST">
                              <div class="form-group">
                                 <label for="exampleInputEmail2">Email address</label>
                                 <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" required>
                              </div>
                              <div class="form-group">
                                 <label for="exampleInputPassword2">Password</label>
                                 <input type="password" name="pass" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" required>
                              </div>
                              <!-- <div class="d-inline-block w-100">
                                 <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                 </div>
                              </div> -->
                              <div class="sign-info mt-4">
                                 <input type="submit" name="login" class="btn btn-primary mb-2" value="Sign in">
                                 <span class="dark-color d-block line-height-2">Don't have an account? <a href="sign-up.php">Sign up</a></span>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="mt-2">
                        <!-- <div class="d-flex justify-content-center links">
                           Don't have an account? <a href="sign-up.php" class="ml-2">Sign Up</a>
                        </div> -->
                        <div class="d-flex justify-content-center links">
                           <a href="pages-recoverpw.php">Forgot your password?</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Sign in END -->
            
         </div>
      </section>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="js/apexcharts.js"></script>
     
      <!-- Slick JavaScript --> 
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- Style Customizer -->
      <script src="js/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>
</html>