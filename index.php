<?php
include ("connection.php");
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
    <!-- <link rel="shortcut icon" type="image/x-icon" href="upload/<?php echo $row['image'];?>" > -->

    <title>New Maurya Nursery, Mujasa, Malihabad, Lucknow - 226102</title>
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119595512-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        
        gtag('config', 'UA-119595512-1');
        </script>

<!-- Justify content -->
        <style>
        .justifier {
            text-align: justify;
        }
        </style>
<!-- ustify content end -->

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
                                <span> <a href="#">Call Us- <?php echo $row['contactno']?> ,
                                        <?php echo $row['contactinfo']?></a></span>
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

                                    <li>
                                        <a href="admin/index">Admin</a><i class="ion-ios-plus-empty hidden-md-up"></i>
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



    <!--  Main Banner Start Here-->
    <div class="main-banner">
        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <?php
                    $a=1;
                    $query="select * from slider";
                    $res=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_assoc($res))
                    {
                 ?>
                    <li data-index="rs-<?php echo $row['id'];?>">
                        <!-- MAIN IMAGE -->
                        <img src="upload/<?php echo $row['image'];?>" alt="" class="rev-slidebg">
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Newspaper-Title tp-resizeme"
                            id="slide-<?php echo $row['id'];?>-layer-<?php echo $row['id'];?>"
                            data-x="['right','right','right','right']" data-hoffset="['100','50','50','30']"
                            data-y="['top','top','top','center']" data-voffset="['165','135','105','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['700','700','700','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                            <div class="banner-text">
                                <span><?php echo $row['heading']; ?></span>
                                <h2><?php echo $row['sub_heading']; ?></h2>
                                <p>
                                    <?php echo $row['paragraph'];?>
                                </p>
                                <a class="btn-text" href="services"> read more</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                    <?php
            $a++;
                }
                ?>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!--  Main Banner End Here-->




    <!-- Welcome_Section -->
    <section class="padding ptb-xs-40">
        <!-- HEADER START -->
        <?php
                $query="select * from home_content";
                $res=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($res);
         ?>
        <div class="container">
            <div class="row pb-50 pb-xs-30">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <h2><?php echo $row['heading'] ?></h2>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-8">
                    <div class="about_company ">
                        <p class="justifier"><?php echo $row['paragraph']; ?></p>
                        <div class="row">
                            <?php
                              $a=1;
                            $query="select * from welcome_content";
                            $res=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_assoc($res))
                            {
                            ?>
                            <div class="col-md-6 mt-30">
                                <div class="clean_top feature-box">
                                    <div class="content">
                                        <div class="icon_left_home">
                                            <img src="upload/<?php echo $row['image'] ?>" alt=""
                                                style="border-radius:50%;width:100px;">
                                        </div>
                                        <div class="right_detail">
                                            <h3><?php  echo $row['heading'] ?></h3>
                                            <p>
                                                <?php  echo $row['title'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $a++;
                            }
                            ?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mt-sm-30 mt-xs-30">
                    <div class="appointment position_none form_rap servi-test first-tab">
                        <h3>Request An Estimate</h3>
                        <div id="success" class="appointment_succses">
                            <div role="alert" class="alert alert-success">
                                <strong>Thanks</strong> Your message has been sent.
                            </div>
                        </div>

                        <div class="form_filed">
                            <form method="post" onsubmit="return validation()">
                                <div class="form-field-wrapper">
                                    <input type="text" placeholder="Enter Name" id="name" name="name" required
                                        class="input-sm form-full">
                                </div>

                                <div class="form-field-wrapper">
                                    <input type="number" placeholder="Enter Mobile" id="phone" name="phone" required
                                        class="input-sm form-full">
                                </div>

                                <div class="form-field-wrapper">
                                    <input type="email" placeholder="Enter Email" id="email" name="email" required
                                        class="input-sm form-full">
                                </div>
                                <div class="form-field-wrapper">
                                    <textarea class="form-full input-sm" id="query" rows="7" name="query" required
                                        placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-field-wrapper mb-0">
                                    <button name="send" id="submit" type="submit"
                                        class="btn btn_style input-sm form-full">
                                        Submit
                                    </button>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['send'])) {
                                $name = htmlentities($_POST['name']);
                                $phone = htmlentities($_POST['phone']);
                                $email = htmlentities($_POST['email']);
                                $query = htmlentities($_POST['query']);
                                $subject = "New Leads created through web portal as New Maurya Nursery";
                                $from1 = 'info@anchtechnology.com';
                                $to_mail = 'anchtechnology@gmail.com'; 
                                
                                $pattern = " /[6-9]\d{9}$/";
                                $length = strlen($phone);
                                $mlength = strlen($subject);
                                $correct_way = " /^[A-Z a-z]+$/";
                                $error = "";
                                if (!preg_match($correct_way, $name))
                                $error = "Name is Not valid";
                            else if (!preg_match($pattern, $phone) || $length != 10) {
                                $error = "Mobile Number is not valid";
                                } else if ($mlength > 255) {
                                $error = "message to Long";
                                } 

                                // email validation
                                else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                $error = "Email is not valid";
                                } else {
                                $headers  = 'MIME-Version: 1.0' . "\r\n";
                                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


                                $headers .= 'From: ' . $from1 . "\r\n" .
                                    'Reply-To: ' . $from1 . "\r\n" .
                                    'X-Mailer: PHP/' . phpversion();

                                $email_message = '<html><body><table border="1" solid blue cellpadding = "5" cellspacing = "0" ><tr><td colspan=2" align="center" style="color:#f40;"><h3>New Enquiry</h3></caption>';
                                $email_message .= '<tr><td>Name:</td><td>' . $name . '</td></tr>';
                                $email_message .= '<tr><td>Mobile No:</td><td>' . $phone . '</td></tr>';
                                $email_message .= '<tr><td>Email-Id:</td><td>' . $email . '</td></tr>';
                                $email_message .= '<tr><td>Query:</td><td>' . $query . '</td></tr>';
                                $email_message .= '</table></body></html>';

                                $success = mail($to_mail, $subject, $email_message, $headers);

                                if ($success) {
                                    echo "<center><h3>Thankyou for your enquiry with us ! we will get back to you as soon as possible ....<h3></center>";
                                    header('refresh:2;url=index.php');
                                } else
                                    echo "something went wrong";
                                }
                                echo "<center><h3>$error</h3></center>";
                            }
                         ?>

                            <script>
                            function validation() {
                                var correct_way = /^[A-Z a-z]+$/;
                                var a = document.getElementById('name').value;
                                if (a.length < 1) {
                                    document.getElementById("validname").innerHTML = '**Please write your name.';
                                    return false;
                                }
                                if (a.match(correct_way))
                                    true;
                                else {
                                    document.getElementById("validname").innerHTML = "** Only alphabet are allowed.";
                                    return false;
                                }


                                /* [Validation for mobile box] */
                                var b = document.getElementById('phone').value;
                                if (b.length < 1) {
                                    document.getElementById("validphone").innerHTML =
                                        '**Please write your mobile number.';
                                    return false;
                                }
                                if (isNaN(b)) {
                                    document.getElementById("validphone").innerHTML = "** Only numbers are allowed.";
                                    return false;
                                }
                                if (b.length < 10) {
                                    document.getElementById("validphone").innerHTML =
                                        "** Mobile number must be 10 digits.";
                                    return false;
                                }
                                if (b.length > 10) {
                                    document.getElementById("validphone").innerHTML =
                                        "** Mobile number must be 10 digits.";
                                    return false;
                                }
                                if ((b.charAt(0) != 9) && (b.charAt(0) != 8) && (b.charAt(0) != 7) && (b.charAt(0) !=
                                        6)) {
                                    document.getElementById("validphone").innerHTML =
                                        "** Mobile number must start with 9,8,7 & 6.";
                                    return false;
                                }

                                /* [Validation for email box] */
                                var email = document.getElementById('email').value;
                                if (email.length < 1) {
                                    document.getElementById("validemail").innerHTML = '**Please write your email id.';
                                    return false;
                                }
                                if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
                                    true;
                                else {
                                    document.getElementById('validemail').innerHTML = '**Email Id not correct.';
                                    return false;
                                }

                                /* [Validation for vehicle model box] */
                                var query = document.getElementById('query').value;
                                if (query.length < 1) {
                                    document.getElementById("validquery").innerHTML = '**Please write your query.';
                                    return false;
                                }
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome_Section_End -->



    <!-- Counter Section -->
    <div class="fact-counter-wrapper padding ptb-xs-40">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-happy" aria-hidden="true"></i>
                        </div>
                        <div class="counter_count">
                            <span class="counter" data-count="3562">0</span>
                            <p>
                                Happy Clients
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-xs-30">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-ios-list" aria-hidden="true"></i>
                        </div>
                        <div class="counter_count">
                            <span class="counter" data-count="1054">0</span>
                            <p>
                                Total Projects
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-person-stalker" aria-hidden="true"></i>
                        </div>
                        <div class="counter_count">
                            <span class="counter" data-count="400">0</span>
                            <p>
                                Active Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-sm-30 mt-xs-30">
                    <div class="single-fact">
                        <div class="icon-boxed">
                            <i class="ion-trophy" aria-hidden="true"></i>
                        </div>
                        <div class="counter_count">
                            <span class="counter" data-count="67">0</span>
                            <p>
                                Won Award
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End-->





    <!-- Service_Section -->
    <!-- <section class="padding ptb-xs-40 service-blog ">
        <div class="container">
            <div class="row pb-50 pb-xs-30">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <h2><span>Our</span> Services</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php 
                $a=1;
                $query="select * from services";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                <div class="col-lg-4 col-md-12 mb-xs-30 mb-sm-30 mt-5">
                    <div class="service-box img-scale">
                        <figure>
                            <img src="upload/<?php echo $row['image']; ?>" alt="" style="height:250px;">
                        </figure>
                        <div class="service-text">
                            <h3><i class="fa fa-user icon__dbox"></i><a
                                    href="services-details.php?id=<?php echo $row["id"]; ?>">
                                    <?php echo $row['title'];  ?></a></h3>
                            <div class="padding-20">
                                <p>
                                    <?php
                                     echo $row['paragraph'];
                                  ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $a++;
                }
                ?>

            </div>

        </div>
    </section> -->
    <!-- Service_Section_End -->


    <!-- Service Section -->
    <div id="services-section" class="padding ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row pb-50 pb-xs-30">
                <div class="col-md-12">
                    <div class="sec-title text-center">
                        <h2><span>Our</span> Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $a=1;
                $query="select * from services";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0)
                 {
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                <div class="col-lg-4 col-md-6 full-wid">
                    <div class="service_box img-scale" style="padding-top:20px;">
                        <figure>
                            <img src="upload/<?php echo $row['image']; ?>" alt="" style="height:250px;" />
                        </figure>
                        <div class="relative_box">
                            <h3><a href="#"><?php echo $row['title']; ?></a></h3>
                            <p  class="justifier">
                                <?php 
							 echo $row['paragraph'];
							?>
                            </p>
                            <a href="services-details.php?id=<?php echo $row["id"]; ?>"
                                class="btn btn-text mt-10 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
                <?php
                $a++;
                }
              }
                else
                {
                    echo "record not found";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Service Section end -->




    <!-- Why_choose -->
    <section class="my-best">
        <div class="col-sm-12 m-0">
            <?php
                // $a=1;
                $query="select * from choose_bg";
                $res=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($res);
         ?>
            <img src="upload/<?php echo $row['image'];?>" alt="" height="500px" width="100%">
        </div>
        <div class="choose_section d-flex justify-content-end " style="margin-top: -550px; ">
            <div class="left-block bg_overlay">
                <div class="block_box light-color">
                    <div class="sec-title heading_block mb-60 text-center light-color">
                        <h2>Why Choose</h2>
                    </div>

                    <ul style="list-style-type:none;">
                        <?php
                $a=1;
                $query="select * from choose";
                $res=mysqli_query($conn,$query);
                while( $row=mysqli_fetch_assoc($res))
                {
                ?>
                        <li>
                            <img src="upload/<?php echo $row['image'];?>" alt=""
                                style="border-radius:50%;height:100px; width:100px"><strong>
                                <?php echo $row['heading'];?>
                            </strong>
                            <p>
                                <?php echo $row['title']; ?>
                            </p>
                        </li>
                        <?php
                        $a++;
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Why_choose_End -->



    <!--Team Section-->
    <section id="team" class="team-section padding ptb-xs-40">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box ">
                        <h2><span>Our</span> Team</h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>


            <div class="row  text-center">
                <?php    
									$a=1;
                                    $query="select * from team";
                                    $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                            ?>
                <div class="col-sm-3 mb-xs-30 mt-5 ">
                    <div class="box-hover img-scale">
                        <figure>
                            <img src="upload/<?php echo $row['image']; ?>" alt="" height="200px" width="auto">
                        </figure>

                        <div class="team-block" style="padding:1px;line-height:1px;">
                            <strong class="mt-3 mb-4"><?php echo $row['name']; ?></strong>
                            <span><?php  echo $row['designation'];?></span>
                            <hr class="small-divider border-white">

                            <!-- icon start -->
                            <?php    
                                            $i=1;
                                            $query="select * from social_media";
                                            $res=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                           ?>
                            <a href="<?php echo $row['url'] ?>"><i class="<?php echo $row['icons'];?>"
                                    aria-hidden="true" style="color:white; margin:5px;"></i></a>

                            <?php
                                        $i++;
                                        }
                                        ?>
                            <!-- icon end -->
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
    <!--Team Section End-->









    <!--Tetstimonial Section-->
    <section class="block__section paddinTetstimonialg ptb-xs-40 padding overlay-bg m-0">
        <div class="box">
            <?php
                $query="select * from testimonial_bg";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
            <img src="upload/<?php echo $row['image']; ?>" alt="" height="700px" width="100%">
            <div class="container">
                <div class="row pb-50 pb-xs-30" style="margin-top:-600px;">
                    <div class="col-md-12">
                        <div class="sec-title text-center">
                            <h2 style="color:white"><span>Our</span> Testimonial</h2>
                        </div>
                    </div>
                </div>
                <!-- </div> -->


                <div id="testimonial" class="nf-carousel-theme nf-carousel-arrow">
                    <?php
           $query="select * from testimonial";
            $result=mysqli_query($conn,$query);
            $a=1;
            while(  $row=mysqli_fetch_assoc($result))
            {
            ?>
                    <!-- <div class="testimonial-box-block" style="height:200px; width:500px;"> -->
                    <div class="testimonial-box-block ps-5">
                        <div class="testimonial-box row">
                            <div class="col-md-5 col-lg-5">
                                <img src="upload/<?php echo $row['image']; ?>" alt=""
                                    style="height:200px; width:500px; border-radius:50%">
                            </div>
                            <div class="col-md-7 col-lg-7">
                                <div class="quote-box">
                                    <div class="quote-icon quote-left">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-text">
                                        <p  class="justifier">
                                            <?php echo $row['title']; ?>
                                        </p>
                                    </div>
                                    <div class="quote-icon quote-right">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                        <strong class="quote-author justifier"><?php echo $row['heading']; ?></strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                $a++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial_End-->




    <!-- Footer_Section -->
    <footer id="footer">
        <div id="footer-widgets" class="container style-1">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget widget_text">
                        <h2 class="widget-title"><span>ABOUT US</span></h2>
                        <div class="textwidget">
                            <?php
                        $query="select * from footer";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                            <!-- <a href="index.html" class="footer-logo"> <img src="assets/images/logo.png" alt=""> </a> -->
                            <p  class="justifier">
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