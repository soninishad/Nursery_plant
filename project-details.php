<?php
include ("navigation.php");
?>
<!--Header End Here-->
<!--End mainmenu area-->



<!-- Intro Section -->
<div class="box">
                <?php
                $query="select * from background";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
    <img src="upload/<?php echo $row['image']; ?>" alt="" height="400px" width="100%">
    <div class="div title_row light-color" style="margin-top:-220px;">
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>Project Details</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">Project Details</span>
            </div>
        </h1>
    </div>
</div>
<!-- End Intro Section -->


<!-- Related Project-->
<div class="padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="he pb-30 ">
                    <h2><span>Related</span> Project</h2>
                    <span class="b-line l-left"></span>
                </div>
            </div>


            <div class="row">
                <?php 
                // include ("connection.php");
                $a=1;
                // $_SERVER['PHP_SELF'];
                 if(isset($_GET['id']))
                {
                    $query="select * from project where id={$_GET['id']}";
                    $result=mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result);
                ?>

                <div class="col-sm-6">
                    <div class="text-box mt-25">
                        <div class="box-title mb-15">
                            <h3><a href="#"><?php echo $row['title']; ?></a></h3>
                        </div>
                        <div class="text-content">
                            <p class="justifier">
                                <?php echo $row['description']; ?>
                            </p>
                            <h2>
                                <a href="<?php echo $row['url']?> " target="_blank">
                                    <img src="assets/images/final.png"
                                        style="width: 150px; height: 60px;margin-top:20px;border-radius:10px"></a>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 ms-5">
                    <img class="img-responsive" src="upload/<?php echo $row['image']; ?>" alt="Photo"  height="auto" width="600px">
                </div>

                <?php
            $a++;
                }
                ?>
            </div>

        </div>
    </div>
</div>
</div>
<!-- Related Project-->


<!-- FOOTER -->
<?php
include ("footer.php");
?>