<?php
include "../../connection.php";   
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrator of New Maurya Nursery, Mujasa, Malihabad, Lucknow - 226102</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../dist/css/adminx.css" media="screen" />
</head>

<body>
    <div class="adminx-container">
        <nav class="navbar navbar-expand justify-content-between fixed-top">
            <a class="navbar-brand mb-0 h1 d-none d-md-block" href="../admin">
                <?php
                $query="select * from logo";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
                <img src="../../upload/<?php echo $row['image']?>"
                    class="navbar-brand-image d-inline-block align-top mr-2" alt="">
                Administrator
            </a>

            <div class="d-flex flex-1 d-block d-md-none">
                <a href="#" class="sidebar-toggle ml-3">
                    <i data-feather="menu"></i>
                </a>
            </div>

            
            <!-- profile start-->
            <ul class="navbar-nav d-flex justify-content-end mr-2">
                <li class="nav-item dropdown">
                       <?php
                        $query="select * from logo";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                    <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                        <img src="../../upload/<?php echo $row['image']?>" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="profile">My Profile</a>
                        <a class="dropdown-item" href="change_password">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="../logout">Logout</a>
                    </div>
                </li>
            </ul>
            <!-- profile end -->
        </nav>



        <!-- expand-hover push -->
        <!-- Sidebar -->
        <div class="adminx-sidebar expand-hover push">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href="../admin" class="sidebar-nav-link active">
                        <span class="sidebar-nav-icon">
                            <i data-feather="folder"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Dashboard
                        </span>
                        <span class="sidebar-nav-end">
                        </span>
                    </a>
                </li>


                <!-- home -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#home" aria-expanded="false"
                        aria-controls="home">
                        <span class="sidebar-nav-icon">
                            <i data-feather="home"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Home
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <!-- welcome -->
                    <ul class="sidebar-sub-nav collapse" id="home">
                        <li class="sidebar-nav-item">
                            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#welcome"
                                aria-expanded="false" aria-controls="welcome">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="aperture"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Welcome
                                </span>
                                <span class="sidebar-nav-end">
                                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                                </span>
                            </a>
                        </li>

                        <ul class="sidebar-sub-nav collapse" id="welcome">
                            <li class="sidebar-nav-item">
                                <a href="welcome_show" class="sidebar-nav-link" id="welcome">
                                    <span class="sidebar-nav-icon">
                                        <i data-feather="chevron-right"></i>
                                    </span>
                                    <span class="sidebar-nav-name">
                                        Show Welcome
                                    </span>
                                </a>
                            </li>



                            <!--  Welcome content start-->
                            <li class="sidebar-nav-item">
                                <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#content"
                                    aria-expanded="false" aria-controls="content">
                                    <span class="sidebar-nav-icon">
                                        <i data-feather="aperture"></i>
                                    </span>
                                    <span class="sidebar-nav-name">
                                        Blocks
                                    </span>
                                    <span class="sidebar-nav-end">
                                        <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                                    </span>
                                </a>
                            </li>

                            <ul class="sidebar-sub-nav collapse" id="content">
                                <li class="sidebar-nav-item">
                                    <a href="welcome_content_show" class="sidebar-nav-link" id="content">
                                        <span class="sidebar-nav-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                        <span class="sidebar-nav-name">
                                            Show Content
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Welcome content  end-->
                        </ul>
                        <!-- welcome end -->



                        <!-- slider start -->
                        <li class="sidebar-nav-item">
                            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#slider"
                                aria-expanded="false" aria-controls="slider">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="aperture"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Slider
                                </span>
                                <span class="sidebar-nav-end">
                                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                                </span>
                            </a>
                        </li>

                        <ul class="sidebar-sub-nav collapse" id="slider">
                            <li class="sidebar-nav-item">
                                <a href="show_slider" class="sidebar-nav-link" id="slider">
                                    <span class="sidebar-nav-icon">
                                        <i data-feather="chevron-right"></i>
                                    </span>
                                    <span class="sidebar-nav-name">
                                        Show Slider
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- slider  end-->



                        <!-- background2  start-->
                        <li class="sidebar-nav-item">
                            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#backgourndother"
                                aria-expanded="false" aria-controls="backgourndother">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="aperture"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Backgound
                                </span>
                                <span class="sidebar-nav-end">
                                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                                </span>
                            </a>
                        </li>

                        <ul class="sidebar-sub-nav collapse" id="backgourndother">
                            <!-- <li class="sidebar-nav-item">
                                <a href="other_bg_add.php" class="sidebar-nav-link">
                                    <span class="sidebar-nav-icon">
                                        <i data-feather="chevron-right"></i>
                                    </span>
                                    <span class="sidebar-nav-name">
                                        Add Backgound
                                    </span>
                                </a>
                            </li> -->
                            <li class="sidebar-nav-item">
                                <a href="other_bg_show" class="sidebar-nav-link" id="backgourndother">
                                    <span class="sidebar-nav-icon">
                                        <i data-feather="chevron-right"></i>
                                    </span>
                                    <span class="sidebar-nav-name">
                                        Show Backgound
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- backgound end -->
                    </ul>
                </li>
                <!-- Home end -->


                <!-- About start -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#about" aria-expanded="false"
                        aria-controls="about">
                        <span class="sidebar-nav-icon">
                            <i data-feather="toggle-right"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            About
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="about">
                        <li class="sidebar-nav-item">
                            <a href="show_about" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show About
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="about_thought_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    About Thought
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- About end -->



                <!-- Services Start -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#services" aria-expanded="false"
                        aria-controls="about">
                        <span class="sidebar-nav-icon">
                            <i data-feather="pie-chart"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Services
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="services">
                        <li class="sidebar-nav-item">
                            <a href="show_services" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Services
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Services End -->






                <!-- Choose Start -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#choose" aria-expanded="false"
                        aria-controls="choose">
                        <span class="sidebar-nav-icon">
                            <i data-feather="star"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Why Choose
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="choose">
                        <li class="sidebar-nav-item">
                            <a href="choose_bg_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Choose Background
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="choose_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Choose
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Choose End -->


                <!-- Project start -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#project" aria-expanded="false"
                        aria-controls="project">
                        <span class="sidebar-nav-icon">
                            <i data-feather="file"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Project
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="project">
                        <li class="sidebar-nav-item">
                            <a href="show_project" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Project
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Project End -->


                <!-- Team start -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#team" aria-expanded="false"
                        aria-controls="team">
                        <span class="sidebar-nav-icon">
                            <i data-feather="layers"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Team
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="team">
                        <li class="sidebar-nav-item">
                            <a href="show_team" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Team
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- team end -->


                <!-- Teastimonial start -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#testimonial"
                        aria-expanded="false" aria-controls="testimonial">
                        <span class="sidebar-nav-icon">
                            <i data-feather="target"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Testimonial
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="testimonial">
                        <li class="sidebar-nav-item">
                            <a href="testimonial_bg_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Background Testimonial
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="testimonial_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Testimonial
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- Testimonial end -->



                <!-- media  start-->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#media" aria-expanded="false"
                        aria-controls="media">
                        <span class="sidebar-nav-icon">
                            <i data-feather="image"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Media
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="media">
                        <li class="sidebar-nav-item">
                            <a href="media_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Media
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- media end -->



                <!--Client start  -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#client" aria-expanded="false"
                        aria-controls="client">
                        <span class="sidebar-nav-icon">
                            <i data-feather="users"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Client
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="client">
                        <li class="sidebar-nav-item">
                            <a href="show_clients" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Client
                                </span>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- client end -->


                <!-- Setting -->
                <li class="sidebar-nav-item">
                    <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#setting" aria-expanded="false"
                        aria-controls="setting">
                        <span class="sidebar-nav-icon">
                            <i data-feather="settings"></i>
                        </span>
                        <span class="sidebar-nav-name">
                            Setting
                        </span>
                        <span class="sidebar-nav-end">
                            <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                        </span>
                    </a>

                    <ul class="sidebar-sub-nav collapse" id="setting">
                        <li class="sidebar-nav-item">
                            <a href="front_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Front-Header
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="logo_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Company logo
                                </span>
                            </a>
                        </li>


                        <li class="sidebar-nav-item">
                            <a href="social_media_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Social Media
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="map_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Map
                                </span>
                            </a>
                        </li>


                        <li class="sidebar-nav-item">
                            <a href="footer_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Footer
                                </span>
                            </a>
                        </li>


                        <li class="sidebar-nav-item">
                            <a href="loginbackground_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Login_Background Cover
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
            </li>
            </ul>
        </div>
        <!-- Sidebar End -->