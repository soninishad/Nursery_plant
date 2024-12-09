<?php
include ('header.php');
?>



      <!-- Main Content -->
      <div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="../admin">Home</a></li>
                <li class="breadcrumb-item"><a href="social_media_edit">Social Media</a></li>
              </ol>
            </nav>

            <div class="pb-3">
              <h2>Edit Social Media</h2>
            </div>

            <?php
            include "../../connection.php";   

            $id=$_GET["id"];
            $query=" select * from social_media where id='$id' ";
            $res=mysqli_query($conn,$query);
            if(mysqli_num_rows($res)>0)
            {
                $row=mysqli_fetch_assoc($res);
                ?>

            <div class="row">
              <div class="col-lg-12">
                <div class="card mb-grid">

                  <div class="card-body collapse show" id="card1">
                    <form action="social_media_update.php" method="post" class="form-group"  enctype="multipart/form-data">
                      
                    <div class="form-group mt-3">
                      <div class="custom-file">
                          <label for="icons" class="form-label">Icons</label>
                          <input type="text" name="icons" value="<?php echo $row['icons'] ?>" class="form-control">
                    </div>
                      </div>

                      <div class="form-group mt-3">
                        <label class="form-label" for="heading">Url</label>
                        <input type="url" name="url"  class="form-control"  value="<?php echo $row['url'] ?>"  aria-describedby="url" placeholder="Enter url">
                      </div>
                      <input type="hidden" name="id"  value="<?php echo $id ?>">  
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <?php
            }
            ?>
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
          if(form !== null) {
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