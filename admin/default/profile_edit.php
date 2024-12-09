<?php
include ('header.php');

$id=$_REQUEST['id'];

$query="select * from admin_login where id='$id'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);

if(isset($_POST['save'])){
    $file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
     $file_size = $_FILES['file']['size'];
     $file_type = $_FILES['file']['type'];
     $folder="../../upload/";
     if($file_loc)
     {
     move_uploaded_file($file_loc,$folder.$file);
       
       $account_name=$_POST['account_name'];  
        $username=$_POST['username'];  
       
     $query1="UPDATE admin_login SET account_name='$account_name', username='$username', image='$file' where id='$id'";

      if(mysqli_query($conn,$query1)){
        echo '<script language="javascript">';
        echo 'alert("Your Content successfully Updated");';
        echo 'window.location.href="profile";';
        echo '</script>';

     }else{
        echo '<script language="javascript">';
        echo 'alert("Your Content Is Not Updated");';
        echo 'window.location.href="profile";';
        echo '</script>';
     }
     }
else{
       
      $account_name=$_POST['account_name'];  
        $username=$_POST['username'];  
       
       $query1="UPDATE admin_login SET account_name='$account_name', username='$username' where id='$id'";
      if(mysqli_query($conn,$query1)){
        echo '<script language="javascript">';
        echo 'alert("Your Content successfully Updated");';
        echo 'window.location.href="profile";';
        echo '</script>';
        

     }else{
        echo '<script language="javascript">';
        echo 'alert("Your Content Is Not Updated");';
        echo 'window.location.href="profile";';
        echo '</script>';
     }
    
}   
       }
?>




<!-- Main Content -->
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="../admin">Home</a></li>
                    <li class="breadcrumb-item"aria-current="profile_edit">Profile</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h2>Update Admin Account</h2>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid">
                        <div class="card-body collapse show" id="card1">

                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="form-label" for="account_name">Account Name</label>
                                    <input type="text" name="account_name" class="form-control" id="account_name"
                                        placeholder="Enter account name" value="<?php echo $row['account_name'] ?>">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="username">User Name</label>
                                    <input type="text" name="username" class="form-control" aria-describedby="username"
                                        id="username" placeholder="Enter User Name"
                                        value="<?php echo $row['username'] ?>">
                                </div>


                                <div class="form-group ">
                                    <label class="form-label">Image</label>
                                    <div class="col-sm-10">
                                        <img src="../../upload/<?php echo $fet['image'];?>" width="150" height="100" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-file">
                                        <label for="file" class="form-label">Upload Image</label>
                                        <input type="file" name="file" accept="image/png, image/jpg, image/jpeg"
                                            class="form-control" value="<?php echo $row['image'];?>">
                                    </div>
                                </div>

                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="submit" class="btn btn-primary"  name="save">Update</button>
                            </form>
                            
                            <script>
                            document.getElementById("account_name").onkeypress = function(e) {
                                var chr = String.fromCharCode(e.which);
                                if ("></\"=".indexOf(chr) >= 0)
                                    return false;
                            };
                            document.getElementById("username").onkeypress = function(e) {
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