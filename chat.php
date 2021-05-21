<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Messagerie -  Events </title>
</head>

    <!-- BEGIN: Content-->
    <div class="app-content content chat-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    

                    <!-- Chat Sidebar area -->
                    <div class="sidebar-content card">
                        <span class="sidebar-close-icon">
                            <i data-feather="x"></i>
                        </span>
                        

                        <!-- Sidebar Users start -->
                        <div id="users-list" class="chat-user-list-wrapper list-group">
                            <h4 class="chat-list-title">Chats</h4>
                            <ul class="chat-users-lists chat-lists media-list">

                            <?php 

                                $sql3 = "SELECT DISTINCT(Chatmessage.id_em), compte.*, user.* from Chatmessage, compte, user where Chatmessage.id_em= compte.id_compte and user.id_user= compte.id_user AND Chatmessage.id_rec =".$_SESSION['id_compte']."";

                                    //echo  $sql3;

                                    $stmt2 = $db->query($sql3);

                                    while ($row2 = $stmt2->fetch()){  ?>

                                        <a href="/events/chat.php?id=<?php echo $row2['id_em']?>">
                                            <li>
                                            <?php if ($row2['imgprofil'] != "") {?>
                                               <span class="avatar"><img src="app-assets/images/portrait/small/<?php echo $row2['imgprofil']?>" height="42" width="42" /></span>
                                            <?php }else {?>
                                               <span class="avatar"><img src="app-assets/images/portrait/small/user_profil.png" height="42" width="42" /></span>
                                            <?php } ?>
                                            
                                            

                                            <?php 

                                                $sql30 = "SELECT * from Chatmessage where id_em =".$row2['id_em']." order by id_msg Limit 1";

                                                    //echo  $sql3;

                                                    $stmt20 = $db->query($sql30);

                                                    while ($row20 = $stmt20->fetch()){  ?>

                                                        <div class="chat-info flex-grow-1">
                                                            <h5 class="mb-0"><?php  echo $row2['Nom'];?>&nbsp;&nbsp;<?php echo $row2['prenom'];?></h5>
                                                            <p class="card-text text-truncate">
                                                                <?php  echo $row20['Message']; ?>  
                                                            </p>
                                                        </div>
                                                        <div class="chat-meta">
                                                            <small class="float-right mb-25 chat-time"> <?php  $date = date_create($row20['date']); echo date_format($date, 'H:i'); ?> </small>
                                                        </div>

                                                    <?php  } ?>      
                                        </li></a>
                                    <?php  } ?>    
                            </ul>
                    
                        </div>
                        <!-- Sidebar Users end -->
                    </div>
                    <!--/ Chat Sidebar area -->

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <!-- Main chat area -->
                        <section class="chat-app-window">
                            <!-- To load Conversation -->
                            <div class="start-chat-area d-none"">
                                
                            </div>
                            <!--/ To load Conversation -->

                            <!-- Active Chat -->
                            <div class="active-chat">
                                <!-- Chat Header -->
                                <div class="chat-navbar">
                                    <?php 

                                        $id= $_GET['id'];

                                        $sql31 = "SELECT DISTINCT(Chatmessage.id_em), compte.*, user.* from Chatmessage, compte, user where Chatmessage.id_em= compte.id_compte and user.id_user= compte.id_user AND Chatmessage.id_em =".$id."";

                                            //echo  $sql3;

                                            $stmt31 = $db->query($sql31);

                                            while ($row31 = $stmt31->fetch()){  ?>

                                                <header class="chat-header">
                                                    <div class="d-flex align-items-center">
                                                        <div class="sidebar-toggle d-block d-lg-none mr-1">
                                                            <i data-feather="menu" class="font-medium-5"></i>
                                                        </div>

                                                        <?php if ($row31['imgprofil'] != "") {?>
                                                           <div class="avatar avatar-border user-profile-toggle m-0 mr-1">
                                                                <img src="app-assets/images/portrait/small/<?php echo $row31['imgprofil']?>" alt="avatar" height="36" width="36" />
                                                            </div>
                                                        <?php }else {?>
                                                            <div class="avatar avatar-border user-profile-toggle m-0 mr-1">
                                                                <img src="app-assets/images/portrait/small/user_profil.png" alt="avatar" height="36" width="36" />
                                                            </div>
                                                        <?php } ?>
                                                        
                                                        <h6 class="mb-0"><?php  echo $row31['Nom'];?>&nbsp;&nbsp;<?php echo $row31['prenom'];?></h6>
                                                    </div>
                                                </header>

                                            <?php  } ?>        
                                </div>
                                <!--/ Chat Header -->

                                <!-- User Chat messages -->
                                <div class="user-chats">

                                    <div class="chats">

                                        <?php $sql3 = "SELECT Chatmessage.*, compte.* from Chatmessage, compte where Chatmessage.id_rec= compte.id_compte and Chatmessage.id_rec =".$_SESSION['id_compte']." and Chatmessage.id_em = ".$id." UNION SELECT Chatmessage.*, compte.* from Chatmessage, compte where Chatmessage.id_em= compte.id_compte and Chatmessage.id_em =".$_SESSION['id_compte']." and Chatmessage.id_rec = ".$id." order by id_msg";


                                        //echo  $sql3;

                                        $stmt2 = $db->query($sql3);

                                        while ($row2 = $stmt2->fetch()){ 

                                            if ($row2['id_em'] == $row2['id_compte'] ) {?>

                                            <?php 
                                                $sql_= "SELECT compte.*, user.* FROM compte, user WHERE compte.id_user = user.id_user and compte.id_compte=".$_SESSION['id_compte']."";

                                                //echo $sql_;
                                                $stmt_ = $db->query($sql_);

                                                while ($row_ = $stmt_->fetch()) { ?>

                                                <div class="chat">
                                                    <div class="chat-avatar">
                                                        <span class="avatar box-shadow-1 cursor-pointer">
                                                            <?php if ($row_['imgprofil'] != "") {?>
                                                                <img src="app-assets/images/portrait/small/<?php echo $row_['imgprofil']?>" alt="avatar" height="36" width="36" />
                                                            <?php }else {?>
                                                                <img src="app-assets/images/portrait/small/user_profil.png" alt="avatar" height="36" width="36" />
                                                            <?php } ?>
                                                        </span>
                                                    </div>
                                                    <div class="chat-body">
                                                        <div class="chat-content">
                                                            <?php echo $row2['Message']?> </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php } ?>
                                                
                                           <?php  }else{ ?>

                                           <?php 
                                                $sql_= "SELECT compte.*, user.* FROM compte, user WHERE compte.id_user = user.id_user and compte.id_compte=".$id."";

                                               // echo $sql_;
                                                $stmt_ = $db->query($sql_);

                                                while ($row_ = $stmt_->fetch()) { ?>

                                                    <div class="chat chat-left">
                                                        <div class="chat-avatar">
                                                            <span class="avatar box-shadow-1 cursor-pointer">
                                                                <?php if ($row_['imgprofil'] != "") {?>
                                                                    <img src="app-assets/images/portrait/small/<?php echo $row_['imgprofil']?>" alt="avatar" height="36" width="36" />
                                                                <?php }else {?>
                                                                    <img src="app-assets/images/portrait/small/user_profil.png" alt="avatar" height="36" width="36" />
                                                                <?php } ?>

                                                                
                                                            </span>
                                                        </div>
                                                        <div class="chat-body">
                                                            <div class="chat-content">
                                                                 <?php echo $row2['Message']?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                

                                            <?php  } } } ?>
                                    </div>
                                </div>
                                <!-- User Chat messages -->

                                <!-- Submit Chat form -->
                                <form class="chat-app-form" action="javascript:void(0);" onsubmit="enterChat();">
                                    <div class="input-group input-group-merge mr-1 form-send-message">
                                        <input type="text" class="form-control message" placeholder="" id="message" />
                                    </div>
                                    <!--<button type="button" class="btn btn-primary send" onclick="enterChat();">
                                        <i data-feather="send" class="d-lg-none"></i>
                                        <span class="d-none d-lg-block">Send</span>
                                    </button>-->

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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-chat.js"></script>
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