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
                    <li class="breadcrumb-item"><a href="add_clients">Clients</a></li>
                </ol>
            </nav>

            <div class="pb-3">
                <h2>Add Client</h2>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid">
                        <div class="card-body collapse show" id="card1">
                            <form action="insert_clients.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label for="file" class="form-label">Image</label>
                                        <input type="file" name="file" accept="image/png, image/jpg, image/jpeg"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="form-label" for="client_name">Client</label>
                                    <input type="text" name="client_name" class="form-control" id=""
                                        placeholder="Enter client">
                                </div>

                                <div class="form-group ">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea name="description" id="" cols="30" rows="2" class="form-control" 
                                        placeholder="Enter description"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="address">Address</label>
                                    <textarea name="address" id="" cols="30" rows="2" class="form-control"
                                        placeholder="Enter Location"></textarea>
                                </div>


                                <div class="form-group ">
                                    <label class="form-label" for="area">Surface Area</label>
                                    <input type="text" name="area" class="form-control" id=""
                                        placeholder="Enter area / sqft">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="date">Year Completed Date</label>
                                    <input type="date" name="date" class="form-control" aria-describedby="title"
                                        placeholder="Enter date">
                                </div>


                                <div class="form-group ">
                                    <label class="form-label" for="amount">Estimate Value</label>
                                    <input type="currency" name="amount" class="form-control" id=""
                                        placeholder="Enter amount">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="gardner">Gardner</label>
                                    <input type="text" name="gardner" class="form-control" aria-describedby="title"
                                        placeholder="Enter gardner name">
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Add</button>
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