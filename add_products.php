<?php

  /******** Connect Base  ********/
   include("util/DatabasConfig/config.php"); 
  /********End Header**********/  

  $poids_max = 512000; // Poids max de l'image en octets (1Ko = 1024 octets)
  $repertoire = 'app-assets/images/products/'; // Repertoire d'upload
  //var_dump(isset($_FILES['fichier']));exit();

  if (isset($_FILES['fichier']))
  {

      if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpeg'; }
      if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpg'; }
      if ($_FILES['fichier']['type'] == 'image/png') { $extention = '.png'; }
      if ($_FILES['fichier']['type'] == 'image/gif') { $extention = '.gif'; }
      $nom_fichier = time().$extention;

      //var_dump($nom_fichier);die();
  // 
      if (move_uploaded_file($_FILES['fichier']['tmp_name'], $repertoire.$nom_fichier))
      {
       if(isset($_POST['B1'])){

            $expo = $_POST["expo"] ;    
            $image = $nom_fichier ; 
            $nom_prd = $_POST["nom_prd"] ; 
            $desc = $_POST["desc"] ; 
            $prix = $_POST["prix"] ; 


            $sql = "INSERT INTO products (id_user, img_prd, nom_prd, description, prix) VALUES (?,?,?,?,?)";
            $stmt= $db->prepare($sql);
            $stmt->execute([$expo, $image, $nom_prd, $desc, $prix]);

            echo '<script language="Javascript"> alert("Produits a été ajouter")</script>';

            echo '<script language="Javascript"> document.location.replace("http://businessandfairs.com/Events/products.php");</script>';
            
      }   

    }
    else
    {
      echo 'L\'image n\'a pas pu être uploadée sur le serveur.';
    }
 }
//}

?>


<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Ajouter Produit  -  Events </title>

  <style type="text/css">
      .message{
        display: none;
      }
  </style>
</head>

    <!-- BEGIN: Content-->
    
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Produits</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Ajouter un Produits 
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
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

                <div class="row">      
                    <div class="col-12"> 
                        <form method="post" action="add_products.php" enctype="multipart/form-data">



                            <?php  if ($_SESSION['role'] == 'admin') {?>


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Exposant : </label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-lg mb-1" id="selectste" name="expo">
                                            <option selected="">Select Exposant</option>
                                            <?php
                                                $query = $db->query('select * from societe');
                                                    while ($row = $query->fetch()){ ?>
                                                        <option value="<?php echo $row['id_user']?>"><?php echo $row['nom_ste']?></option>
                                                        <?php
                                                    }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <?php }elseif ($_SESSION['role'] == 'exposant') { ?>

                            <input type="hidden" name="expo" value="<?php echo $_SESSION['id_compte']; ?>">

                            <?php } ?>


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Nom Produits : </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="nom_prd" />
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->

                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Description : </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->

                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Image Produit : </label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="fichier"/>
                                            <label class="custom-file-label" for="customFile">Choisir fichier</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Prix : </label>
                                    <div class="col-sm-8">
                                        <input type="text" id="fp-default" class="form-control" name="prix" placeholder="Prix" />
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <button class="btn btn-primary" type="submit" name="B1">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

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