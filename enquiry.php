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
                document.getElementById("validmobile").innerHTML = "** Mobile number must start with 9,8,7 & 6.";
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
      