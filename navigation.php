<?php
               include ('connection.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
                $query="select * from logo";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
    <link rel="icon" href="upload/<?php echo $row['image'];?>" type="image/x-icon">

    <title>New Maurya Nursery, Mujasa, Malihabad, Lucknow - 226102</title>
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/flaticon.css" rel="stylesheet" type="text/css">
    <link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">

    <link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">

    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="assets/css/header.css" type="text/css" rel="stylesheet">
    <link href="assets/css/footer.css" type="text/css" rel="stylesheet">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">


    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/index1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/header1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/footer1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/flaticon.css" rel="stylesheet" type="text/css">
    <link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">

    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/index.css" type="text/css" rel="stylesheet">
    <link href="assets/css/header.css" type="text/css" rel="stylesheet">
    <link href="assets/css/footer.css" type="text/css" rel="stylesheet">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
    <link href="assets/css/index1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/header1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/footer1.css" type="text/css" rel="stylesheet">
    <link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />
    <!-- Global site tag (gtag.js) - Google Analytics -->

  <style>
    .justifier{
        text-align:justify;
    }
  </style>



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
                                <span> <a href="#">Call Us- <?php echo $row['contactno']?> , <?php echo $row['contactinfo']?></a></span>
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

    <!--  Breadcrun -->