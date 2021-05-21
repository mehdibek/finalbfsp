<?php session_start();
 if(isset($_SESSION['login'])){
    
}else{
    header("Location:index.php");
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
    <link rel="apple-touch-icon" href="https://businessandfairs.com/wp-content/uploads/2020/12/FAVICON-LOW.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://businessandfairs.com/wp-content/uploads/2020/12/FAVICON-LOW.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat-list.css">
    <!-- END: Page CSS-->


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-sliders.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat-list.css">
    <!-- END: Page CSS-->


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-swiper.css">
    <!-- END: Page CSS-->


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

     <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/jquery.fancybox.css">


    <style type="text/css">


        .card.card-congratulations {
            min-height: 300px;
            background-size: cover;
        }

        .list_icon {
            position: absolute;
            bottom: 0;
            background-image: linear-gradient(#00000000 , #1aa5ed80, #1aa5ed);
            width: 100%;
            left: 0;
            text-align: right;
            padding: 20px;
            z-index: 999;
        }

        .card a{
            color: #fff;
        }


        .card a.delete{
            color: red;
        }

        .card a.update{
            color: green;
        }

        .card a svg{
            width: 21px;
            height: 21px;
        }

        .card a.delete svg, .card a.update svg{
            width: 15px;
            height: 15px;
        }

        .evnts > .links{
            float: left;
            min-height: 300px;
            position: absolute;
            width: 93%;
            z-index: 99;
        }

        section#component-swiper-default {
            display: none;
        }

        section#component-swiper-responsive-breakpoints .card, .section_single .card {
            height: 80vh !important;
            background-image: url(app-assets/images/slider_stands.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        /*a.btn.btn-primary.white {
            background: #fff !important; 
            color: #000 !important;
            padding: 10px 50px;
            font-size: 13px;
            border: 1px solid #0000 !important;
            margin: 0 15px;
        }*/

        .swiper-responsive-breakpoints {
            margin-top: 5%;
        }

        .swiper-wrapper{
            height: 300px;
        }

        .card-footer { 
            border: none !important;
        }

        .modal li {
            list-style: none;
            float: left;
            width: 100%;
            margin-bottom: 12px;
            font-size: 11px;
        }

        .modal li img{
            margin-right: 10px;
        }
 
        .audit .card{
            background: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .gallery .card{
            background-image: url(app-assets/images/gallery.jpg) !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .lobby .card{
            background-image: url(app-assets/images/bg/Lobby.jpeg) !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }


        .blog_white {
            background-color: #fff;
            height: 100px;
            display: inline-flex;
            padding: 10px;
            border-radius: 15px;
        }

        .gallery .swiper-wrapper{
            height: 300px;
        }

        .gallery img{
            width: 100%;
            height: auto;
        }

        .blog_white .rounded-circle{
            width: 80px;
            height: 80px;
            margin-right: 15px;
        }

        .gallery2, .gallery1{
            visibility: hidden;
        }

        .gallery2{
            margin-top: 0;
            height: 0;
        }

        .gallery2 .swiper-wrapper{
            height: 400px;
        }

        .gallery2 .swiper-wrapper img{
            width: 80%;
        }

        .vd_img{
            width: 50%;
        }

        .img_vd {
            width: 104%;
            margin-top: -7%;
            margin-left: -20px;
        }

        .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):focus {
            background-color: rgb(26 165 237 / 22%);
            color: #1aa5ed;
            height: 40px;
        }

        .btn-outline-primary {
            border: 1px solid #1aa5ed !important;
            background-color: transparent;
            color: #1aa5ed;
            height: 40px;
        }

        .card-header img, .card-footer img{
            width: 30px;
            margin-right: 10px;
        }

        .butt_4 img {
            height: 24px;
            width: auto;
        }

        .lobby .card-header {
            height: 80vh;
        }

        .lobby a.btn.btn-primary.white.butt_1 {
            position: absolute;
            top: 42%;
            left: 17px;
        }

        .lobby a.btn.btn-primary.white.butt_2 {
            position: absolute;
            top: 26%;
            left: 23%;
        }

        .lobby a.btn.btn-primary.white.butt_3 {
            position: absolute;
            top: 52%;
            left: 30%;
        }

        .lobby a.btn.btn-primary.white.butt_4 {
            position: absolute;
            top: 21%;
            right: 31%;
        }

        a.btn.btn-primary.white {
            background: #fff !important;
            color: #000 !important;
            padding: 6px 28px;
            font-size: 10px;
            border: 1px solid #0000 !important;
            margin: 0 15px;
        }

        .bnrs img {
            border: 5px solid #fff;
            border-radius: 12px;
        }

        .item-options.text-center a {
            font-size: 11px;
        }

        .bnrs{
            margin-top: 30px;
        }

        .card.ecommerce-card {
            height: auto !important;
            background: #fff;
        }

        .chat-app-window .user-chats{
            background: transparent;
        }

        #exampleModalChat .modal-content {
            background: rgba(255,255,255,0.6);
        }

        section.chat-app-window {
            overflow: scroll;
            height: 445px;
        }

        #exampleModalChat .modal-body {
            height: 400px;
        }

        .list_icon.prd {
            top: 0px; 
            bottom: auto;
            background-image: linear-gradient(#1aa5ed, #1aa5ed80, #00000000 );
        }


        @media only screen and (max-width: 767px) {
          .content-body .row {
                height: auto !important;
                width: 100%;
                margin-bottom: 30px;
                float: left;
            }
        }
                
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <?php 

      /******** Connect Base  ********/
       include("util/DatabasConfig/config.php"); 
      /********End Header**********/


      /********Begin Header ********/
       include("util/pageutil/header.php"); 
      /********End Header**********/

      
      /********Begin Menu********/
       include("util/pageutil/menu.php");
       /********End Menu**********/
    ?>