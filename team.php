<?php
include ("navigation.php");
?>
<!--Header End Here-->



<!-- Intro Section -->
<div class="box">
    <?php
                $query="select * from background";
                $result=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($result)
                ?>
    <img src="upload/<?php echo $row['image']; ?>" alt="" height="400px" width="100%">
    <div class="div title_row light-color" style="margin-top:-220px;">
        <h1 style="width:330px;height:147px; padding-top:30px; background:rgba(0, 0, 0, .5);"><span>Team</span>
            <div class="page-breadcrumb mt-3" style="font-size:14px;background:transparent;z-index:-1;">
                <a>Home </a>/ <span style="color:white;">Team</span>
            </div>
        </h1>
    </div>
</div>
<!-- End Intro Section -->


<div class=" padding ptb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">


                <!--Team Section-->

                <!--Team Section-->
                <section id="team" class="team-section">
                    <div class="container">
                        <div class="row text-center pb-30">
                            <div class="col-sm-12">
                                <div class="heading-box ">
                                    <h2><span>Our</span> Team</h2>
                                    <span class="b-line"></span>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-50 text-center">
                            <?php    
									$a=1;
                                    $query="select * from team";
                                    $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                            ?>
                            <div class="col-sm-3 mb-xs-30 mt-5">
                                <div class="box-hover img-scale">
                                    <figure>
                                        <img src="upload/<?php echo $row['image']; ?>" alt="" height="200px">
                                    </figure>

                                    <div class="team-block" style="padding:1px;line-height:1px;">
                                        <strong class="mt-3 mb-4"><?php echo $row['name']; ?></strong>
                                        <span><?php  echo $row['designation'];?></span>
                                        <hr class="small-divider border-white">

                                        <!-- icon start -->
                                        <?php    
                                            $i=1;
                                            $query="select * from social_media";
                                            $res=mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                           ?>
                                        <a href="<?php echo $row['url'] ?>"><i class="<?php echo $row['icons'];?>"
                                                aria-hidden="true" style="color:white; margin:5px;"></i></a>

                                        <?php
                                        $i++;
                                        }
                                        ?>
                                        <!-- icon end -->

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
                <!--Team Section End-->
                <!--Team Section End-->
            </div>
        </div>
    </div>
</div>
<!--End Contact-->


<!-- FOOTER -->
<?php
include ("footer.php");
?>