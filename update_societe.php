<?php

  /******** Connect Base  ********/
   include("util/DatabasConfig/config.php"); 
  /********End Header**********/  

  $poids_max = 512000; // Poids max de l'image en octets (1Ko = 1024 octets)
  $repertoire = 'app-assets/images/company/logo/'; // Repertoire d'upload
  //var_dump(isset($_FILES['fichier']));exit();


 /* if (isset($_FILES['fichier']))
  {
    //var_dump("OK");

      if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpeg'; }
      if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpg'; }
      if ($_FILES['fichier']['type'] == 'image/png') { $extention = '.png'; }
      if ($_FILES['fichier']['type'] == 'image/gif') { $extention = '.gif'; }
      $nom_fichier = time().$extention;

      //var_dump($nom_fichier);die();
  // 
      if (move_uploaded_file($_FILES['fichier']['tmp_name'], $repertoire.$nom_fichier))
      {*/
       if(isset($_POST['B1'])){


            $id=$_POST['id'];
            $name = $_POST["nom_societe"] ; 
            $desc = $_POST["desc"] ;
            $image = $nom_fichier ; 
            $website = $_POST["website"] ; 
            $facebook = $_POST["facebook"] ; 
            $instagram = $_POST["instagram"] ; 


            $sql = "UPDATE societe SET nom_ste=?, description_ste=? , site_url=?, insta_url=? , face_url=?  WHERE id_ste=?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$name, $desc, $website, $facebook, $instagram, $id]);

            echo '<script language="Javascript"> alert("Société a été modifier")</script>';

            echo '<script language="Javascript"> document.location.replace("http://businessandfairs.com/Events/company.php");</script>';
            
      }   

   /* }
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
  <title>Modifier Société -  Events </title>
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
                            <h2 class="content-header-title float-left mb-0">Société</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Modifier une Société 
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


            <?php 
                $id_societe = $_GET['id'];

                //var_dump($id_event);die();

                $stmt = $db->query('SELECT * from societe where id_ste='.$id_societe);

                while ($row = $stmt->fetch()){ ?>
 
                <div class="row">      
                    <div class="col-12"> 
                        <form method="post" action="update_societe.php" enctype="multipart/form-data">
                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Nom Société : </label>
                                    <div class="col-sm-8">
                                        <input type="hidden" name="id" value="<?php echo $row['id_ste'];?>">
                                        <input type="text" class="form-control" id="colFormLabel" placeholder="" name="nom_societe" value="<?php echo $row['nom_ste'];?>" />
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Description : </label>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" value="<?php echo $row['description_ste'];?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Logo Société : </label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="fichier" />
                                            <label class="custom-file-label" for="customFile">Choisir fichier</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Site Web : </label>
                                    <div class="col-sm-8">
                                        <input type="text" id="fp-default" class="form-control" name="website" placeholder="" value="<?php echo $row['site_url'];?>" />
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">URL Facebook : </label>
                                    <div class="col-sm-8">
                                        <input type="text" id="fp-default" class="form-control" name="facebook" placeholder="" value="<?php echo $row['face_url'];?>" />
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->

                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">URL Instagram : </label>
                                    <div class="col-sm-8">
                                        <input type="text" id="fp-default" class="form-control " name="instagram" placeholder="" value="<?php echo $row['insta_url'];?>" />
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->

                            <button class="btn btn-primary" type="submit" name="B1">Modifier</button>
                        </form>
                    </div>
                </div>

            <?php } ?>  
            
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