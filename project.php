<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
                    include ('connection.php');
                $query="select * from logo";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
    <link rel="icon" href="upload/<?php echo $row['image'];?>" type="image/x-icon">

    <title>New Maurya Nursery, Mujasa, Malihabad, Lucknow - 226102</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/flaticon.css" rel="stylesheet" type="text/css">
    <link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">


    <link href="assets/css/jquery-ui.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">

    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="assets/css/header.css" type="text/css" rel="stylesheet">
    <link href="assets/css/footer.css" type="text/css" rel="stylesheet">

    <link href="assets/css/index1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/header1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/footer1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119595512-1');
    </script>

</head>

<body>
    <!--loader-->

    <!--loader-->



    <!-- header Start -->
    <header id="header" class="header">

        <div class="nav-wrap">
            <div class="container">
                <div class="top_info ptb-15">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-3">
                            <div class="logo">
                                <?php
                $query="select * from logo";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
                                <img src="upload/<?php echo $row['image']; ?>" alt="Logo" height="80px" width="80px">
                            </div>
                            <!-- Phone Menu button -->
                            <button id="menu" class="menu hidden-md-up"></button>
                        </div>
                        <div class="col-md-5 d-flex aling-items-center">
                            <div class="call_now">
                                <?php
                $query="select * from header";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
                                <i class="ion-ios-telephone-outline"></i>
                                <span> <a href="#">Call Us- <?php echo $row['contactno']?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12 nav-bg">
                        <div class="nav_bg_color">
                            <nav class="navigation">
                                <ul class="mobile-menu d-md-flex justify-content-around">
                                    <li>
                                        <a href="index">Home</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                    </li>
                                    <li>
                                        <a href="about">About</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                    </li>
                                    <li>
                                        <a href="services">Services</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                    </li>
                                    <li>
                                        <a href="project">Project</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                    </li>
                                    <li>
                                        <a href="team">Team</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                    </li>
                                    <li>
                                        <a href="media">Media</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                    </li>
                                    <li>
                                        <a href="contact">Contact</a><i class="ion-ios-plus-empty hidden-md-up"></i>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->

    <body>
        <!-- END HEADER -->

        <!-- Intro Section -->
        <div class="box  ">
            <?php
                $query="select * from background";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
            <!-- <img src="upload/1.jpg" alt="" height="400px" width="100%"> -->
            <img src="upload/<?php echo $row['image']; ?>" alt="" height="400px" width="100%">
            <div class="div title_row light-color" style="margin-top:-220px;">
                <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);">
                    <span>Project</span>
                    <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                        <a>Home </a>/ <span style="color:white;">Project</span>
                    </div>
                </h1>
            </div>
        </div>
        <!-- End Intro Section -->




        <!-- End Work Section -->
        <section id="work" class="padding ptb-xs-40">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6 offset-lg-3 mb-30">
                        <div class="heading-box">
                            <h2><span>Our </span> Project</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has
                                been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </div>
                </div>

                <div class="row container-grid nf-col-3">
                    <?php 
			    // include("connection.php");
                $a=1;
                $query="select * from project";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                    <div class="nf-item branding coffee spacing">
                        <div class="item-box">
                            <a> <img src="upload/<?php echo $row['image'];?>" class="item-container"
                                    style="height: 300px;"> </a>
                            <div class="link-zoom">
                                <a href="project-details.php?id=<?php echo $row["id"]; ?>" class="project_links"> <i
                                        class="fa fa-link"> </i> </a>
                                <a href="upload/<?php echo $row['image'];?>" class="fancylight"
                                    data-fancybox-group="light" width="200px"> <i class="fa fa-search-plus"></i> </a>
                            </div>
                            <div class="gallery-heading">
                                <h4><a href="#"><?php echo $row['heading'];?></a></h4>
                                <p class="justifier"><?php echo $row['title'];?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                     $a++;
                }
                 ?>
                </div>
            </div>
        </section>
        <!-- End Work Section -->









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
                                    <span
                                        style="padding-bottom:3px;margin-left:10px"><?php echo $row['address']; ?></span>
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