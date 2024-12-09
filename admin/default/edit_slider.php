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
                    <li class="breadcrumb-item"aria-current="edit_slider">Slider</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h2>Edit Slider</h2>
            </div>

            <?php
            $id=$_GET["id"];
            $query = "select * from slider where id='$id' ";
            $res=mysqli_query($conn,$query);
            if(mysqli_num_rows($res)>0)
            {
                $row=mysqli_fetch_assoc($res);
                ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid">

                        <div class="card-body collapse show" id="card1">
                            <form action="slider_updatecode.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="form-control"
                                            value="<?php echo $row['image'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="heading">Heading</label>
                                    <input type="text" name="heading" class="form-control" aria-describedby="heading"
                                        placeholder="Enter heading" value="<?php echo $row['heading'];?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="sub_heading">Sub Heading</label>
                                    <input type="text" name="sub_heading" class="form-control"
                                        aria-describedby="sub_heading" placeholder="Enter sub heading" value="<?php echo $row['sub_heading'];?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="paragraph">Paragraph</label>
                                    <textarea type="paragraph" name="paragraph" class="form-control" cols="30" rows="2"
                                        placeholder="Enter Paragraph"><?php echo $row['paragraph'];?></textarea>
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