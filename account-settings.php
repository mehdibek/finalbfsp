<?php

  /******** Connect Base  ********/
   include("util/DatabasConfig/config.php"); 
  /********End Header**********/  

  $poids_max = 512000; // Poids max de l'image en octets (1Ko = 1024 octets)
  $repertoire = 'app-assets/images/portrait/small/'; // Repertoire d'upload
  //var_dump(isset($_FILES['fichier']));exit();


  if (isset($_FILES['fichier']))
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
      {
       if(isset($_POST['B1'])){


            $id=$_POST['id'];
            $nom = $_POST["nom"] ; 
            $prenom = $_POST["prenom"] ;
            $image = $nom_fichier ; 
            $email = $_POST["email"] ; 
            $tel = $_POST["tel"] ; 
            $desc = $_POST["desc"] ; 


            $sql = "UPDATE user SET Nom=?, prenom=?, imgprofil=? , adress=?, tel=? , email=?  WHERE id_user=?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$nom, $prenom, $image, $desc, $tel, $email, $id]);

            echo '<script language="Javascript"> alert("Compte a été modifier")</script>';

            echo '<script language="Javascript"> document.location.replace("http://businessandfairs.com/Events/account-settings.php");</script>';
            
      }   

    }
    else
    {
      echo 'L\'image n\'a pas pu être uploadée sur le serveur.';
    }

 }else{

    if(isset($_POST['B1'])){

            $id=$_POST['id'];
            $nom = $_POST["nom"] ; 
            $prenom = $_POST["prenom"] ;
            $email = $_POST["email"] ; 
            $tel = $_POST["tel"] ; 
            $desc = $_POST["desc"] ; 


            $sql = "UPDATE user SET Nom=?, prenom=? , adress=?, tel=? , email=?  WHERE id_user=?";
            $stmt= $db->prepare($sql);
            $stmt->execute([$nom, $prenom, $desc, $tel, $email, $id]);

            echo '<script language="Javascript"> alert("Compte a été modifier")</script>';

            echo '<script language="Javascript"> document.location.replace("http://businessandfairs.com/Events/account-settings.php");</script>';
            
      }elseif (isset($_POST['B2'])) {



        if(isset($_POST['password'])){

             

            $id_= $_POST["id_"];
            $d = false;
            $show="";
            $notshow="";
            $nav="";
            $old_password = $_POST['password'];
            $new_password = $_POST["new-password"];
            $new_password1 = $_POST["confirm-new-password"];

            //echo $old_password;
            //echo $new_password;
            //echo $new_password1;
            //die();


            $stmt = $db->query('SELECT login, password, role, id_compte FROM compte where id_compte ='.$id_);

            while ($row = $stmt->fetch()){ 
                if((strcmp($row[1], $_POST['password'])==0) && (strcmp($new_password, $new_password1)==0)){
                    $d = true;
                }

            }

            if($d == false){
                $show="style='display:block;'"; 
                //$notshow="style='display:none;'"; 
                //$nav = "active show";

            }else{

                $sql = "UPDATE compte SET password=? WHERE id_compte=?";
                $stmt= $db->prepare($sql);
                $stmt->execute([$new_password, $id_]);

               echo '<script language="Javascript"> alert("Mot de passe a été modifier")</script>';
               echo '<script language="Javascript"> document.location.replace("account-settings.php");</script>';
            }

        }
        
          
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
  <title>Setting account  -  Events </title>

  <style type="text/css">
      .message{
        display: none;
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
                            <h2 class="content-header-title float-left mb-0">Account Settings</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Account Settings
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
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="content-body">
                <!-- account setting page -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column nav-left">
                                <!-- general -->
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i data-feather="user" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">General</span>
                                    </a>
                                </li>
                                <!-- change password -->
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $nav; ?>" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                        <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Change Password</span>
                                    </a>
                                </li>
                                <!-- information 
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                                        <i data-feather="info" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Information</span>
                                    </a>
                                </li>
                                <!-- social
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-social" data-toggle="pill" href="#account-vertical-social" aria-expanded="false">
                                        <i data-feather="link" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Social</span>
                                    </a>
                                </li> -->
                                <!-- notification 
                                <li class="nav-item">
                                    <a class="nav-link" id="account-pill-notifications" data-toggle="pill" href="#account-vertical-notifications" aria-expanded="false">
                                        <i data-feather="bell" class="font-medium-3 mr-1"></i>
                                        <span class="font-weight-bold">Notifications</span>
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                        <!--/ left menu section -->


                        <?php 
                            $id_user = $_SESSION['id_compte'];

                            //echo $id_user;

                            $stmt = $db->query('SELECT user.*, compte.id_compte, compte.id_user from user, compte where user.id_user = compte.id_user and  compte.id_compte ='.$id_user);


                            while ($row = $stmt->fetch()){ ?>
                                                

                                <!-- right content section -->
                                <div class="col-md-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <!-- general tab -->
                                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true" <?php echo $notshow;?>>
                                                    <!-- form -->
                                                    <form class="" method="post" action="account-settings.php" enctype="multipart/form-data">

                                                        <!-- header media -->
                                                        <div class="media">
                                                            <?php if($row['imgprofil'] != '') {?>
                                                                    <a href="javascript:void(0);" class="mr-25">
                                                                        <img src="app-assets/images/portrait/small/<?php echo $row['imgprofil']?>" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                                    </a>
                                                                <?php }else{ ?>
                                                                    <a href="javascript:void(0);" class="mr-25">
                                                                        <img src="app-assets/images/portrait/small/user_profil.png" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                                    </a>
                                                                <?php } ?> 
                                                            <!-- upload and reset button -->

                                                            <div class="media-body mt-75 ml-1">
                                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                                <input type="file" id="account-upload" hidden accept="image/*"  name="fichier"/>
                                                                <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                                                <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                                                            </div>
                                                            <!--/ upload and reset button -->
                                                        </div>
                                                        <!--/ header media -->

                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-username">Nom</label>
                                                                    <input type="hidden" name="id" value="<?php echo $row['id_user'];?>">
                                                                    <input type="text" class="form-control" id="account-username" name="nom" placeholder="Username" value="<?php echo $row['Nom'];?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-name">Prénom</label>
                                                                    <input type="text" class="form-control" id="account-name" name="prenom" placeholder="Name" value="<?php echo $row['prenom'];?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-e-mail">E-mail</label>
                                                                    <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="<?php echo $row['email'];?>" readonly/>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-birth-date">Téléphone</label>
                                                                    <input type="text" class="form-control" placeholder="votre telephone" id="account-birth-date" name="tel" value="<?php echo $row['tel'];?>" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="account-birth-date">Adresse</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3" value="<?php echo $row['adress'];?>"></textarea>
                                                                </div>
                                                            </div>


                                                            <!--<div class="col-12 mt-75">
                                                                <div class="alert alert-warning mb-50" role="alert">
                                                                    <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4>
                                                                    <div class="alert-body">
                                                                        <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary mt-2 mr-1" name="B1" >Save changes</button>
                                                                <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ general tab -->

                                                <!-- change password -->
                                                <div class="tab-pane fade <?php echo $nav; ?>" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                    <!-- form -->
                                                     <form class="" method="post" action="account-settings.php" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-old-password">Old Password</label>
                                                                    <div class="input-group form-password-toggle input-group-merge">
                                                                        <input type="hidden" name="id_" value="<?php echo $id_user;?>">
                                                                        <input type="password" class="form-control" id="account-old-password" name="password" placeholder="Old Password" />
                                                                        <div class="input-group-append">
                                                                            <div class="input-group-text cursor-pointer">
                                                                                <i data-feather="eye"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-new-password">New Password</label>
                                                                    <div class="input-group form-password-toggle input-group-merge">
                                                                        <input type="password" id="account-new-password" name="new-password" class="form-control" placeholder="New Password" />
                                                                        <div class="input-group-append">
                                                                            <div class="input-group-text cursor-pointer">
                                                                                <i data-feather="eye"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-retype-new-password">Retype New Password</label>
                                                                    <div class="input-group form-password-toggle input-group-merge">
                                                                        <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="New Password" />
                                                                        <div class="input-group-append">
                                                                            <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary mr-1 mt-1" name="B2">Save changes</button>
                                                                <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <div class="demo-spacing-0 message" <?php echo $show; ?> >
                                                        <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                                            <div class="alert-body">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info mr-50 align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                                                <span>Password <strong>invalid</strong> or Two Password not equal.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ change password -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ right content section -->

                             <?php } ?>  
                    </div>
                </section>
                <!-- / account setting page -->

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
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-account-settings.js"></script>
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