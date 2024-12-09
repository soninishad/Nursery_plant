<?php
include "../connection.php";   
session_start();
    if(isset($_SESSION["login"]) && $_SESSION["login"]!='')
    {

    }

    // if (isset($_SESSION["login"])=='null' && $_SESSION["login"]=='')
    // {
    //     header("location:index");
    // }

    else
    {
        header("location:index");
        die();
    }  
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrator of New Maurya Nursery, Mujasa, Malihabad, Lucknow - 226102</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./dist/css/adminx.css" media="screen" />

</head>

<body>
    <div class="adminx-container">
        <nav class="navbar navbar-expand justify-content-between fixed-top">
            <a class="navbar-brand mb-0 h1 d-none d-md-block" href="admin">

                <?php
                $query="select * from logo";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
                <img src=" ../upload/<?php echo $row['image']?>"
                    class="navbar-brand-image d-inline-block align-top mr-2" alt="">
                Administrator
            </a>

            <div class="d-flex flex-1 d-block d-md-none">
                <a href="#" class="sidebar-toggle ml-3">
                    <i data-feather="menu"></i>
                </a>
            </div>

            <ul class="navbar-nav d-flex justify-content-end mr-2">
                <li class="nav-item dropdown">
                    <?php
                $query="select * from logo";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
                    <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                        <img src="../upload/<?php echo $row['image']?>" class="d-inline-block align-top" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./default/profile">My Profile</a>
                        <a class="dropdown-item" href="./default/change_password">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>


        <!-- expand-hover push -->
        <!-- Sidebar -->
        <div class="adminx-sidebar expand-hover push">
            <ul class="sidebar-nav">
                <li class="sidebar-nav-item">
                    <a href="admin" class="sidebar-nav-link active">
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
                                <a href="./default/welcome_show" class="sidebar-nav-link" id="welcome">
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
                                    <a href="./default/welcome_content_show" class="sidebar-nav-link" id="content">
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
                                <a href="./default/show_slider" class="sidebar-nav-link" id="slider">
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
                                    Background
                                </span>
                                <span class="sidebar-nav-end">
                                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                                </span>
                            </a>
                        </li>

                        <ul class="sidebar-sub-nav collapse" id="backgourndother">
                            <!-- <li class="sidebar-nav-item">
                                <a href="other_bg_add" class="sidebar-nav-link">
                                    <span class="sidebar-nav-icon">
                                        <i data-feather="chevron-right"></i>
                                    </span>
                                    <span class="sidebar-nav-name">
                                        Add Backgound
                                    </span>
                                </a>
                            </li> -->
                            <li class="sidebar-nav-item">
                                <a href="./default/other_bg_show" class="sidebar-nav-link" id="backgourndother">
                                    <span class="sidebar-nav-icon">
                                        <i data-feather="chevron-right"></i>
                                    </span>
                                    <span class="sidebar-nav-name">
                                        Show Background
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
                            <a href="./default/show_about" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show About
                                </span>
                            </a>
                        </li>


                        <li class="sidebar-nav-item">
                            <a href="./default/about_thought_show" class="sidebar-nav-link">
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
                        <!-- <li class="sidebar-nav-item">
                            <a href="./default/add_services" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Add Services
                                </span>
                            </a>
                        </li> -->

                        <li class="sidebar-nav-item">
                            <a href="./default/show_services" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Show Services
                                </span>
                            </a>
                        </li>


                        <!-- Service Description -->
                        <!-- <li class="sidebar-nav-item">
                            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#servicedes"
                                aria-expanded="false" aria-controls="servicedes">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="toggle-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Service Description
                                </span>
                                <span class="sidebar-nav-end">
                                    <i data-feather="chevron-right" class="nav-collapse-icon"></i>
                                </span>
                            </a>

                            <ul class="sidebar-sub-nav collapse" id="servicedes">
                                <li class="sidebar-nav-item">
                                    <a href="./default/servicedes_add" class="sidebar-nav-link">
                                        <span class="sidebar-nav-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                        <span class="sidebar-nav-name">
                                            Add Service Description
                                        </span>
                                    </a>
                                </li>


                                <li class="sidebar-nav-item">
                                    <a href="./default/servicedes_show" class="sidebar-nav-link">
                                        <span class="sidebar-nav-icon">
                                            <i data-feather="chevron-right"></i>
                                        </span>
                                        <span class="sidebar-nav-name">
                                            Show Service Description
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- Service description end -->
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
                            <a href="./default/choose_bg_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Choose Background
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="./default/choose_show" class="sidebar-nav-link">
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
                        <!-- <li class="sidebar-nav-item">
                            <a href="./default/add_project" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Add Project
                                </span>
                            </a>
                        </li> -->


                        <li class="sidebar-nav-item">
                            <a href="./default/show_project" class="sidebar-nav-link">
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
                        <!-- <li class="sidebar-nav-item">
                            <a href="./default/add_team" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Add Team
                                </span>
                            </a>
                        </li> -->


                        <li class="sidebar-nav-item">
                            <a href="./default/show_team" class="sidebar-nav-link">
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
                            <a href="./default/testimonial_bg_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Background Testimonial
                                </span>
                            </a>
                        </li>


                        <li class="sidebar-nav-item">
                            <a href="./default/testimonial_show" class="sidebar-nav-link">
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
                            <a href="./default/media_show" class="sidebar-nav-link">
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
                        <!-- <li class="sidebar-nav-item">
                            <a href="./default/add_clients" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Add Client
                                </span>
                            </a>
                        </li> -->

                        <li class="sidebar-nav-item">
                            <a href="./default/show_clients" class="sidebar-nav-link">
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
                            <a href="./default/front_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Front-Header
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="./default/logo_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Company logo
                                </span>
                            </a>
                        </li>


                        <li class="sidebar-nav-item">
                            <a href="./default/social_media_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Social Media
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="./default/map_show" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Map
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="./default/footer" class="sidebar-nav-link">
                                <span class="sidebar-nav-icon">
                                    <i data-feather="chevron-right"></i>
                                </span>
                                <span class="sidebar-nav-name">
                                    Footer
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-nav-item">
                            <a href="./default/loginbackground_show" class="sidebar-nav-link">
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
        </div><!-- Sidebar End -->

        <!-- adminx-content-aside -->
        <div class="adminx-content">
            <!-- <div class="adminx-aside">

        </div> -->

            <div class="adminx-main-content">
                <div class="container-fluid">
                    <!-- BreadCrumb -->
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb adminx-page-breadcrumb">
                            <li class="breadcrumb-item"><a href="admin">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="admin.php">Dashboard</li>
                        </ol>
                    </nav>

                    <div class="pb-3">
                        <h1>Welcome to Dashboard</h1>
                    </div>




                    <div class="row">

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="home"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/welcome_show"><b
                                                    style="color:white;font-size:22px;">Home</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="toggle-right"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/show_about"><b
                                                    style="color:white;font-size:22px;">About</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="aperture"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/show_slider"><b
                                                    style="color:white;font-size:22px;">Slider</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="pie-chart"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/show_services"><b
                                                    style="color:white;font-size:22px;">Services</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="star"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/choose_show"><b style="color:white;font-size:22px;">Why
                                                    Choose</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="file"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/show_project"><b
                                                    style="color:white;font-size:22px;">Project</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="layers"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/show_team"><b
                                                    style="color:white;font-size:22px;">Team</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="target"></i>
                                    </div>
                                    <div class="card-body">
                                        <!-- <div class="card-info-title">Home</div> -->
                                        <h3 class="card-title mb-0">
                                            <a href="./default/testimonial_show"><b
                                                    style="color:white;font-size:22px;">Testimonial</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">


                    <div class="col-md-8 col-lg-4 d-flex">
                            <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="users"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/media_show"><b
                                                    style="color:white;font-size:22px;">Media</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-8 col-lg-4 d-flex">
                            <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="users"></i>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">
                                            <a href="./default/show_clients"><b
                                                    style="color:white;font-size:22px;">Client</b></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-8 col-lg-4 d-flex">
                            <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="settings"></i>
                                    </div>
                                    <div class="card-body">
                                        <h2 class="card-title mb-0">
                                            <a href="./default/front_show"><b
                                                    style="color:white; font-size:22px;">Setting</b></a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- map -->
                    <div class="row mt-5">
                        <h1 class="pb-3">Google Map</h1>
                        <?php
                        $query="select * from map";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                        <div class="col-md-12 col-lg-12 d-flex mt-2">
                            <?php echo $row['map']; ?>
                            <!-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.81124758916!2d80.9958955150435!3d26.84595518315644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be371dfa4585d%3A0xe643138598743932!2sANCH%20TECHNOLOGIES!5e0!3m2!1sen!2sin!4v1683096299172!5m2!1sen!2sin"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        </div>
                    </div>
                    <!--  map end-->
                </div>

                <!-- footer -->
                <div class="row mt-5">
                    <div class="col-sm-12 bg-secondary text-center py-2 w-100">
                        <p class="text-dark ">
                            Copyright &copy; 2014-<script>
                            document.write(new Date().getFullYear())
                            </script> www.New Maurya Nursery.com. All rights reserved!
                        </p>
                    </div>
                </div>
                <!-- footer -->

            </div>
        </div>
    </div>

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.js"></script>


</body>

</html>