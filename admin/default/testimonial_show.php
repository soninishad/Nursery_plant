<?php
include ('header.php');
?>

<!-- adminx-content-aside -->
<div class="adminx-content">


    <div class="adminx-main-content">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="../admin">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="testimonial_show">Testimonial</li>
                </ol>
            </nav>


            <div class="pb-3">
                <div class="row">
                    <div class="col-sm-10">
                        <h2>View Testimonial</h2>
                    </div>
                    <div class="col-sm-2">
                        <a href="testimonial_add"><button class="btn btn-primary">Create New</button></a>
                        <a href="../admin"><button class="btn btn-primary">Back</button></a>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="card mb-grid">
                        <?php
                                $query = "select * from testimonial";
                                $res = mysqli_query($conn,$query);
                                if(mysqli_num_rows($res)>0)
                                {
                                ?>

                        <div class="table-responsive-md">
                            <table class="table table-actions table-striped table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-all">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                           while($row=mysqli_fetch_assoc($res))
                                           {
                                        ?>
                                    <tr>
                                        <th scope="row">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-row">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>

                                        <td><?php echo $row['id'];?></td>
                                      
                                        <td>
                                            <img src="../../upload/<?php echo $row ["image"];?>" alt="Image not found"
                                                height="100px" width="100px">
                                        </td>
                                        <td><?php echo $row['heading'];?></td>
                                        <td><?php echo $row['title'];?></td>

                                        <td>
                                            <a href="testimonial_edit.php?id=<?php echo $row["id"] ?>"><button
                                                    class="btn btn-primary">Edit</button></a>
                                        </td>
                                        <td>
                                            <a href="testimonial_delete.php?id=<?php echo $row["id"] ?>"><button
                                                    class="btn btn-primary" onclick="return checkdelete();">Delete</button></a>
                                        </td>

                                    </tr>
                                    <?php
                                               }
                                             ?>
                                </tbody>
                                <?php
                                                  }
                                                  else
                                                  {
                                                    echo "record not found";
                                                  }
                                              ?>
                            </table>

                            <!-- delete confirmation -->
                            <script>
                            function checkdelete() {
                                return confirm('Are you sure you want to delete this record ?');
                            }
                            </script>
                            <!-- confirmation delete end -->

                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
            <script src="../dist/js/vendor.js"></script>
            <script src="../dist/js/adminx.js"></script>
            </body>

            </html>