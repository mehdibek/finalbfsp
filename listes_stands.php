<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Listes Stands  -  Events </title>
</head>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <!-- default swiper -->
                <section id="component-swiper-default">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default</h4>
                        </div>
                        <div class="card-body">
                            <div class="swiper-default swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-1.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-2.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-4.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-13.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-7.jpg" alt="banner" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ default swiper -->

                <!-- Responsive Breakpoints swiper --> 
                <section id="component-swiper-responsive-breakpoints">
                    <div class="card">
                        <div class="card-header">
                            <center style="width: 100%;">
                                <a class="btn btn-primary white butt_1" href="lobby.php"><img src="app-assets/images/icons/FVCN.png"><b>Lobby</b></a>
                                <a class="btn btn-primary white butt_3" href="listes_stands.php"><img src="app-assets/images/icons/Morocco.png"><b>Moroccan Exhibitors</a>
                                <a class="btn btn-primary white butt_2" href="listes_stands_african.php"><img src="app-assets/images/icons/Senegal.png"><b>Pan African</b> Exhibitors</a>
                                <a class="btn btn-primary white butt_1" href="auditorium.php"><img src="app-assets/images/icons/Auditorium.png">Auditorium</b></a>
                                <a class="btn btn-primary white butt_4" href="gallery.php"> <img src="app-assets/images/icons/Gallery.png"> Gallery</a>
                            </center>
                        </div>
                        <div class="card-body">
                            <div class="swiper-responsive-breakpoints swiper-container">
                                <div class="swiper-wrapper">

                                    <?php 

                                        $stmt = $db->query('SELECT * FROM `stand` WHERE `img_stand` IS NOT NULL and id_stand NOT IN (36,37,38,39,40,41,42,43,44,45) ');
                                            while ($row = $stmt->fetch()){ ?>

                                                <div class="swiper-slide">
                                                    <a href="single_stand.php?id=<?php echo $row['id_stand']?>">
                                                        <img class="img-fluid" src="app-assets/images/stands/img/<?php echo $row['img_stand']?>" alt="banner" />
                                                    </a>
                                                </div>
                                    
                                    <?php } ?>  


                                    <!--<div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-31.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-32.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-33.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-34.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-35.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-36.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-37.jpg" alt="banner" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="app-assets/images/banner/banner-38.jpg" alt="banner" />
                                    </div>-->
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Navigation
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                -->
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Responsive Breakpoints swiper -->

                

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php 
  /********Begin footer ********/
   include("util/pageutil/footer.php"); 
  /********End footer**********/
    ?>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/extensions/js/ext-component-swiper.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>