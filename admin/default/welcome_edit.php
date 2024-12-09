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
                    <li class="breadcrumb-item" aria-current="welcome_edit">Welcome</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h2>Edit welcome</h2>
            </div>

            <?php
            $id=$_GET["id"];
            $query=" select * from home_content where id='$id' ";
            $res=mysqli_query($conn,$query);
            if(mysqli_num_rows($res)>0)
            {
                $row=mysqli_fetch_assoc($res);
                ?>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid">

                        <div class="card-body collapse show" id="card1">
                            <form action="welcome_updatecode.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text" name="heading" class="form-control" aria-describedby="heading"
                                        placeholder="Enter heading" value="<?php echo $row['heading'];?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="paragraph">Paragraph</label>
                                    <textarea type="text" name="paragraph" cols="10" rows="4"
                                        class="form-control"><?php echo $row['paragraph'];?></textarea>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id ?>" />
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