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


                <section class="section_single lobby ">
                    <div class="card">
                        <div class="card-header">
                            <center style="width: 100%;">
                                <a class="btn btn-primary white butt_1" href="auditorium.php"><img src="app-assets/images/icons/Auditorium.png"><b>Auditorium</b></a>
                                <a class="btn btn-primary white butt_2" href="listes_stands_african.php"><img src="app-assets/images/icons/Senegal.png"><b>Pan African</b> Exhibitors</a>
                                <a class="btn btn-primary white butt_3" href="listes_stands.php"><img src="app-assets/images/icons/Morocco.png"><b>Moroccan</b> Exhibitors</a>
                                <a class="btn btn-primary white butt_4" href="gallery.php"> <img src="app-assets/images/icons/Gallery.png"> Gallery</a>
                            </center>
                        </div>
                        

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


    <script src="app-assets/js/jquery.fancybox.min.js"></script>


    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/extensions/ext-component-swiper.js"></script>
    <!-- END: Page JS-->


    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });

        $( ".gl1" ).click(function() {
          $( ".gallery1" ).css('visibility','visible').css('height','auto').css('margin-top','5%');
          $( ".gallery2" ).css('visibility','hidden').css('height','0').css('margin','0');
        });


        $( ".gl2" ).click(function() {
          $( ".gallery2" ).css('visibility','visible').css('height','auto').css('margin-top','0');
          $( ".gallery1" ).css('visibility','hidden').css('height','0').css('margin','0');
        });


    </script>
</body>
<!-- END: Body-->

</html>