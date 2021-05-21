<?php

  /******** Connect Base  ********/
   include("util/DatabasConfig/config.php"); 
  /********End Header**********/  

  $poids_max = 512000; // Poids max de l'image en octets (1Ko = 1024 octets)
  $repertoire = 'app-assets/images/company/affiche/'; // Repertoire d'upload
  //var_dump(isset($_FILES['fichier']));exit();


  if (isset($_FILES['fichier_aff1']) and isset($_FILES['fichier_aff2']))
  {
    //var_dump("OK");

      if ($_FILES['fichier_aff1']['type'] == 'image/jpeg') { $extention = '.jpeg'; }
      if ($_FILES['fichier_aff1']['type'] == 'image/jpeg') { $extention = '.jpg'; }
      if ($_FILES['fichier_aff1']['type'] == 'image/png') { $extention = '.png'; }
      if ($_FILES['fichier_aff1']['type'] == 'image/gif') { $extention = '.gif'; }

      if ($_FILES['fichier_aff2']['type'] == 'image/jpeg') { $extention_ = '.jpeg'; }
      if ($_FILES['fichier_aff2']['type'] == 'image/jpeg') { $extention_ = '.jpg'; }
      if ($_FILES['fichier_aff2']['type'] == 'image/png') { $extention_ = '.png'; }
      if ($_FILES['fichier_aff2']['type'] == 'image/gif') { $extention_ = '.gif'; }


      if ($_FILES['fichier_pdf1']['type'] == 'image/pdf') { $extention__ = '.pdf'; }
      if ($_FILES['fichier_pdf2']['type'] == 'image/pdf') { $extention___ = '.pdf'; }


      $nom_fichier = time().$extention;
      $nom_fichier_ = 'pic2'.time().$extention_;
      $nom_fichier1 = 'pdf1'.time().'.pdf';
      $nom_fichier1_ = 'pdf2'.time().'.pdf';

      //var_dump($nom_fichier, $nom_fichier_);die();

      if (move_uploaded_file($_FILES['fichier_aff1']['tmp_name'], $repertoire.$nom_fichier) and move_uploaded_file($_FILES['fichier_aff2']['tmp_name'], $repertoire.$nom_fichier_) and move_uploaded_file($_FILES['fichier_pdf1']['tmp_name'], $repertoire.$nom_fichier1) and move_uploaded_file($_FILES['fichier_pdf2']['tmp_name'], $repertoire.$nom_fichier1_))
      {
       if(isset($_POST['B1'])){


            $id=$_POST['id'];
            $img_file_1 = $nom_fichier ; 
            $pdf_file_1 = $nom_fichier1 ;
            $img_file_2 = $nom_fichier_ ; 
            $pdf_file_2 = $nom_fichier1_ ; 
            $video = $_POST['video'] ; 


            $sql = "UPDATE stand SET img_file_1=?, pdf_file_1=?, img_file_2=?, pdf_file_2=?,  video=? WHERE id_stand=?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$img_file_1, $pdf_file_1, $img_file_2, $pdf_file_2, $video, $id]);

            echo '<script language="Javascript"> alert("Stand a été modifier")</script>';

            echo '<script language="Javascript"> document.location.replace("http://businessandfairs.com/Events/stands.php");</script>';
            
      }   

    }
    else
    {
      echo 'L\'image n\'a pas pu être uploadée sur le serveur.';
    }
 }

?>

<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Modifier Stand -  Events </title>
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
                            <h2 class="content-header-title float-left mb-0">Stand</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Modifier Stand 
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
                $id_stand = $_GET['id'];

                //var_dump($id_event);die();

                $stmt = $db->query('SELECT * from stand where id_stand='.$id_stand);

                while ($row = $stmt->fetch()){ ?>
 
                <div class="row">      
                    <div class="col-12"> 
                        <form method="post" action="update_stand.php" enctype="multipart/form-data">


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Affiche 1 : </label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="hidden" name="id" value="<?php echo $row['id_stand'];?>">
                                            <input type="file" class="custom-file-input" id="customFile" name="fichier_aff1" />
                                            <label class="custom-file-label" for="customFile">Choisir fichier</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->

                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">PDF 1 : </label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="hidden" name="id" value="<?php echo $row['id_stand'];?>">
                                            <input type="file" class="custom-file-input" id="customFile" name="fichier_pdf1" />
                                            <label class="custom-file-label" for="customFile">Choisir fichier</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->

                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Affiche 2 : </label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="fichier_aff2" />
                                            <label class="custom-file-label" for="customFile">Choisir fichier</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->

                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">PDF 2 : </label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" name="fichier_pdf2" />
                                            <label class="custom-file-label" for="customFile">Choisir fichier</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ input -->


                            <!-- input -->
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Lien Video : </label>
                                    <div class="col-sm-8">
                                        <input type="text" id="fp-default" class="form-control" name="video" placeholder="" value="<?php echo $row['video'];?>" />
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