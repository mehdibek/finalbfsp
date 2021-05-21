<?php 
  /********Begin Header ********/
   include("util/pageutil/header_global.php"); 
  /********End Header**********/
?>

<head>
  <title>Liste produits  -  Events </title>
</head>

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Boutique</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Accueil</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Boutique</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-right">
                <div class="content-body">  

                    <!-- E-commerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row" style="float:inherit!important;">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">

                                    <div class="view-options d-flex">

                                        <!--<div class="btn-group dropdown-sort">
                                            <button type="button" class="btn btn-outline-primary dropdown-toggle mr-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="active-sorting">Featured</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Featured</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Lowest</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Highest</a>
                                            </div>
                                        </div>-->
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn">
                                                <input type="radio" name="radio_options" id="radio_option1" checked />
                                                <i data-feather="grid" class="font-medium-3"></i>
                                            </label>
                                            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn">
                                                <input type="radio" name="radio_options" id="radio_option2" />
                                                <i data-feather="list" class="font-medium-3"></i>
                                            </label>
                                        </div>
                                    </div>

                                    
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                                        </button>
                                        <?php  if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'exposant') {?>

                                            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                                                <div class="form-group breadcrumb-right">
                                                    <div class="dropdown">
                                                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="add_products.php"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Ajouter  Nouveau </span></a></div>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Content Section Starts -->

                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="body-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- E-commerce Search Bar Starts -
                    <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Search Bar Ends -->

                    <!-- E-commerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">


                        <?php  if(isset($_POST['F1'])){
     
                            $id_user = $_POST['expo'];

                            $stmt = $db->query('SELECT * from products where id_user='.$id_user);


                            while ($row = $stmt->fetch()){?>

                                <div class="card ecommerce-card">
                                    <div class="item-img text-center">
                                        <a href="#">
                                            <img class="img-fluid card-img-top" src="app-assets/images/products/<?php echo $row['img_prd']?>" alt="img-placeholder" />
                                        </a>

                                        <div class="list_icon prd">
                                            <a href="update_product.php?id=<?php echo $row['id_prd']?>" data-original-title="Modifier" data-placement="top" data-toggle="tooltip">
                                                <i class="mr-50" data-feather="edit" ></i>
                                            </a>

                                            <a href="#" data-original-title="Supprimer" data-placement="top" data-toggle="tooltip" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ?'));">
                                                <i class="mr-50" data-feather="trash-2" ></i> 
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="item-wrapper">
                                            <div>
                                                <h6 class="item-price"><?php echo $row['prix']?> DH</h6>
                                            </div>
                                        </div>
                                        <h6 class="item-name">
                                            <a class="text-body" href="#"><?php echo $row['nom_prd']?></a>
                                        </h6>
                                        <p class="card-text item-description">
                                            <?php echo $row['description']?>
                                        </p>
                                    </div>
                                    <div class="item-options text-center">
                                        <div class="item-wrapper">
                                            <div class="item-cost">
                                                <h4 class="item-price"><?php echo $row['prix']?> DH</h4>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                            <i data-feather="heart"></i>
                                            <span>Wishlist</span>
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                            <i data-feather="shopping-cart"></i>
                                            <span class="add-to-cart">Ajouter au Panier</span>
                                        </a>
                                    </div>
                                </div>

                        <?php  }

                            }elseif (isset($_GET['id_user'])) {

                                
                                    //var_dump("OK");die();

                                    $id_user = $_GET['id_user'];

                                    $stmt = $db->query('SELECT * from products where id_user='.$id_user);


                                    while ($row = $stmt->fetch()){ ?>
                                                        

                                        <div class="card ecommerce-card">
                                            <div class="item-img text-center">
                                                <a href="#">
                                                    <img class="img-fluid card-img-top" src="app-assets/images/products/<?php echo $row['img_prd']?>" alt="img-placeholder" /></a>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-wrapper">
                                                    <div>
                                                        <h6 class="item-price"><?php echo $row['prix']?> DH</h6>
                                                    </div>
                                                </div>
                                                <h6 class="item-name">
                                                    <a class="text-body" href="#"><?php echo $row['nom_prd']?></a>
                                                </h6>
                                                <p class="card-text item-description">
                                                    <?php echo $row['description']?>
                                                </p>
                                            </div>
                                            <div class="item-options text-center">
                                                <div class="item-wrapper">
                                                    <div class="item-cost">
                                                        <h4 class="item-price"><?php echo $row['prix']?> DH</h4>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                                    <i data-feather="heart"></i>
                                                    <span>Wishlist</span>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                                    <i data-feather="shopping-cart"></i>
                                                    <span class="add-to-cart">Ajouter au Panier</span>
                                                </a>
                                            </div>
                                        </div>


                               <?php   }

                                }elseif ($_SESSION['role'] == 'exposant') {

                                    

                                        $id_user = $_SESSION['id_compte'];

                                        $stmt = $db->query('SELECT * from products where id_user='.$id_user);

                                        while ($row = $stmt->fetch()){ ?>
                                                            

                                            <div class="card ecommerce-card">
                                                <div class="item-img text-center">
                                                    <a href="#">
                                                        <img class="img-fluid card-img-top" src="app-assets/images/products/<?php echo $row['img_prd']?>" alt="img-placeholder" />
                                                    </a>

                                                    <div class="list_icon prd">
                                                        <a href="update_product.php?id=<?php echo $row['id_prd']?>" data-original-title="Modifier" data-placement="top" data-toggle="tooltip">
                                                            <i class="mr-50" data-feather="edit" ></i>
                                                        </a>

                                                        <a href="#" data-original-title="Supprimer" data-placement="top" data-toggle="tooltip" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ?'));">
                                                            <i class="mr-50" data-feather="trash-2" ></i> 
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-wrapper">
                                                        <div>
                                                            <h6 class="item-price"><?php echo $row['prix']?> DH</h6>
                                                        </div>
                                                    </div>
                                                    <h6 class="item-name">
                                                        <a class="text-body" href="#"><?php echo $row['nom_prd']?></a>
                                                    </h6>
                                                    <p class="card-text item-description">
                                                        <?php echo $row['description']?>
                                                    </p>
                                                </div>
                                                <div class="item-options text-center">
                                                    <div class="item-wrapper">
                                                        <div class="item-cost">
                                                            <h4 class="item-price"><?php echo $row['prix']?> DH</h4>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                                        <i data-feather="heart"></i>
                                                        <span>Wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                                        <i data-feather="shopping-cart"></i>
                                                        <span class="add-to-cart">Ajouter au Panier</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <?php } ?>


                                    <?php }else {

                                        $stmt = $db->query('SELECT * from products');

                                        while ($row = $stmt->fetch()){ ?>
                                                            

                                            <div class="card ecommerce-card">
                                                <div class="item-img text-center">
                                                    <a href="#">
                                                        <img class="img-fluid card-img-top" src="app-assets/images/products/<?php echo $row['img_prd']?>" alt="img-placeholder" />
                                                    </a>

                                                    <div class="list_icon prd">
                                                        <a href="update_product.php?id=<?php echo $row['id_prd']?>" data-original-title="Modifier" data-placement="top" data-toggle="tooltip">
                                                            <i class="mr-50" data-feather="edit" ></i>
                                                        </a>

                                                        <a href="#" data-original-title="Supprimer" data-placement="top" data-toggle="tooltip" onclick="return(confirm('Etes-vous sûr de vouloir supprimer ?'));">
                                                            <i class="mr-50" data-feather="trash-2" ></i> 
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-wrapper">
                                                        <div>
                                                            <h6 class="item-price"><?php echo $row['prix']?> DH</h6>
                                                        </div>
                                                    </div>
                                                    <h6 class="item-name">
                                                        <a class="text-body" href="#"><?php echo $row['nom_prd']?></a>
                                                    </h6>
                                                    <p class="card-text item-description">
                                                        <?php echo $row['description']?>
                                                    </p>
                                                </div>
                                                <div class="item-options text-center">
                                                    <div class="item-wrapper">
                                                        <div class="item-cost">
                                                            <h4 class="item-price"><?php echo $row['prix']?> DH</h4>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                                        <i data-feather="heart"></i>
                                                        <span>Wishlist</span>
                                                    </a>
                                                    <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                                        <i data-feather="shopping-cart"></i>
                                                        <span class="add-to-cart">Ajouter au Panier</span>
                                                    </a>
                                                </div>
                                            </div>

                                    <?php } 

                                }?>


                    </section>
                    <!-- E-commerce Products Ends -->

                    <!-- E-commerce Pagination Starts 
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item" aria-current="page"><a class="page-link" href="javascript:void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                                        <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section> -->
                    <!-- E-commerce Pagination Ends -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop">
                        <div class="card">
                            <div class="card-body">

                                <form method="post" action="products.php" enctype="multipart/form-data">
                                    <!-- Price Filter starts -->
                                    <div class="multi-range-price">
                                        <h6 class="filter-title mt-0">select exposant :</h6>
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
                                    <!-- Price Filter ends -->

                                    <!-- Clear Filters Starts -->
                                    <div id="clear-filters">
                                        <button type="submit" class="btn btn-block btn-primary" name="F1">Filters</button>
                                    </div>

                                </form>
                                <!-- Clear Filters Ends -->


                                <!-- Categories Starts -->
                        

                                <!-- Brands starts -->
                                <!-- Brand ends -->

                                <!-- Rating starts -
                                <div id="ratings">
                                    <h6 class="filter-title">Ratings</h6>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">160</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">176</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">291</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">190</div>
                                    </div>
                                </div>
                                <!-- Rating ends -->

                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->

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
    <script src="app-assets/vendors/js/extensions/wNumb.min.js"></script>
    <script src="app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-ecommerce.js"></script>
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