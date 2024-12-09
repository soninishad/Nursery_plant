<?php
include ('header.php');

if (!isset($_SESSION["login"]))
    {
        header("Location:../index");
    }    
    
$_SESSION["id"] = "1";

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from admin_login WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["oldpassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE admin_login set password='" . $_POST["npass"] . "' WHERE id='" . $_SESSION["id"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>


<script>
function validatePassword() {
    var oldpassword, npass, cpass, output = true;

    oldpassword = document.frmChange.oldpassword;
    npass = document.frmChange.npass;
    cpass = document.frmChange.cpass;

    if (!oldpassword.value) {
        oldpassword.focus();
        document.getElementById("oldpassword").innerHTML = "required";
        output = false;
    } else if (!npass.value) {
        npass.focus();
        document.getElementById("npass").innerHTML = "required";
        output = false;
    } else if (!cpass.value) {
        confirmPassword.focus();
        document.getElementById("cpass").innerHTML = "required";
        output = false;
    }
    if (npass.value != cpass.value) {
        npass.value = "";
        cpass.value = "";
        npass.focus();
        document.getElementById("cpass").innerHTML = "New password not match with confirm Password";
        output = false;
    }
    return output;
}
</script>


<!-- Main Content -->
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="../admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="change_password">Change Password</a></li>
                </ol>
            </nav>

            <div class="pb-3">
                <h2>Change Password</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid">

                        <div class="card-body collapse show" id="card1">
                            <div style="color: red;">
                                <h4><?php if(isset($message)) { echo $message; } ?></h4>
                            </div>
                            <form action="" name="frmChange" method="post" onSubmit="return validatePassword()">
                                
                                <div class="form-group">
                                    <label class="form-label" for="oldpassword">Old Password <span
                                            style="color:red;">*</span> </label>
                                    <input type="password" id="oldpassword" name="oldpassword" class="form-control"
                                        required aria-describedby="oldpassword" placeholder="Enter old password" id="cp"
                                        onpaste="return false">
                                    <div><span id="oldpassword" class="required" style="color: red;"></span></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="npass">New Password <span style="color:red;">*</span>
                                    </label>
                                    <input type="password" id="np" onpaste="return false" name="npass"
                                        class="form-control" required aria-describedby="npass"
                                        placeholder="Enter new password">
                                    <div><span id="npass" class="required" style="color: red;"></span></div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="cpass">Confirm Password <span
                                            style="color:red;">*</span> </label>
                                    <input type="password" id="cnp" onpaste="return false" name="cpass"
                                        class="form-control" required aria-describedby="cpass"
                                        placeholder="Enter confirm password">
                                    <div><span id="cpass" class="required" style="color: red;"></span></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                        </form>
                        <script>
                        document.getElementById("cp").onkeypress = function(e) {
                            var chr = String.fromCharCode(e.which);
                            if ("></\"=".indexOf(chr) >= 0)
                                return false;
                        };
                        document.getElementById("np").onkeypress = function(e) {
                            var chr = String.fromCharCode(e.which);
                            if ("></\"=".indexOf(chr) >= 0)
                                return false;
                        };
                        document.getElementById("cnp").onkeypress = function(e) {
                            var chr = String.fromCharCode(e.which);
                            if ("></\"=".indexOf(chr) >= 0)
                                return false;
                        };
                        </script>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
<!-- // Main Content -->
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="../dist/js/vendor.js"></script>
<script src="../dist/js/adminx.js"></script>
<script>
(function() {
    'use strict';

    window.addEventListener('load', function() {
        var form = document.getElementById('needs-validation');
        if (form !== null) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }
    }, false);
})();
</script>
</body>

</html>