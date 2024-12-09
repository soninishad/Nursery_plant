<?php
include ("navigation.php");
?>
<!--Header End Here-->
<!--End mainmenu area-->
<!-- END HEADER -->



<!-- Intro Section -->
<div class="box">
    <?php
                $query="select * from background";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
    <img src="upload/<?php echo $row['image']; ?>" alt="" height="400px" width="100%">
    <div class="div title_row light-color" style="margin-top:-220px;">
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>Services
                Details</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">Services Details</span>
            </div>
        </h1>
    </div>
</div>
<!-- Intro Section -->


<!-- Service Section -->
<div id="services-section" class="pt-80 pt-xs-60">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <div class="he pb-20 ">
                    <h2><span>Related</span> Services</h2>
                    <span class="b-line l-left"></span>
                </div>
            </div>

            <?php 
                $a=1;
                // $_SERVER['PHP_SELF'];
                 if(isset($_GET['id']))
                {
                    $query="select * from services where id={$_GET['id']}";
                    $result=mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result);
                ?>
            <div class="col-lg-5 col-sx-12">
                <div class="single-sidebar-widget">

                    <div class="text-box mt-40">
                        <div class="box-title mb-20">
                            <h2 class="justifier"><?php echo $row['title']; ?></h2>
                        </div>
                        <div class="text-content">
                            <p class="justifier">
                                <?php echo $row['description']; ?>
                            </p>
                            <h2>
                                <a href="<?php echo $row['url']?>" target="_blank">
                                    <img src="assets/images/final.png"style="width:150px; height:40px;margin-top:20px;border-radius:10px"></a>
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="single-sidebar-widget">
                </div>
            </div>




            <div class="col-lg-7 mb-5 ms-4">
                <div class="full-pic">
                    <figure> <img src="upload/<?php echo $row['image'];?>" alt=""  height="auto" width="600px"> </figure>
                </div>

            </div>
            <?php
$a++;
                }
                else
{
    echo "No post found";
}
            ?>
        </div>
    </div>
</div>
<!-- Service Section end -->




<!-- FOOTER -->
<?php
include ("footer.php");
?>