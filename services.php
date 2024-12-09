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
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>Services</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">Services</span>
            </div>
        </h1>
    </div>
</div>
<!-- Intro Section -->



<!-- Service Section -->
<div id="services-section" class="padding ptb-xs-40 gray-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 mb-30">
                <div class="heading-box">
                    <h2><span>Our </span> Services</h2>
                </div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s.
                </p>
            </div>
        </div>
        <div class="row" >
            <?php 
                $a=1;
                $query="select * from services";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result)>0)
                 {
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
            <div class="col-lg-4 col-md-6 full-wid" style="padding-top:20px;">
                <div class="service_box img-scale">
                    <figure>
                        <img src="upload/<?php echo $row['image']; ?>" alt=""   style="height:250px;"/>
                    </figure>
                    <div class="relative_box">
                        <h3><a href="#"><?php echo $row['title']; ?></a></h3>
                        <p class="justifier">
                            <?php 
							 echo $row['paragraph'];
							?>
                        </p>
                        <a href="services-details.php?id=<?php echo $row["id"]; ?>" class="btn btn-text mt-10 mb-2">Read More</a>
                    </div>
                </div>
            </div>
			<?php
                $a++;
                }
              }
                else
                {
                    echo "record not found";
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