<?php /******** Connect Base  ********/
    include("util/DatabasConfig/config.php"); 
/********End Header**********/

$d = false;
$show="";


if(isset($_POST['B1'])){


   // if(isset($_POST['email']) && isset($_POST['password'])){

        //echo $_POST['email'];die();


       $stmt = $db->query('SELECT login FROM compte');

        while ($row = $stmt->fetch()){ 

           //echo $_POST['email'];die();

            if((strcmp($row[0],$_POST['email'])==0)){
               $d = true;
            }
        }

        if($d == true){
           // echo "not OK";die();

            $show="style='display:block;'"; 
        }else{
            //echo "OK";die();


            $name = $_POST["username"];    
            $email = $_POST["email"]; 
            $password = $_POST["password"];
            $role = 'visitor';

            $sql = "INSERT INTO user (Nom, email) VALUES (?,?)";
            $stmt_= $db->prepare($sql);
            $stmt_->execute([$name, $email]);



            $stmt1 = $db->prepare("SELECT id_user, email from user where email =?");
            $stmt1->execute([$email]); 
            $user = $stmt1->fetch();

            //echo $user[0]; die();


            $sql1 = "INSERT INTO compte (id_user, login, password, role) VALUES (?,?,?,?)";
            $stmt2= $db->prepare($sql1);
            $stmt2->execute([$user[0], $email, $password, $role]);

            /*while ($row1 = $stmt1->fetch()){ 

                $sql1 = "INSERT INTO compte (id_user, login, password, role) VALUES (?,?,?,?)";
                $stmt2= $db->prepare($sql1);
                $stmt2->execute([$row1[0], $email, $password, $role]);

            }*/

            echo '<script language="Javascript"> alert("Your account has been added")</script>';

            echo '<script language="Javascript"> document.location.replace("http://businessandfairs.com/AppWeb/index.php");</script>';
        //}
    } 
}

?>



<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Page - Events</title>
    <link rel="apple-touch-icon" href="https://businessandfairs.com/wp-content/uploads/2020/12/FAVICON-LOW.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://businessandfairs.com/wp-content/uploads/2020/12/FAVICON-LOW.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <style type="text/css">
        .message{
            display: none;
        }
    </style>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                         <!-- Login-->
                        <div class="d-flex col-lg-5 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <center>
                                    <img src="app-assets/images/bfImages/logo/LogoSmall.svg" width="200px"></h4>
                                </center><br>
                                <p class="card-text mb-2 text-center">Hey there! Let's get started.</p>
                                <form class="auth-register-form mt-2" action="register.php" method="POST" novalidate="novalidate">
                                    <div class="form-group">
                                        <label class="form-label" for="register-username">Name</label>
                                        <input class="form-control" id="register-username" type="text" name="username" placeholder="your name" aria-describedby="register-username" autofocus="" tabindex="1" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-email">E-mail</label>
                                        <input class="form-control" id="register-email" type="email" name="email" placeholder="name@example.com" aria-describedby="register-email" tabindex="2" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="register-password" type="password" name="password" placeholder="············" aria-describedby="register-password" tabindex="3" required="required">

                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="register-privacy-policy" type="checkbox" tabindex="4" required="required">
                                            <label class="custom-control-label" for="register-privacy-policy">I agree to<a href="javascript:void(0);">&nbsp;privacy policy &amp; terms</a></label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block waves-effect waves-float waves-light" tabindex="5" type="submit" name="B1">Sign up</button>
                                </form>

                                <div class="demo-spacing-0 message" <?php echo $show; ?> >
                                    <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                                        <div class="alert-body">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info mr-50 align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                            <span>Your email already exists.</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="text-center mt-2"><span>Existing User?</span><a href="index.php"><span>Sign in</span></a></p>
                            </div>
                        </div>
                        <!-- /Login-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-7 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="app-assets/images/pages/register-v2.svg" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-auth-login.js"></script>
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