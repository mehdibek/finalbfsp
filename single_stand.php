<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Listes Stands  -  Events </title>
</head>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                
                <section class="section_single">
                    <div class="card">
                        <div class="card-header">
                            <center style="width: 100%;">
                                <a class="btn btn-primary white butt_1" href="lobby.php"><img src="app-assets/images/icons/FVCN.png"><b>Lobby</b></a>
                                <a class="btn btn-primary white butt_3" href="listes_stands.php"><img src="app-assets/images/icons/Morocco.png"><b>Moroccan Exhibitors</a>
                                <a class="btn btn-primary white butt_2" href="listes_stands_african.php"><img src="app-assets/images/icons/Senegal.png"><b>Pan African</b> Exhibitors</a>
                                <a class="btn btn-primary white butt_1" href="auditorium.php"><img src="app-assets/images/icons/Auditorium.png">Auditorium</b></a>
                                <a class="btn btn-primary white butt_4" href="gallery.php"> <img src="app-assets/images/icons/Gallery.png"> Gallery</a>
                            </center>
                        </div>

                        <?php 
                        $id_stand = $_GET['id'];
                        //$stmt = $db->query('SELECT societe.*, stand.*, user.* FROM stand, societe, user where societe.id_ste=stand.id_ste and societe.id_user=user.id_user and id_stand ='.$id_stand);

                        $sql = "SELECT societe.*, stand.* ,compte.* FROM stand, societe, user, compte where societe.id_ste=stand.id_ste and societe.id_user=compte.id_compte and id_stand =".$id_stand." LIMIT 1" ;

                       // echo $sql;

                        $stmt = $db->query($sql);
                            while ($row = $stmt->fetch()) { ?> 

                                <div class="card-body row">
                                    <div class="col-md-2 bnrs">
                                       <?php  if (!empty($row['img_file_1'])) { ?>
                                        <a href="app-assets/images/company/affiche/<?php echo $row['pdf_file_1']?>" target="_blank"><img class="img-fluid" src="app-assets/images/company/affiche/<?php echo $row['img_file_1']?>" alt="banner"/></a>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-8">
                                        <center>
                                            <img class="img-fluid" src="app-assets/images/stands/img/<?php echo $row['img_stand']?>" alt="banner" width="800px"/>
                                        </center>
                                    </div>
                                    <div class="col-md-2 bnrs">
                                        <?php  if (!empty($row['img_file_2'])) { ?>
                                        <a href="app-assets/images/company/affiche/<?php echo $row['pdf_file_2']?>" target="_blank"><img class="img-fluid" src="app-assets/images/company/affiche/<?php echo $row['img_file_2']?>" alt="banner"/></a>
                                        <?php } ?>
                                    </div>

                                    
                                </div>

                                <div class="card-footer">

                                    <center style="width: 100%;"> 
                                    <?php if ($_SESSION['role'] == 'visitor') {?>
                                        <a class="btn btn-primary white" data-toggle="modal" data-target="#exampleModalChat"><img src="app-assets/images/icons/chat.png">Chat</a>
                                   <?php }elseif ($_SESSION['role'] == 'exposant') {?>
                                        <a class="btn btn-primary white" href="#" ><img src="app-assets/images/icons/chat.png">Chat</a>
                                    <?php }?> 
                                       
                                        <a class="btn btn-primary white" data-toggle="modal" data-target="#exampleModalCenterShop"><img src="app-assets/images/icons/store.png">Shop</a>
                                        <a class="btn btn-primary white" data-toggle="modal" data-target="#exampleModalCenter"><img src="app-assets/images/icons/information.png">Infos</a>
                                    </center>
                                </div>

                                <!-- Vertical modal -->
                                <div class="vertical-modal-ex">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        <img class="round" style="border-radius:7.5rem;border: 1px solid;" src="app-assets/images/company/logo/<?php echo $row['image_ste']?>" style="float: left;"  height="50" width="50" >
                                                        <?php echo $row['nom_ste']?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body row">
                                                    <div class="col-md-7">
                                                        <h3>A propos</h3>
                                                        <p class="card-text font-small-3" style="width:auto"><?php echo $row['description_ste']?></p>
                                                        
                                                    </div>

                                                    <?php 
                                                       $email = $row['login'];

                                                       $sql1 = "SELECT * FROM user where email ='".$email."' LIMIT 1"; 

                                                        $stmt1 = $db->query($sql1);
                                                            while ($row1 = $stmt1->fetch()) { ?> 

                                                                <div class="col-md-5">
                                                                    <ul>
                                                                        
                                                                        <li>
                                                                            <img src="app-assets/images/infos/whatsapp.png" style="float: left;">
                                                                            <span class="align-middle">
                                                                            <a style="color:#6E6B7B" target="_blank" href="https://wa.me/<?php echo $row1['tel']?>">
                                                                            <?php echo $row1['tel']?></a>
                                                                            </span>
                                                                        </li>
                                                                        
                                                                        <li>
                                                                            <img src="app-assets/images/infos/instagram.png" style="float: left;">
                                                                            <span class="align-middle">
                                                                                <a target="_blank" style="color:#6E6B7B" href="<?php echo $row['insta_url']?>">
                                                                                <?php echo $row['insta_url']?></a>
                                                                            </span>
                                                                        </li>
                                                                        
                                                                        <li>
                                                                            <img src="app-assets/images/infos/facebook.png" style="float: left;">
                                                                            <span class="align-middle">
                                                                                <a target="_blank" style="color:#6E6B7B" href="<?php echo $row['face_url']?>">
    
                                                                                <?php echo $row['face_url']?></a>
                                                                                </span>
                                                                        </li>
                                                                        <li>
                                                                            <img src="app-assets/images/infos/arroba.png" style="float: left;">
                                                                            <span class="align-middle">
                                                                                <a style="color:#6E6B7B" href="mailto:<?php echo $row['login']?>">

                                                                                <?php echo $row['login']?></a>
                                                                                </span>
                                                                        </li>
                                                                        <li>
                                                                            <img src="app-assets/images/infos/world-wide-web.png" style="float: left;">
                                                                            <span class="align-middle">
                                                                                <a target="_blank" style="color:#6E6B7B" href="<?php echo $row['site_url']?>">
                                                                                <?php echo $row['site_url']?></a>
                                                                                </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                        <?php  } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Vertical modal end-->



                                <!-- Vertical modal -->
                                <div class="vertical-modal-ex">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenterShop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        <img class="round" style="border-radius:7.5rem;border: 1px solid;" src="app-assets/images/company/logo/<?php echo $row['image_ste']?>" style="float: left;"  height="50" width="50" >
                                                        <?php echo $row['nom_ste']?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body row">

                                                    <?php $id_user = $row['id_compte'];

                                                        $stmt1 = $db->query('SELECT * from products where id_user='.$id_user);

                                                        while ($row1 = $stmt1->fetch()){ ?>

                                                            <div class="col-md-3">              
 
                                                                <div class="card ecommerce-card">
                                                                    <div class="item-img text-center">
                                                                        <a href="#">
                                                                            <img class="img-fluid card-img-top" src="app-assets/images/products/<?php echo $row1['img_prd']?>" alt="img-placeholder" /></a>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h6 class="item-name text-center">
                                                                            <?php echo $row1['nom_prd']?>  <h4 class="item-price text-center"><?php echo $row1['prix']?> DH</h4>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="item-options text-center">
                                                                        <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                                                            <span class="add-to-cart">Ajouter au Panier</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                   <?php   } ?>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Vertical modal end-->


                                <!-- Vertical modal -->
                                <div class="vertical-modal-ex">
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalChat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                        <img class="round" style="border-radius:7.5rem;border: 1px solid;" src="app-assets/images/company/logo/<?php echo $row['image_ste']?>" style="float: left;"  height="50" width="50" >
                                                        <?php echo $row['nom_ste']; ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <section class="chat-app-window">

                                                            <!-- User Chat messages -->
                                                            <div class="user-chats">
                                                                <div class="chats">
                                                                    <?php $email = $row['login'];

                                                                         $sql3 = "SELECT Chatmessage.*, compte.* from Chatmessage, compte where Chatmessage.id_rec= compte.id_compte and Chatmessage.id_rec =".$_SESSION['id_compte']." and Chatmessage.id_em = ".$id_user." UNION SELECT Chatmessage.*, compte.* from Chatmessage, compte where Chatmessage.id_em= compte.id_compte and Chatmessage.id_em =".$_SESSION['id_compte']." and Chatmessage.id_rec = ".$id_user." order by id_msg";


                                                                        //echo  $sql3;

                                                                        $stmt2 = $db->query($sql3);

                                                                        while ($row2 = $stmt2->fetch()){ 


                                                                         if ($row2['id_em'] != $row2['id_compte'] ) {?>

                                                                            <div class="chat">
                                                                                <div class="chat-avatar">
                                                                                    <span class="avatar box-shadow-1 cursor-pointer">
                                                                                        <img src="app-assets/images/company/logo/<?php echo $row['image_ste']?>" alt="avatar" height="36" width="36" />
                                                                                    </span>
                                                                                </div>
                                                                                <div class="chat-body">
                                                                                    <div class="chat-content">
                                                                                        <?php echo $row2['Message']?> </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                       <?php  }else{ ?>

                                                                       <?php 
                                                                            $sql_= "SELECT compte.*, user.* FROM compte, user WHERE compte.id_user = user.id_user and compte.id_compte=".$_SESSION['id_compte']."";

                                                                            //echo $sql_;
                                                                            $stmt_ = $db->query($sql_);

                                                                            while ($row_ = $stmt_->fetch()) { ?>

                                                                                <div class="chat chat-left">
                                                                                    <div class="chat-avatar">
                                                                                        <span class="avatar box-shadow-1 cursor-pointer">
                                                                                            <img src="app-assets/images/portrait/small/<?php echo $row_['imgprofil']?>" alt="avatar" height="36" width="36" />
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="chat-body">
                                                                                        <div class="chat-content">
                                                                                             <?php echo $row2['Message']?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            

                                                                        <?php  }
                                                                         } } ?>
                                                                    <!--<div class="chat">
                                                                        <div class="chat-avatar">
                                                                            <span class="avatar box-shadow-1 cursor-pointer">
                                                                                <img src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="36" width="36" />
                                                                            </span>
                                                                        </div>
                                                                        <div class="chat-body">
                                                                            <div class="chat-content">
                                                                                <p>How can we help? We're here for you! </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>-->
                                                                    
                                                                </div>
                                                            </div>
                                                            <!-- User Chat messages -->
                                                            <?php $d = new DateTime();?>

                                                            <!-- Submit Chat form -->
                                                            <form class="chat-app-form" action="post" id="fupForm" >
                                                                <div class="input-group input-group-merge mr-1 form-send-message">
                                                                    <input type="text" class="form-control message" placeholder="" id="message" />
                                                                    <input type="hidden" class="form-control" placeholder="" id="id_em" value="<?php echo $_SESSION['id_compte'];?>" />
                                                                    <input type="hidden" class="form-control" placeholder="" id="id_rec" value="<?php echo $id_user;?>" />
                                                                    <input type="hidden" class="form-control" placeholder="" id="date" value="<?php echo $d->format('Y-m-d H:i:s'); ?>" />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">
                                                                            <label for="attach-doc" class="attachment-icon mb-0">
                                                                                <input type="file" id="attach-doc" hidden /> </label>
                                                                            </span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="btn btn-primary send" id="butsave" >
                                                                    <i data-feather="send" class="d-lg-none"></i>
                                                                    <span class="d-none d-lg-block"><i data-feather="send"></i></span>
                                                                </button>
                                                            </form>
                                                            <!--/ Submit Chat form -->
                                                        </div>
                                                        <!--/ Active Chat -->
                                                    </section>
                                                    <!--/ Main chat area -->

                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Vertical modal end-->






                       <?php } ?>
                    </div>
                </section>

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

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-chat.js"></script>
    <!-- END: Page JS-->


    <script>
        $(document).ready(function() {
            $('#butsave').on('click', function() {
                $("#butsave").attr("disabled", "disabled");
                var id_em = $('#id_em').val();
                var id_rec = $('#id_rec').val();
                var message = $('#message').val();
                var date = $('#date').val();

                //console.log(id_em,id_rec,message,date);


                if(message!="" ){
                    $.ajax({
                        url: "save.php",
                        type: "POST",
                        dataType: 'json',
                        data: {
                            id_em: id_em,
                            id_rec: id_rec,
                            message: message,
                            date: date  

                        },
                        success: function(result) {
                            $("#butsave").removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            alert('Message bien envoyer');
                        },
                        error: function(request, status, error) {
                            alert(request.responseText);
                        }
                    });
                }
                else{
                    alert('Please fill all the field !');
                }
            });
        });
        </script>


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