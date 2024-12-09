<?php
include "../connection.php";
session_start();

if(isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$query = "select * from admin_login where username='$username' and password='$password'  ";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)>0)
{
if($password==$row['password'])
{
    $_SESSION["login"] = true;
    $_SESSION["id"] = $row["id"];
    echo  "<script> alert('Admin login successful');
    window.location.href='admin';
    </script>";
}
else
{
    echo  "<script> alert('wrong password');
    window.location.href='index';
    </script>";
}

}
else
{
    echo "
    <script>
    alert(' Not register');
    window.location.href='index';
    </script>
    ";
    die();

}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrator of New Maurya Nursery, Mujasa, Malihabad, Lucknow - 226102</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="dist/css/adminx.css" media="screen" />
</head>

<body>

    <?php
					    $query="select * from login_background";
					    $res=mysqli_query($conn,$query);
					     $a=1;
					    while($row=mysqli_fetch_assoc($res))
					    {
					?>
                <div class="container-login100"
                    style="background-image: url('../upload/<?php echo $row['image'] ?>'); background-size: 100% 100%; ">
                    <?php
					}
					?>

        <div class="adminx-container d-flex justify-content-center align-items-center" style="padding-bottom:100px">
            <div class="page-login">
                <div class="text-center">
                    <?php
					    $query="select * from admin_login";
					    $res=mysqli_query($conn,$query);
					     $a=1;
					    while($row=mysqli_fetch_assoc($res))
					    {
					?>
                    <a class="navbar-brand  h1">
                        <img src="../upload/<?php echo $row['image'] ?>"
                            class="navbar-brand-image d-inline-block align-top mr-2" alt=""
                            style="height:80px; width:80px; border-radius:50%;">
                        <h2> <b><?php echo $row['account_name'];?></b></h2>
                    </a>
                </div>
                <?php
              }
              ?>

                <div class="card mb-5 p-5">
                    <div class="card-body ">
                        <form action="" method="post" class="form-control">
                            <div class="form-group">
                                <label for="username" class="form-label">Admin Name</label>
                                <input type="text" class="form-control" id="username" name="username" required
                                    placeholder="Username" onpaste="return false">
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required
                                    placeholder="Password" onpaste="return false">
                            </div>
                            <button type="submit" class="btn btn-sm btn-block btn-primary mb-2"
                                name="login">Login</button>
                        </form>
                    </div>
                    <!-- <div class="card-footer text-center">
            <a href="#"><small>Forgot your password?</small></a>
          </div> -->
                </div>
            </div>
        </div>


        <script>
        document.getElementById("username").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            if ("></\"=".indexOf(chr) >= 0)
                return false;
        };
        document.getElementById("password").onkeypress = function(e) {
            var chr = String.fromCharCode(e.which);
            if ("></\"=".indexOf(chr) >= 0)
                return false;
        };
        </script>
        <!--====================================================================-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="../dist/js/vendor.js"></script>
        <script src="../dist/js/adminx.js"></script>
        <!--==================================================================-->
</body>

</html>