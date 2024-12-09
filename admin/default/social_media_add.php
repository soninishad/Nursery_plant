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
                <li class="breadcrumb-item"><a href="social_media_add">Social Media</a></li>
              </ol>
            </nav>

            <div class="pb-3">
              <h2>Add Social Media</h2>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="card mb-grid">

                  <div class="card-body collapse show" id="card1">
                    <form action="social_media_insert.php" method="post" class="form-group"  enctype="multipart/form-data">
                      
                    <div class="form-group mt-3">
                      <div class="custom-file">
                          <label for="icons" class="form-label">Icons</label>
                          <input type="text" name="icons" class="form-control">
                    </div>
                      </div>

                      <div class="form-group mt-3">
                        <label class="form-label" for="heading">Url</label>
                        <input type="url" name="url"  class="form-control"  aria-describedby="url" placeholder="Enter url">
                      </div>
                 
                   
                      <button type="submit" class="btn btn-primary">Add</button>
                    </form>
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