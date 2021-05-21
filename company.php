<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Liste Société  -  Events </title>
</head>
<style>
    .table th, .table td {
  padding: 0.72rem;
    }
</style>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Société</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Société</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Ajouter  Nouveau </span></a></div>
                        </div>
                    </div>
                </div>-->
            </div>

            <?php  if ($_SESSION['role'] == 'admin') {?>

                <div class="content-body">
        
                    <!-- Row grouping -->
                    <section id="row-grouping-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Listes des société</h4>
                                    </div>
                                    <div class="card-datatable">
                                        <table class="dt-row-grouping table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nom</th>
                                                    <th>Description</th>
                                                    <th>Logo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 

                                                    $stmt = $db->query('SELECT * from societe');

                                                    while ($row = $stmt->fetch()){ ?>
                                                

                                                        <tr>
                                                            <td></td>
                                                            <td><?php echo $row['nom_ste']?></td>
                                                            <td><?php echo $row['description_ste']?></td>
                                                            <td>
                                                                <?php if($row['image_ste'] != '') {?>
                                                                    <img src="app-assets/images/company/logo/<?php echo $row['image_ste']?>" width="50">
                                                                <?php } ?>    
                                                            </td>
                                                            <td>
                                                                <a href="update_societe.php?id=<?php echo $row['id_ste']?>" data-original-title="Modifier" data-placement="top" data-toggle="tooltip" class="update">
                                                                    <i class="mr-50" data-feather="edit" ></i>
                                                                </a>

                                                                <a href="#" data-original-title="Supprimer" data-placement="top" data-toggle="tooltip" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ?'));" class="delete">
                                                                    <i class="mr-50" data-feather="trash-2" ></i> 
                                                                </a>
                                                            </td>

                                                        </tr>

                                                    <?php } ?>     
                                                         
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>Nom</th>
                                                    <th>Description</th>
                                                    <th>Logo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ Row grouping -->


                </div>

            <?php }elseif ($_SESSION['role'] == 'exposant') { ?>

                <div class="content-body">
            
                    <!-- Row grouping -->
                    <section id="row-grouping-datatable">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Listes des société</h4>
                                    </div>
                                    <div class="card-datatable">
                                        <table class="dt-row-grouping table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nom</th>
                                                    <th>Description</th>
                                                    <th>Logo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                                    $id_user = $_SESSION['id_compte'];

                                                    $stmt = $db->query('SELECT * from societe where id_user='.$id_user);

                                                    while ($row = $stmt->fetch()){ ?>
                                                

                                                        <tr>
                                                            <td></td>
                                                            <td><?php echo $row['nom_ste']?></td>
                                                            <td><?php echo $row['description_ste']?></td>
                                                            <td>
                                                                <?php if($row['image_ste'] != '') {?>
                                                                    <img src="app-assets/images/company/logo/<?php echo $row['image_ste']?>" width="50">
                                                                <?php } ?>    
                                                            </td>
                                                            <td>
                                                                <a href="#" data-original-title="Modifier" data-placement="top" data-toggle="tooltip" class="update">
                                                                    <i class="mr-50" data-feather="edit" ></i>
                                                                </a>
                                                            </td>

                                                        </tr>

                                                    <?php } ?>     
                                                         
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th>Nom</th>
                                                    <th>Description</th>
                                                    <th>Logo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/ Row grouping -->


                </div>

            <?php } ?>

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

    <!-- BEGIN: Page Vendor JS-
    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
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