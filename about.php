<?php
include ("navigation.php");
?>
<!--Header End Here-->


<!-- Intro Section -->
<div class="box ">
    <?php
                $query="select * from background";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
    <!-- <img src="upload/1.jpg" alt="" height="400px" width="100%"> -->
    <img src="upload/<?php echo $row['image'];?>" alt="" height="400px" width="100%">
    <div class="div title_row light-color" style="margin-top:-220px;">
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>About</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">About</span>
            </div>
        </h1>
    </div>
</div>
<!-- Intro Section End-->


<!-- About Section -->
<div id="about-section" class="padding pt-xs-35">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 mt-5">
                <div class="block-title v-line">
                    <?php
                $a=1;
                $query="select * from home_content";
                $res=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($res);
                 ?>
                    <h2><span><?php echo $row['heading'];?></span></h2>

                    <?php
                $a=1;
                $query="select * from about";
                $res=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($res);
            ?>
                    <p class="italic">
                        <?php echo $row['heading'] ?>
                    </p>
                </div>
                <div class="text-content">
                    <p class="justifier">
                        <?php echo $row['paragraph'] ?>
                    </p>
                </div>
                <hr class="divider">
                <div class="post-content">
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="post-content ">
                    <div class="post-img">
                        <img class="img-responsive" src="upload/<?php echo $row['image']; ?>" alt="Photo"
                            height="400px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End-->


<!-- Mission Section -->
<div id="mission-section" class="ptb ptb-xs-60 pt-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="block-title v-line mb-35 ">
                    <h2><span>Thought </span> Leaders</h2>
                    <p class="italic">
                        Aenean suscipit eget mi act
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                // include "connection.php";
                $a=1;
                $query="select * from about_thought";
                $res=mysqli_query($conn,$query);
				while($row=mysqli_fetch_assoc($res))
				{
         ?>
            <div class="col-md-12 col-lg-12">
                <div class="about-block clearfix mt-2">
                    <div class="fl width-25per box-shadow mt-15 mb-xs-15">
                        <img class="img-responsive" src="upload/<?php echo $row['image'];?>" alt="Photo">
                    </div>
                    <div class="text-box pt-45 pb-15 pl-70 pl-xs-0 width-75per fl">
                        <div class="box-title">
                            <h3><?php echo $row['heading'];?></h3>
                        </div>
                        <div class="text-content ">
                            <p class="justifier">
                                <?php echo $row['paragraph'];?>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <?php
		$a++;
				}
				?>
        </div>
    </div>

</div>
<!-- about thougth end -->




<!-- Service_Section -->
<section id="partner-section" class="ptb ptb-xs-60 gray-bg" style="padding-top:0px; ">
    <div class="container">
        <div class="row  pb-xs-30">
            <div class="col-md-12">
                <div class="block-title v-line mb-10 mt-5 ">
                    <h2><span>Our</span> Client</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php 
                $a=1;
                $query="select * from clients";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
            <div class="col-lg-4 col-md-12 mb-xs-30 mb-sm-30 mt-5">
                <div class="service-box img-scale">
                    <figure>
                        <img src="upload/<?php echo $row['image']; ?>" alt="" style="height:250px;">
                    </figure>
                    <div class="service-text">
                        <h3 class="text-center"><a href="client-details.php?id=<?php echo $row["id"]; ?>">
                                <?php echo $row['client_name']; ?></a></h3>

                    </div>
                </div>
            </div>

            <?php
                $a++;
                }
                ?>

        </div>

    </div>
</section>
<!--  -->





<?php
include ("footer.php");
?>