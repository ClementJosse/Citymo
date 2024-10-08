<?php
// property.php
include 'similar-properties.php';
// Vérifier si le formulaire a été soumis

if (isset($_POST['no_id_mutation'])) {
    $noidMutation = $_POST['no_id_mutation'];
} else {
    $noidMutation = null; // Définir la valeur par défaut si elle n'est pas définie
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérifier si property existe dans la variable POST
    if (isset($_POST['property'])) {
        // Récupérer la valeur de property
        $encodedProperty = $_POST['property'];

        // Décoder les données JSON de property
        $property = json_decode($encodedProperty, true);

        // Vérifier si le décodage a réussi
        if ($property !== null) {
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Citymo | Property page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/lightslider.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <style>
                .footer-title-line {
        color: #5D8AFF; /* Remplacez #5D8AFF par la couleur de votre choix */
        background: #5D8AFF;
    }
    .footer-menu li {
    border-bottom: 1px solid #5D8AFF;
}
    </style>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->


        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo3.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">


                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="properties.php">Rechercher un appartement</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                    <h1 class="page-title">Vente appartement de <?php echo $property['Nombre_de_pieces']?> pièce(s) et de <?php echo $property['Surface']?> m²</h1>              
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

 <!-- property area -->
<div class="content-area single-property" style="background-color: #FCFCFC;">
    <div class="container">

        <div class="clearfix padding-top-40">
            <div class="col-md-8 single-property-content ">
                <div class="row">
                    <div class="light-slide-item">            
                        <div class="clearfix">
                            <div class="favorite-and-print">
                                <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <a class="printer-icon " href="javascript:window.print()">
                                    <i class="fa fa-print"></i> 
                                </a>
                            </div> 

                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
    <?php
    // Explode the ImageURL string into an array of image URLs
    $imageURLs = explode(' ', $property['ImageURL']);

    // Loop through each image URL and generate corresponding <li> and <img> tags
    foreach ($imageURLs as $index => $imageURL) {
        ?>
        <li data-thumb="<?= $imageURL ?>"> 
            <img src="<?= $imageURL ?>" />
        </li>
        <?php
    }
    ?>
</ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left">Appartement à vendre</h1>
                                <h1 class="property-title pull-right"><?= $property['Prix'] ?>€</h1>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#5D8AFF" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Statut</span>
                                        <span class="property-info-value">À Vendre</span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info icon-area">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#5D8AFF" d="M46 16v-12c0-1.104-.896-2.001-2-2.001h-12c0-1.103-.896-1.999-2.002-1.999h-11.997c-1.105 0-2.001.896-2.001 1.999h-12c-1.104 0-2 .897-2 2.001v12c-1.104 0-2 .896-2 2v11.999c0 1.104.896 2 2 2v12.001c0 1.104.896 2 2 2h12c0 1.104.896 2 2.001 2h11.997c1.106 0 2.002-.896 2.002-2h12c1.104 0 2-.896 2-2v-12.001c1.104 0 2-.896 2-2v-11.999c0-1.104-.896-2-2-2zm-4.002 23.998c0 1.105-.895 2.002-2 2.002h-31.998c-1.105 0-2-.896-2-2.002v-31.999c0-1.104.895-1.999 2-1.999h31.998c1.105 0 2 .895 2 1.999v31.999zm-5.623-28.908c-.123-.051-.256-.078-.387-.078h-11.39c-.563 0-1.019.453-1.019 1.016 0 .562.456 1.017 1.019 1.017h8.935l-20.5 20.473v-8.926c0-.562-.455-1.017-1.018-1.017-.564 0-1.02.455-1.02 1.017v11.381c0 .562.455 1.016 1.02 1.016h11.39c.562 0 1.017-.454 1.017-1.016 0-.563-.455-1.019-1.017-1.019h-8.933l20.499-20.471v8.924c0 .563.452 1.018 1.018 1.018.561 0 1.016-.455 1.016-1.018v-11.379c0-.132-.025-.264-.076-.387-.107-.249-.304-.448-.554-.551z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Surface</span>
                                        <span class="property-info-value"><?php echo $property['Surface']?><b class="property-info-unit">m²</b></span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#5D8AFF" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Nombre de chambre(s)</span>
                                        <span class="property-info-value"><?php echo $property['Nombre_de_chambres']?></span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bath">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#5D8AFF" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Salle(s) d'eau</span>
                                        <span class="property-info-value"><?php echo $property['Nombre_de_salles_d_eau']?></span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#5D8AFF" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Garage</span>
                                        <span class="property-info-value"><?php echo $property['Garage']?></span>
                                    </span>
                                </div>


                            </div>
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <p><?php echo $property['Description']?></p>
                                </div>
                            </div>
                            <!-- End description area  -->

                            <div class="section additional-details">

<h4 class="s-property-title">Détails supplémentaires</h4>

<ul class="additional-details-list clearfix">
    <li>
        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Ascenseur</span>
        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?= ($property['Ascenseur'] == 1) ? 'OUI' : 'NON' ?></span>
    </li>

    <li>
        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Parking</span>
        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?= ($property['Parking'] == 1) ? 'OUI' : 'NON' ?></span>
    </li>

<li>
    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Chauffage</span>
    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">
        <?php
        if ($property['Chauffage'] == '0') {
            echo "Non renseigné";
        } else {
            echo $property['Chauffage'];
        }
        ?>
    </span>
</li>

<li>
    <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Exposition</span>
    <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">
        <?php
        if ($property['Exposition'] == '0') {
            echo "Non renseigné";
        } else {
            echo $property['Exposition'];
        }
        ?>
    </span>
</li>

    <li>
        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Balcon</span>
        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?= ($property['Balcon'] == 1) ? 'OUI' : 'NON' ?></span>
    </li>

    <li>
        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Interphone</span>
        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?= ($property['Interphone'] == 1) ? 'OUI' : 'NON' ?></span>
    </li>

</ul>
</div>

                            <!-- End additional-details area  -->



                            
                            <!-- End video area  -->
                        </div>
                    </div>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">



                        <?php
                        generateSimilarProperties($property['ID'],$noidMutation);
                        ?>
                        </aside>
                    </div>
                </div>

            </div>
        </div>

  <!-- Footer area-->
  <div class="footer-area">

<div class=" footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                <div class="single-footer">
                    <h4>About us </h4>
                    <div class="footer-title-line"></div>

                    <img src="assets/img/logo3.png" alt="" class="wow pulse" data-wow-delay="1s">
                    <p>Pour contacter Citymo</p>
                    <ul class="footer-adress">
                        <li><i class="pe-7s-map-marker strong"> </i> 9089 rue du Succès</li>
                        <li><i class="pe-7s-mail strong"> </i> email@Citymo.com</li>
                        <li><i class="pe-7s-call strong"> </i> +33 633333333</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                <div class="single-footer">
                    <h4>Quick links </h4>
                    <div class="footer-title-line"></div>
                    <ul class="footer-menu">
                        <li><a href="properties.php">Properties</a>  </li> 
                        <li><a href="index.php">Services</a>  </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>

        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>
        <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
                            $(document).ready(function () {

                                $('#image-gallery').lightSlider({
                                    gallery: true,
                                    item: 1,
                                    thumbItem: 9,
                                    slideMargin: 0,
                                    speed: 500,
                                    auto: true,
                                    loop: true,
                                    onSliderLoad: function () {
                                        $('#image-gallery').removeClass('cS-hidden');
                                    }
                                });
                            });
        </script>

    </body>
</html>
<?php
        } else {
            // En cas d'erreur de décodage JSON
            echo 'Erreur : Impossible de décoder les données JSON de la propriété.';
        }
    } else {
        // Si property n'est pas défini dans le formulaire POST
        echo 'Erreur : Aucune donnée de propriété trouvée dans le formulaire POST.';
    }
} else {
    // Si le formulaire n'a pas été soumis via la méthode POST
    echo 'Erreur : Formulaire non soumis via la méthode POST.';
}
?>