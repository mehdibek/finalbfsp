<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Auditorium  -  Events </title>
</head>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">

                <section class="section_single audit">
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

                            <img src="app-assets/images/bg/Auditorium_.png" usemap="#image-map" class="img_vd">

                            <map name="image-map">
                                <area target="" alt="" title="" data-toggle="modal" data-target="#exampleModalCenter" coords="900,700,319,191" shape="rect">
                            </map>
                        </div>


                        <!-- Vertical modal -->
                                <div class="vertical-modal-ex">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body row">
                                                    <iframe width="800" height="400" src="https://www.youtube.com/embed/HdmMA1BPLR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Vertical modal end-->


                    </div>
                </section>
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
    <script src="app-assets/js/scripts/components/components-modals.js"></script>
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