<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                <a class="navbar-brand" href="List_events.php">
                <span class="brand-logo">
                <img src="app-assets/images/bfImages/logo/LogoSmall.svg" style="width:100%">
                </img>
                <span class="brand-text" style="color:black;font-size: 1.21rem;padding-left:0">Busniess & <strong style="font-size: 1.21rem;background: linear-gradient(to right, #01E6B2 0%, #0755FC 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Fairs</strong></span>
                </span>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               
                <li class=" navigation-header"><i data-feather="more-horizontal"></i>
                </li>
                <!--<li class=" nav-item"><a class="d-flex align-items-center" href="dashbord.php"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Email">Tableau de Bord</span></a>
                </li>-->
                <li class=" nav-item"><a class="d-flex align-items-center" href="List_events.php"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Chat">Evenements</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="stands.php"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Chat">Exposants / Stands</span></a>
                </li>

                <?php  if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'exposant') {?>

                    <li class=" nav-item"><a class="d-flex align-items-center" href="company.php"><i data-feather='layers'></i><span class="menu-title text-truncate" data-i18n="Chat">Société</span></a>
                    </li>

                <?php } ?>    

                <li class=" nav-item"><a class="d-flex align-items-center" href="products.php"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="Todo">Boutique</span></a>
                </li>


                <li class=" nav-item"><a class="d-flex align-items-center" href="chat.php"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Calendar">Messagerie</span></a>
                </li>
                <!--<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="bar-chart"></i><span class="menu-title text-truncate" data-i18n="Kanban">Analytics</span></a>
                </li>-->

                <?php  if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'exposant') {?>
                    
                    <li class=" nav-item"><a class="d-flex align-items-center" href="formation.php"><i data-feather="video"></i><span class="menu-title text-truncate" data-i18n="Kanban">Formations</span></a>
                    </li>

                <?php } ?>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="bell"></i><span class="menu-title text-truncate" data-i18n="Invoice">Notifications</span></a>
                    
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="account-settings.php"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="File Manager">Paramètres</span></a>
                </li>
            </ul>
        </div>
    </div>