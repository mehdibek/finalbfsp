<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Liste Stands  -  Events </title>
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
                                    <li class="breadcrumb-item"><a href="index.html">Acceuil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Evenements
                                    </li>
                                    <li class="breadcrumb-item active">Liste des Stands
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button
                                class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light"
                                type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg></button>
                            <div class="demo-inline-spacing">
                                <div class="form-modal-ex">
                                    <<div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#inlineForm"
                                            type="button"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check-square mr-1">
                                                <polyline points="9 11 12 14 22 4"></polyline>
                                                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                </path>
                                            </svg><span class="align-middle">Ajouter Nouveau </span>
                                        </a>
                                    </div>


                                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Nouveau Stand</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="#">
                                                    <div class="modal-body">
                                                        <label>Nom Stand: </label>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Nom Stand" id="name_stand" class="form-control" />
                                                        </div>
                                                        <label for="selectLarge">Société</label>
                                                        <select class="form-control form-control-lg mb-1" id="ste_add">
                                                            <option selected="">Select Société</option>
                                                            <?php
                                                               $query = $db->query('SELECT societe.nom_ste,societe.id_ste from societe');
                                                               while ($row = $query->fetch()){ ?>
                                                            <option value="<?php echo $row['id_ste']?>">
                                                                <?php echo $row['nom_ste']?></option>
                                                            <?php
                                                        }?>
                                                        </select>
                                                        <label for="selectLarge">Evenements</label>
                                                        <select class="form-control form-control-lg mb-1" id="ste_add_events">
                                                            <option selected="">Select Evenements</option>
                                                            <?php
                                                               $query = $db->query('SELECT nom_event,id_event FROM Events');
                                                               while ($row = $query->fetch()){ ?>
                                                            <option value="<?php echo $row['id_event']?>">
                                                                <?php echo $row['nom_event']?></option>
                                                            <?php
                                                        }?>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" onclick="addstand()">Ajouter</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


            </div>
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <!--<div class="row match-height" id="parentste">
                    <div class="col-xl-3 col-md-5 col-11">
                        <div class="form-group">
                            <label for="selectLarge">Société</label>
                            <select class="form-control form-control-lg mb-1" id="selectste">
                                <option selected="">Select Stand</option>
                                <?php
                                    $int = (int)$_REQUEST['idevent'];
                                    $query = $db->query('select stand.nom_stand,stand.id_stand from stand,Events where stand.id_events=Events.id_event and Events.id_event='.$int);
                                        while ($row = $query->fetch()){ ?>
                                            <option value="<?php echo $row['id_stand']?>"><?php echo $row['nom_stand']?></option>
                                            <?php
                                        }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>-->


                <?php  if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'visitor') {?>


                <div class="row match-height" id="standdiv">
                    <!-- Medal Card -->
                    <?php
                        //$int = (int)$_REQUEST['idevent'];

                        //$query = $db->query('SELECT societe.*,stand.etat_stand,stand.id_stand from stand,Events,societe where societe.id_ste=stand.id_ste  and stand.id_events=Events.id_event and Events.id_event='.$int);

                        $query = $db->query('SELECT societe.*,stand.etat_stand,stand.id_stand from stand,Events,societe where societe.id_ste=stand.id_ste  and stand.id_events=Events.id_event;');


                            while ($row = $query->fetch()){ ?>

                    <div class="col-xl-4 col-md-6 col-12" id="standdetail<?php echo $row['id_stand']?>">
                        <?php
                            if($row['etat_stand']==0){
                          ?>
                        <div class="card card-congratulation-medal" style="pointer-events:none;opacity:0.4"
                            id="card-block<?php echo $row['id_stand']?>">
                            <?php
                            }
                            else{
                                ?>
                            <div class="card card-congratulation-medal" id="card-block<?php echo $row['id_stand']?>">
                                <?php
                            }
                        ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <?php if ($row['image_ste'] != '') {?>

                                                <img class="round" style="border-radius:7.5rem;border: 1px solid;"
                                                src="app-assets/images/company/logo/<?php echo $row['image_ste']?>"
                                                alt="avatar" height="100" width="100" />

                                            <?php }else{ ?>

                                                <img class="round" style="border-radius:7.5rem;border: 1px solid;"
                                                src="app-assets/images/company/logo/logo_default.png"
                                                alt="avatar" height="100" width="100" />
                                             <?php  } ?>
                                            

                                        </div>
                                        <div class="col-md-8" id="section-block<?php echo $row['id_ste']?>">
                                            <h5 style="width: auto;text-align: left;">
                                                <?php echo $row['nom_ste']?>
                                            </h5><br>

                                            <p class="card-text font-small-3" style="width:auto">
                                                <?php echo $row['description_ste']?></p>
                                        </div>
                                    </div>
                                </div>

                                <?php  if ($_SESSION['role'] == 'admin') {?>

                                    <footer class="footer footer-static footer-light" style="text-align:right;margin-left: 0;">
                                        <!--<a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top" title="Sauvegarder">
                                            <i id="save<?php echo $row['id_ste']?>"
                                                onclick="updateDescript(<?php echo $row['id_ste']?>)" data-feather='save'
                                                style="display:none;width:20px;height:20px;cursor:pointer;"></i>
                                        </a>-->

                                        <a style="margin-right: 3%; color: #6E6B7B;"" data-toggle="tooltip" data-placement="top" title="Modifier" href="update_stand.php?id=<?php echo $row['id_stand']?>">
                                            <i data-feather='edit-2' style="width:20px;height:20px;cursor:pointer;"></i>
                                        </a>

                                        <a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top" title="Produits" href="products.php?id_user=<?php echo $row['id_user']?>">
                                            <i data-feather='shopping-cart' style="width:20px;height:20px;"></i>
                                        </a>

                                        <a style="margin-right: 3%; color: #6E6B7B;" class="btn-card-block-multiple" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                            <i data-feather='trash-2' style="width:20px;height:20px;"></i>
                                        </a>

                                    </footer>

                                 <?php }elseif ($_SESSION['role'] == 'visitor') { ?>

                                    <footer class="footer footer-static footer-light" style="text-align:right;margin-left: 0;">

                                        <a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top" title="Produits">
                                            <i data-feather='shopping-cart' style="width:20px;height:20px;"></i>
                                        </a>


                                    </footer>

                                 <?php } ?>

                                <!--<footer class="footer footer-static footer-light"
                                    style="text-align:right;margin-left: 0;">
                                    <a style="margin-right: 3%;" id="btnoverlay<?php echo $row['id_ste']?>"
                                        data-toggle="tooltip" data-placement="top" title="Sauvegarder">
                                        <i id="save<?php echo $row['id_ste']?>"
                                            onclick="updateDescript(<?php echo $row['id_ste']?>)" data-feather='save'
                                            style="display:none;width:20px;height:20px;cursor:pointer;"></i>
                                    </a>

                                    <a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top"
                                        title="Modifier">
                                        <i data-feather='edit-2' onclick="modifyDescript(<?php echo $row['id_ste']?>)"
                                            style="width:20px;height:20px;cursor:pointer;"></i>
                                    </a>
                                    <a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top"
                                        title="Produits"><i data-feather='shopping-cart'
                                            style="width:20px;height:20px;"></i></a>
                                    <a id="btncardover<?php echo $row['id_stand']?>" style="margin-right: 3%;"
                                        class="btn-card-block-multiple" data-toggle="tooltip" data-placement="top"
                                        title="Supprimer">
                                        <i data-feather='trash-2' onclick="deletestand(<?php echo $row['id_stand']?>)"
                                            style="width:20px;height:20px;"></i></a>

                                </footer>-->

                            </div>
                        </div>

                        <?php }?>



                        <!--/ Medal Card -->

                    </div>


                    <?php }elseif ($_SESSION['role'] == 'exposant') { ?>



                    <div class="row match-height" id="standdiv">
                    <!-- Medal Card -->
                    <?php
                        //$int = (int)$_REQUEST['idevent'];

                        //$query = $db->query('SELECT societe.*,stand.etat_stand,stand.id_stand from stand,Events,societe where societe.id_ste=stand.id_ste  and stand.id_events=Events.id_event and Events.id_event='.$int);

                        $id_user = $_SESSION['id_compte'];

                        $query = $db->query('SELECT societe.*,stand.etat_stand,stand.id_stand from stand,Events,societe where societe.id_ste=stand.id_ste  and stand.id_events=Events.id_event and societe.id_user ='.$id_user);


                            while ($row = $query->fetch()){ ?>

                    <div class="col-xl-4 col-md-6 col-12" id="standdetail<?php echo $row['id_stand']?>">
                        <?php
                            if($row['etat_stand']==0){
                          ?>
                        <div class="card card-congratulation-medal" style="pointer-events:none;opacity:0.4"
                            id="card-block<?php echo $row['id_stand']?>">
                            <?php
                            }
                            else{
                                ?>
                            <div class="card card-congratulation-medal" id="card-block<?php echo $row['id_stand']?>">
                                <?php
                            }
                        ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <?php if ($row['image_ste'] != '') {?>

                                                <img class="round" style="border-radius:7.5rem;border: 1px solid;"
                                                src="app-assets/images/company/logo/<?php echo $row['image_ste']?>"
                                                alt="avatar" height="100" width="100" />

                                            <?php }else{ ?>

                                                <img class="round" style="border-radius:7.5rem;border: 1px solid;"
                                                src="app-assets/images/company/logo/logo_default.png"
                                                alt="avatar" height="100" width="100" />
                                             <?php  } ?>
                                            

                                        </div>
                                        <div class="col-md-8" id="section-block<?php echo $row['id_ste']?>">
                                            <h5 style="width: auto;text-align: left;">
                                                <?php echo $row['nom_ste']?>
                                            </h5><br>

                                            <p class="card-text font-small-3" style="width:auto">
                                                <?php echo $row['description_ste']?></p>
                                        </div>
                                    </div>
                                </div>

                                <footer class="footer footer-static footer-light" style="text-align:right;margin-left: 0;">
                                    <!--<a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top" title="Sauvegarder">
                                        <i id="save<?php echo $row['id_ste']?>"
                                            onclick="updateDescript(<?php echo $row['id_ste']?>)" data-feather='save'
                                            style="display:none;width:20px;height:20px;cursor:pointer;"></i>
                                    </a>-->

                                    <a style="margin-right: 3%; color: #6E6B7B;"" data-toggle="tooltip" data-placement="top" title="Modifier" href="update_stand.php?id=<?php echo $row['id_stand']?>">
                                        <i data-feather='edit-2' style="width:20px;height:20px;cursor:pointer;"></i>
                                    </a>

                                    <a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top" title="Produits">
                                        <i data-feather='shopping-cart' style="width:20px;height:20px;"></i>
                                    </a>

                                    <a style="margin-right: 3%; color: #6E6B7B;" class="btn-card-block-multiple" data-toggle="tooltip" data-placement="top" title="Supprimer">
                                        <i data-feather='trash-2' style="width:20px;height:20px;"></i>
                                    </a>

                                </footer>


                                <!--<footer class="footer footer-static footer-light"
                                    style="text-align:right;margin-left: 0;">
                                    <a style="margin-right: 3%;" id="btnoverlay<?php echo $row['id_ste']?>"
                                        data-toggle="tooltip" data-placement="top" title="Sauvegarder">
                                        <i id="save<?php echo $row['id_ste']?>"
                                            onclick="updateDescript(<?php echo $row['id_ste']?>)" data-feather='save'
                                            style="display:none;width:20px;height:20px;cursor:pointer;"></i>
                                    </a>

                                    <a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top"
                                        title="Modifier">
                                        <i data-feather='edit-2' onclick="modifyDescript(<?php echo $row['id_ste']?>)"
                                            style="width:20px;height:20px;cursor:pointer;"></i>
                                    </a>
                                    <a style="margin-right: 3%;" data-toggle="tooltip" data-placement="top"
                                        title="Produits"><i data-feather='shopping-cart'
                                            style="width:20px;height:20px;"></i></a>
                                    <a id="btncardover<?php echo $row['id_stand']?>" style="margin-right: 3%;"
                                        class="btn-card-block-multiple" data-toggle="tooltip" data-placement="top"
                                        title="Supprimer">
                                        <i data-feather='trash-2' onclick="deletestand(<?php echo $row['id_stand']?>)"
                                            style="width:20px;height:20px;"></i></a>

                                </footer>-->

                            </div>
                        </div>

                        <?php }?>



                        <!--/ Medal Card -->

                    </div>

                     <?php } ?>

            </section>
            <!-- Dashboard Ecommerce ends -->
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
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/components/components-tooltips.js"></script>
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
     

    function succesoverlay(idover) {
        var section = $('#section-block' + idover),
            sectionBlockMultiple = $('#btnoverlay' + idover);
        if (sectionBlockMultiple.length && section.length) {

            section.block({
                message: '<div class="d-flex justify-content-center align-items-center"><p class="mr-50 mb-0">Please wait...</p> <div class="spinner-grow spinner-grow-sm text-white" role="status"></div>',
                css: {
                    backgroundColor: 'transparent',
                    color: '#fff',
                    border: '0'
                },
                overlayCSS: {
                    opacity: 0.5
                },
                timeout: 1000,
                onUnblock: function() {
                    section.block({
                        message: '<p class="mb-0">Almost Done...</p>',
                        timeout: 1000,
                        css: {
                            backgroundColor: 'transparent',
                            color: '#fff',
                            border: '0'
                        },
                        overlayCSS: {
                            opacity: 0.25
                        },
                        onUnblock: function() {
                            section.block({
                                message: '<div class="p-1 bg-success">Success</div>',
                                timeout: 500,
                                css: {
                                    backgroundColor: 'transparent',
                                    color: '#fff',
                                    border: '0'
                                },
                                overlayCSS: {
                                    opacity: 0.25
                                }
                            });
                        }
                    });
                }
            });
        }
    }

    function deleteoverlay(iddeleteover) {

        var cardSection = $('#card-block' + iddeleteover),
            cardBlockMultiple = $('#btncardover' + iddeleteover);
        if (cardBlockMultiple.length && cardSection.length) {
            cardSection.block({
                message: '<div class="d-flex justify-content-center align-items-center"><p class="mr-50 mb-0">Please wait...</p> <div class="spinner-grow spinner-grow-sm text-white" role="status"></div> </div>',
                css: {
                    backgroundColor: 'transparent',
                    color: '#fff',
                    border: '0'
                },
                overlayCSS: {
                    opacity: 0.5
                },
                timeout: 1000,
                onUnblock: function() {
                    cardSection.block({
                        message: '<p class="mb-0">Almost Done...</p>',
                        timeout: 1000,
                        css: {
                            backgroundColor: 'transparent',
                            color: '#fff',
                            border: '0'
                        },
                        overlayCSS: {
                            opacity: 0.25
                        },
                        onUnblock: function() {
                            cardSection.block({
                                message: '<div class="p-1 bg-success">Success</div>',
                                timeout: 500,
                                css: {
                                    backgroundColor: 'transparent',
                                    color: '#fff',
                                    border: '0'
                                },
                                overlayCSS: {
                                    opacity: 0.25
                                }
                            });
                        }
                    });
                }
            });
        }
    }
    //Recherche
    $('#selectste').on('change', function() {
        console.log('ok');
        if ($("#selectste option:selected").text() == "Select Stand") {
            $('.col-xl-4').show(1000, "linear");
        } else {
            $('.col-xl-4').show(50, "linear");
            $('.col-xl-4').not("#standdetail" + this.value).hide(1000, "linear");
        }

    });

    //************OPeration base donnee*******************/
    function modifyDescript(id) 
{
    var olddescript = document.getElementById('descriptste' + id);
    var newdescript = document.getElementById('stedescript' + id);
    var savedescript = document.getElementById('save' + id);

    newdescript.value = olddescript.innerHTML;
    olddescript.style.display = "none";
    newdescript.style.display = "block";
    savedescript.style.display = "";
}

function updateDescript(id) {
    var descript = document.getElementById('stedescript' + id).value;
    $.ajax({
        type: "POST",
        url: 'util/ClassUtile/stand.php',
        dataType: 'json',
        data: {
            operation: 'update',
            description: descript,
            idsociete: id
        },
        success: function(result) {
            //console.log(result.abc);
            succesoverlay(id);
            var olddescript = document.getElementById('descriptste' + id);
            var newdescript = document.getElementById('stedescript' + id);
            var savedescript = document.getElementById('save' + id);

            olddescript.innerHTML = newdescript.value;
            olddescript.style.display = "block";
            newdescript.style.display = "none";
            savedescript.style.display = "none";
        },
        error: function(request, status, error) {
            //alert(request.responseText);
        }


    });
}

function deletestand(id) {
    var cardblock = document.getElementById('card-block' + id);
    $.ajax({
        type: "POST",
        url: 'util/ClassUtile/stand.php',
        dataType: 'json',
        data: {
            operation: 'delete',
            idstand: id
        },
        success: function(result) {
            deleteoverlay(id);
            cardblock.style.pointerEvents="none";
            cardblock.style.opacity="0.4";
        },
        error: function(request, status, error) {
            alert(request.responseText);
        }


    });
}

function addstand() 
{
    var namestand,stestand,eventstand;
    name_stand=document.getElementById('name_stand').value;
    ste_stand=document.getElementById('ste_add').value;
    event_stand=document.getElementById('ste_add_events').value;
    $.ajax({
        type: "POST",
        url: 'util/ClassUtile/stand.php',
        dataType: 'json',
        data: {
            operation: 'insert',
            namestand: name_stand,
            stestand:ste_stand,
            eventstand:event_stand
        },
        success: function(result) {
            
        },
        error: function(request, status, error) {
            alert(request.responseText);
        }
    });
}
    </script>


</body>
<!-- END: Body-->

</html>