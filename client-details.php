<?php
include("navigation.php");
?>

<!-- CONTENT -->

<!-- Intro Section -->
<div class="box">
    <?php
                $query="select * from background";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
    <img src="upload/<?php echo $row['image']; ?>" alt="" height="400px" width="100%">
    <div class="div title_row light-color" style="margin-top:-220px;">
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>Client
                Details</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">Client Details</span>
            </div>
        </h1>
    </div>
</div>
<!-- End Intro Section -->


<!-- End Intro Section -->
<div id="project-detail-section" class="padding pb-60 pt-xs-60">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <div class="heading-box pb-30 ">
                    <h2><span>Our</span> Clients</h2>
                    <span class="b-line l-left"></span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="client-details " style="margin-bottom:-20px">
                    <?php 
                $a=1;
                 if(isset($_GET['id']))
                {
                    $query="select * from clients where id={$_GET['id']}";
                    $result=mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result);
                ?>
                    <figure>
                        <img src="upload/<?php echo $row['image']; ?>" alt="" width="1050px" height="500px">
                    </figure>
                    <div class="project-info col-sm-12 col-lg-4">
                        <h3>Client Description</h3>
                        <ul>
                            <li>
                                <strong>Client:</strong><?php echo $row['client_name'];?>
                            </li>
                            <li>
                                <strong>Location:</strong><?php echo $row['address'];?>
                            </li>
                            <li>
                                <strong>Surface Area:</strong> <?php echo $row['area'];?>
                            </li>
                            <li>
                                <strong>Year Completed:</strong><?php echo $row['date'];?>
                            </li>
                            <li>
                                <strong>Estimated Value:</strong><?php echo $row['amount'];?>
                            </li>
                            <li>
                                <strong>Gardner:</strong><?php echo $row['gardner'];?>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="col-sm-12 col-lg-7  mb-5" style="margin-top:100px">
                <div class="box-title mb-20">
                    <h3><?php echo $row['client_name'];?></h3>
                </div>
                <div class="text-content">
                    <p class="justifier">
                        <?php echo $row['description'];?>
                    </p>
                    <!-- <p>
                        Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget
                        mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum
                        phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act fermentum phasellus vulputate
                        turpis tincidunt.
                    </p> -->
                </div>
            </div>

            <!-- <div class="col-sm-12 col-lg-7 mt-40 mt-xs-15">
                <div class="row">
                    <div class="col-sm-6 mb-xs-30">
                        <div class="box-title mb-20">
                            <h4>Aenean suscipit eget mi act</h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean
                                suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act
                                fermentum phasellus.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box-title mb-20">
                            <h4>Aenean suscipit eget mi act</h4>
                        </div>
                        <div class="text-content">
                            <p>
                                Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean
                                suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit
                                eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget mi act
                                fermentum phasellus.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</div>





<!-- footer -->
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
                            <?php echo $row['about'] ?>
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
                            <span style="padding-bottom:3px;margin-left:10px"><?php echo $row['contactno']; ?>,
                                <?php echo $row['contactinfo']; ?></span>
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
<!-- END FOOTER -->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/tether.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>

<!-- fancybox Js -->
<script src="assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
<script src="assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>

<!-- masonry,isotope Effect Js -->

<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>

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

<!-- Compiled and minified JavaScript -->
<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>

</body>

</html>