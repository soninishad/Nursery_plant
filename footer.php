 <!-- Footer_Section -->
 <footer id="footer">
     <div id="footer-widgets" class="container style-1">
         <div class="row">
             <div class="col-lg-4">
                 <div class="widget widget_text">
                     <h2 class="widget-title"><span>ABOUT US</span></h2>
                     <div class="textwidget">
                         <!-- <a href="index.html" class="footer-logo"> <img src="assets/images/logo.png" alt=""> </a> -->
                         <?php
                        $query="select * from footer";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                         <p class="justifier">
                             <?php echo $row['about']; ?>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="widget widget_links">
                     <h2 class="widget-title"><span>Navigation Links</span></h2>
                     <ul class="wprt-links clearfix col2">
                         <li>
                             <a href="index">Home</a>
                         </li>
                         <li>
                             <a href="about">About</a>
                         </li>
                         <li>
                             <a href="services">Services</a>
                         </li>
                         <li>
                             <a href="project">Project</a>
                         </li>
                         <li>
                             <a href="team">Team</a>
                         </li>
                         <li>
                             <a href="contact">Contact</a>
                         </li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="widget widget_information">
                     <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                     <?php
                        $query="select * from header";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                     <ul>
                            <li class="address clearfix">
                                <span class="icon ion-ios-location"></span>
                                <span style="padding-bottom:3px;margin-left:10px"><?php echo $row['address']; ?></span>
                            </li>
                            <li class="phone clearfix">
                                <span class="icon ion-android-call"></span>
                                <span style="padding-bottom:3px;margin-left:10px"><?php echo $row['contactno']; ?>,  <?php echo $row['contactinfo']; ?></span>
                            </li>
                      
                            <li class="email clearfix">
                                <span class="icon ion-ios-email"></span>
                                <span style="margin-left:10px"><?php echo $row['email']; ?></span>
                            </li>
                        </ul>
                 </div>

                 <!-- footer icons -->
                 <div class="widget widget_socials">
                     <?php
                        $i=1;
                        $query="select * from social_media";
                        $result=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_assoc($result))
                        {
                        ?>
                     <div class="socials" style="display:inline">
                         <a target="_blank" href="<?php echo $row['url'];?>"><i
                                 class="<?php echo $row['icons'];?>"></i></a>
                     </div>
                     <?php
                        $i++;
                        }
                        ?>
                 </div>
                 <!-- footer icons delete -->

             </div>
         </div>
     </div>
     <div id="bottom" class="clearfix style-1">
         <div id="bottom-bar-inner" class="wprt-container">
             <div class="bottom-bar-inner-wrap">
                 <div class="bottom-bar-content">
                     <div id="copyright">
                         Copyright &copy; 2014-<script>
                         document.write(new Date().getFullYear())
                         </script>
                         <a><b>New Maurya Nursery</b></a>.
                         All Rights Reserved.
                     </div>
                     <!-- /#copyright -->
                 </div>

                       <!--  Powered by -->
                       <div class="bottom-bar-menu">
                        Manage by :
                        <a href="#" target="_blank"><span style="color:white;">Soni Nishad</span></a>
                    </div>
                    <!-- Powered by --->

             </div>
         </div>
     </div>
 </footer>
 <!-- Footer_Section_End -->

 <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
		<!-- fancybox Js -->
		<script src="assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
        <!--  -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/tether.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.js"></script>

    <!-- revolution Js -->
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.revolution.js"></script>
    	<!-- Mail Function Js -->
		<script src="assets/js/validation.js" type="text/javascript"></script>
    <!-- masonry,isotope Effect Js -->
    <script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.appear.js" type="text/javascript"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="assets/js/jquery.appear.js" type="text/javascript"></script>
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>

 </body>

 </html>