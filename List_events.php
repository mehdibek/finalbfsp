<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Liste Evenements - Events </title>
  <style type="text/css">

    .app .card.card-congratulations {
        min-height: 200px;
    }

    .content-body .row {
        height: 350px;
        width: 100%;
        float:left;
    }


  </style>
</head>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Evenements</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Liste des evenements 
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <?php  if ($_SESSION['role'] == 'admin') {?>

                    <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                        <div class="form-group breadcrumb-right">
                            <div class="dropdown">
                                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="add_event.php"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Ajouter  Nouveau </span></a></div>
                            </div>
                        </div>
                    </div>

                <?php } ?>    
            </div>
            <div class="content-body">
                <!-- Card Advance -->

                <!-- <div class="row"> 
                    <div class="col-12 col-md-3 form-group">
                        <select class="select2 form-control form-control-lg">
                            <option selected>All</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3 form-group">
                        <select class="select2 form-control form-control-lg">
                            <option selected>City</option>
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-3 form-group">
                        <input type="text" id="pd-default" class="form-control pickadate" placeholder="Date Debut" />
                    </div>
                    <div class="col-12 col-md-3 form-group">
                        <input type="text" id="pd-default" class="form-control pickadate" placeholder="Date Fin" />
                    </div>

                    <div class="col-12 col-md-2 form-group">
                        <button class="btn btn-primary waves-effect waves-float waves-light" type="submit"><i data-feather="search"></i></button>
                    </div>

                    
                </div>-->

                <div class="row match-height">

                    <?php 

                        $stmt = $db->query('SELECT * from Events');

                        while ($row = $stmt->fetch()){ ?>
                            
                            <!-- Congratulations Card -->
                            <div class="col-12 col-md-4 col-lg-4 evnts">
                                <!--<a href="stands.php?idevent=<?php echo $row['id_event']?>" class="links">-->
                                <a href="lobby.php" class="links">
                                <div class="card card-congratulations" style="background-image: url(app-assets/images/Events/<?php echo $row['img_event']?>);">

                                    <?php  if ($_SESSION['role'] == 'admin') {?>

                                        <div class="card-body text-center"> 
                                            <div class="list_icon">
                                                <a href="update_event.php?id=<?php echo $row['id_event']?>" data-original-title="Modifier" data-placement="top" data-toggle="tooltip">
                                                    <i class="mr-50" data-feather="edit" ></i>
                                                </a>

                                                <a href="supp_event.php?id=<?php echo $row['id_event']?>" data-original-title="Supprimer" data-placement="top" data-toggle="tooltip" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ?'));">
                                                    <i class="mr-50" data-feather="trash-2" ></i> 
                                                </a>
                                            </div>
                                        </div>

                                    <?php } ?>

                                    </div>
                                </a>
                            </div>
                            <!--/ Congratulations Card -->   

                        <?php } ?> 


                        <!-- Congratulations Card -->
                            <div class="col-12 col-md-6 col-lg-6 app">
                                <iframe src="https://player.vimeo.com/video/544358173?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen  title="R1 - TANGER - TETOUAN - AL HOCEIMA" width="100%" height="320"></iframe>
                                <script src="https://player.vimeo.com/api/player.js"></script>
                            </div>
                            <!--/ Congratulations Card -->    

                    
                </div> 

                <div class="row">

                <!-- Congratulations Card -->
                    <div class="col-12 col-md-6 col-lg-6 app">
                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                                <img src="app-assets/images/android.png" width="100"><br>
                                <h3 style="color: #fff;">Pan - Africa Moroccan <br> Handmade Expo</h3>
                                <a class="btn btn-primary waves-effect waves-float waves-light" href="http://bit.ly/HandmadeExpo" target="_blank">DOWNLOAD NOW FOR ANDROID!</a>
                            </div>
                        </div>
                    </div>
                    <!--/ Congratulations Card -->

                    <!-- Congratulations Card -->
                    <div class="col-12 col-md-6 col-lg-6 app">
                        <div class="card card-congratulations">
                            <div class="card-body text-center">
                                <img src="app-assets/images/app-store.png" width="100"><br>
                                <h3 style="color: #fff;">Pan - Africa Moroccan <br> Handmade Expo</h3>
                                <a class="btn btn-primary waves-effect waves-float waves-light" href="#" target="_blank">COMMING SOON FOR IOS!</a>
                            </div>
                        </div>
                    </div>
                    <!--/ Congratulations Card -->

                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>



    <!-- Modal -->
        <div class="modal fade text-left" id="defaultSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel18">Suppression</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Votre evenement a été Supprimer
                    </div>
                </div>
            </div>
        </div>

    <?php 
      /********Begin footer ********/
       include("util/pageutil/footer.php"); 
      /********End footer**********/
    ?>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-
    <script src="app-assets/js/scripts/cards/card-advance.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/js/scripts/forms/form-select2.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
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