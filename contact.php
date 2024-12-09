<?php
include ("navigation.php");
?>

<!--Header End Here-->
<!--End mainmenu area-->
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
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>Contact</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">Contact</span>
            </div>
        </h1>
    </div>
</div>
<!-- Intro Section End-->



<!-- CONTENT -->
<!-- Contact Section -->
<section class="padding pt-xs-40">
    <div class="container">

        <div class="row">

            <div class="col-md-8 col-lg-8">

                <div class="headeing pb-30">
                    <h2>Get in Touch</h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <!-- Contact FORM -->
                <form class="contact-form" method="post" action="" onsubmit="return validation();">
                    <!-- IF MAIL SENT SUCCESSFULLY -->
                    <div id="success">
                        <div role="alert" class="alert alert-success">
                            <strong>Thanks</strong>Your message has been sent.
                        </div>
                    </div>
                    <!-- END IF MAIL SENT SUCCESSFULLY -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-field">
                                <input class="input-sm form-full" id="name" type="text" name="name" required
                                    placeholder="Your Name">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="email" type="email" name="email" required
                                    placeholder="Email" style="border-color:#dedede">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="phone" type="number" name="phone" required
                                    placeholder="Enter Phone Number" style="border-color:#dedede">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-field">
                                <textarea class="form-full" id="query" rows="7" name="query" required
                                    placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 mt-30">
                            <input type="submit" name="send" value="Send Message" class="btn btn-success">
                        </div>
                    </div>
                </form>
                <!-- END Contact FORM -->

                <!--  -->
                <?php
          if (isset($_POST['send'])) {
            $name = htmlentities($_POST['name']);
            $email = htmlentities($_POST['email']);
            $phone = htmlentities($_POST['phone']);
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
              // $email_message .= '<tr><td>Image:</td><td><img src="2.jpg" alt="image" width="50" height="50"> </td></tr>';

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

                    /* [Validation for name box] */
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

                    var b = document.getElementById('mobile').value;
                    if (b.length < 1) {
                        document.getElementById("validmobile").innerHTML = '**Please write your mobile number.';
                        return false;
                    }
                    if (isNaN(b)) {
                        document.getElementById("validmobile").innerHTML = "** Only numbers are allowed.";
                        return false;
                    }
                    if (b.length < 10) {
                        document.getElementById("validmobile").innerHTML = "** Mobile number must be 10 digits.";
                        return false;
                    }
                    if (b.length > 10) {
                        document.getElementById("validmobile").innerHTML = "** Mobile number must be 10 digits.";
                        return false;
                    }
                    if ((b.charAt(0) != 9) && (b.charAt(0) != 8) && (b.charAt(0) != 7) && (b.charAt(0) != 6)) {
                        document.getElementById("validmobile").innerHTML =
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
                <!--  -->
            </div>



            <div class="col-md-4 col-lg-4 contact mt-xs-30">
                <div class="headeing pb-20">
                    <h2>Contact Info</h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <div class="contact-info">
                    <?php
                        $query="select * from header";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                    <ul class="info mt-4">
                        <li>
                            <div class="icon ion-ios-location"></div>
                            <div>

                                <?php echo $row['address']; ?>

                            </div>
                        </li>

                        <li>
                            <div class="icon ion-android-call"></div>
                            <div>
                                <?php echo $row['contactno']; ?>
                            </div>
                        </li>
                        <li>
                            <div class="icon ion-ios-email"></div>
                            <div>
                                <?php echo $row['email']; ?>
                            </div>
                        </li>
                    </ul>
                    <ul class="event-social ">
                        <?php
                        $i=1;
                        $query="select * from social_media";
                        $result=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <li>
                            <a target="_blank" href="<?php echo $row['url'];?>"><i class="<?php echo $row['icons'];?>"
                                    aria-hidden="true"></i></a>
                                    <!-- <a target="_blank" href="<?php echo $row['url'];?>"><i class="fa fa-<?php echo $row['icons'];?>"
                                    aria-hidden="true"></i></a> -->
                        </li>
                        <?php
                            $i++;
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Map Section -->
</section>


<!-- Map -->
<section class="map-box">
    <div class="map">
        <?php
                $query="select * from map";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
        <div id="map">
            <?php echo $row['map']; ?>
                            
        </div>
    </div>
</section>
<!-- Contact Section -->
<!--End Contact-->





<!-- FOOTER -->
<?php
	include ("footer.php");
	?>﻿<?php
include ("navigation.php");
?>

<!--Header End Here-->
<!--End mainmenu area-->
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
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>Contact</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">Contact</span>
            </div>
        </h1>
    </div>
</div>
<!-- Intro Section End-->



<!-- CONTENT -->
<!-- Contact Section -->
<section class="padding pt-xs-40">
    <div class="container">

        <div class="row">

            <div class="col-md-8 col-lg-8">

                <div class="headeing pb-30">
                    <h2>Get in Touch</h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <!-- Contact FORM -->
                <form class="contact-form" method="post" action="" onsubmit="return validation();">
                    <!-- IF MAIL SENT SUCCESSFULLY -->
                    <div id="success">
                        <div role="alert" class="alert alert-success">
                            <strong>Thanks</strong>Your message has been sent.
                        </div>
                    </div>
                    <!-- END IF MAIL SENT SUCCESSFULLY -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-field">
                                <input class="input-sm form-full" id="name" type="text" name="name" required
                                    placeholder="Your Name">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="email" type="email" name="email" required
                                    placeholder="Email" style="border-color:#dedede">
                            </div>
                            <div class="form-field">
                                <input class="input-sm form-full" id="phone" type="number" name="phone" required
                                    placeholder="Enter Phone Number" style="border-color:#dedede">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-field">
                                <textarea class="form-full" id="query" rows="7" name="query" required
                                    placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 mt-30">
                            <input type="submit" name="send" value="Send Message" class="btn btn-success">
                        </div>
                    </div>
                </form>
                <!-- END Contact FORM -->

                <!--  -->
                <?php
          if (isset($_POST['send'])) {
            $name = htmlentities($_POST['name']);
            $email = htmlentities($_POST['email']);
            $phone = htmlentities($_POST['phone']);
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
              // $email_message .= '<tr><td>Image:</td><td><img src="2.jpg" alt="image" width="50" height="50"> </td></tr>';

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

                    /* [Validation for name box] */
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

                    var b = document.getElementById('mobile').value;
                    if (b.length < 1) {
                        document.getElementById("validmobile").innerHTML = '**Please write your mobile number.';
                        return false;
                    }
                    if (isNaN(b)) {
                        document.getElementById("validmobile").innerHTML = "** Only numbers are allowed.";
                        return false;
                    }
                    if (b.length < 10) {
                        document.getElementById("validmobile").innerHTML = "** Mobile number must be 10 digits.";
                        return false;
                    }
                    if (b.length > 10) {
                        document.getElementById("validmobile").innerHTML = "** Mobile number must be 10 digits.";
                        return false;
                    }
                    if ((b.charAt(0) != 9) && (b.charAt(0) != 8) && (b.charAt(0) != 7) && (b.charAt(0) != 6)) {
                        document.getElementById("validmobile").innerHTML =
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
                <!--  -->
            </div>



            <div class="col-md-4 col-lg-4 contact mt-xs-30">
                <div class="headeing pb-20">
                    <h2>Contact Info</h2>
                    <span class="b-line l-left line-h"></span>
                </div>
                <div class="contact-info">
                    <?php
                        $query="select * from header";
                        $result=mysqli_query($conn,$query);
                        $row=mysqli_fetch_assoc($result)
                        ?>
                    <ul class="info mt-4">
                        <li>
                            <div class="icon ion-ios-location"></div>
                            <div>

                                <?php echo $row['address']; ?>

                            </div>
                        </li>

                        <li>
                            <div class="icon ion-android-call"></div>
                            <div>
                                <?php echo $row['contactno']; ?>
                            </div>
                        </li>
                        <li>
                            <div class="icon ion-ios-email"></div>
                            <div>
                                <?php echo $row['email']; ?>
                            </div>
                        </li>
                    </ul>
                    <ul class="event-social ">
                        <?php
                        $i=1;
                        $query="select * from social_media";
                        $result=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_assoc($result))
                        {
                        ?>
                        <li>
                            <a target="_blank" href="<?php echo $row['url'];?>"><i class="<?php echo $row['icons'];?>"
                                    aria-hidden="true"></i></a>
                                    <!-- <a target="_blank" href="<?php echo $row['url'];?>"><i class="fa fa-<?php echo $row['icons'];?>"
                                    aria-hidden="true"></i></a> -->
                        </li>
                        <?php
                            $i++;
                        }
                        ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Map Section -->
</section>


<!-- Map -->
<section class="map-box">
    <div class="map">
        <?php
                $query="select * from map";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
        <div id="map">
            <?php echo $row['map']; ?>
                            
        </div>
    </div>
</section>
<!-- Contact Section -->
<!--End Contact-->





<!-- FOOTER -->
<?php
	include ("footer.php");
	?>