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
                    <li class="breadcrumb-item active" aria-current="show_clients">Client</li>
                </ol>
            </nav>

            <div class="pb-3">
                <div class="row">
                    <div class="col-sm-10">
                        <h2>View Clients</h2>
                    </div>
                    <div class="col-sm-2">
                        <a href="add_clients"><button class="btn btn-primary">Create New</button></a>
                        <a href="../admin"><button class="btn btn-primary">Back</button></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card mb-grid">
                        <!-- <div class="card-header d-flex justify-content-between align-items-center">
                                    <div class="card-header-title">product</div>
                                </div> -->

                        <?php
                                $query = "select * from clients";
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
                                        <th scope="col">Client</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Area</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Value</th>
                                        <th scope="col">Gardner</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                           $a=1;
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
                                        
                                        <td>
                                           <?php echo $row['client_name'];?>
                                        </td>

                                        <td>
                                           <?php echo $row['description'];?>
                                        </td>

                                        <td>
                                           <?php echo $row['address'];?>
                                        </td>
                                        
                                        <td>
                                           <?php echo $row['area'];?>
                                        </td>
                                        
                                        <td>
                                           <?php echo $row['date'];?>
                                        </td>

                                        
                                        <td>
                                           <?php echo $row['amount'];?>
                                        </td>

                                        
                                        <td>
                                           <?php echo $row['gardner'];?>
                                        </td>

                                        <td>
                                            <a href="edit_clients.php?id=<?php echo $row["id"]; ?>"><button
                                                    class="btn btn-primary">Edit</button></a>
                                        </td>
                                        <td>
                                            <a href="delete_clients.php?id=<?php echo $row["id"]; ?>"><button
                                                    class="btn btn-primary" onclick="return checkdelete();">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                               }
                                               $a++;
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


            <!-- If you prefer jQuery these are the required scripts -->
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
            <script src="../dist/js/vendor.js"></script>
            <script src="../dist/js/adminx.js"></script>


            </body>

            </html>