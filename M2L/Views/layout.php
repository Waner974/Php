<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Formation</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- 
    Authentic Template
    http://www.templatemo.com/tm-412-authentic
    -->
    <meta name="viewport" content="width=device-width">        
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/templatemo_main.css">
    <!-- templatemo 412 authentic -->
</head>
<body>
    <div id="main-wrapper">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                <![endif]-->

                <div class="container">
                    <!-- Static navbar -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                          <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                          </div>
                          <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                  <li class="active"><a href="#templatemo-page1"><i class="fa fa-home"></i>Accueil</a></li>
                                  <li><a href="#templatemo-page2"><i class="fa fa-video-camera"></i>Vidéos</a></li>
                                  <li><a href="#templatemo-page3"><i class="fa fa-laptop"></i>Formation</a></li>
                                  <li><a href="#templatemo-page4"><i class="fa fa-users"></i>A propos</a></li>
                                  <li><a href="#templatemo-page5"><i class="fa fa-envelope-o"></i>Contact</a></li>
                                </ul>
                          </div><!--/.nav-collapse -->
                          
                          <div>
                              <a href="<?= BASE_URL; ?>/disconnect"><i class="glyphicon glyphicon-log-out"></i>Déconnexion</a>
                          </div>
                          
                      </div><!--/.container-fluid -->
                  </div>
                  
                  <div class="image-section">
                    <div class="image-container">
                        <img src="<?= BASE_URL; ?>/Views/images/templatemo-bg-1.jpg" id="templatemo-page1-img" class="main-img inactive" alt="Home">
                        <img src="<?= BASE_URL; ?>/Views/images/templatemo-bg-2.jpg" id="templatemo-page2-img" class="inactive" alt="Services">
                        <img src="<?= BASE_URL; ?>/Views/images/templatemo-bg-3.jpg" id="templatemo-page3-img"  class="inactive" alt="Awards">
                        <img src="<?= BASE_URL; ?>/Views/images/templatemo-bg-4.jpg" id="templatemo-page4-img" class="inactive" alt="Company">
                        <img src="<?= BASE_URL; ?>/Views/images/templatemo-bg-5.jpg" id="templatemo-page5-img" class="inactive" alt="Contact">
                    </div>
                  </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="templatemo-site-title">
                            <h1 class="site-name"><a href="#">Formation</a></h1>
                            <h2 class="slogon">by <a href="#">M2L</a></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 templatemo-content-wrapper">
                        <div class="templatemo-content">   
                          <?php echo $content; ?>
                        </div><!-- /.templatemo-content -->  
                    </div><!-- /.templatemo-content-wrapper --> 
                </div><!-- /.row --> 

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                        <div class="footer-wrapper">
                            <p class="social-icons">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p>
                            <p id="tm-copyright">
                                Copyright &copy; 2014 Company Name
                            </p>
                            </div>                    
                        </div><!-- /.footer --> 
                    </div>               
                </div> <!-- /.container -->
    </div><!-- /#main-wrapper -->

<!--<div id="preloader">
    <div id="status">&nbsp;</div>
</div><!-- /#preloader -->
<script src="<?= BASE_URL; ?>/Views/js/jquery.min.js"></script>
<script src="<?= BASE_URL; ?>/Views/js/jquery.backstretch.min.js"></script>
<script src="<?= BASE_URL; ?>/Views/js/jquery.flexslider.min.js"></script>
<script src="<?= BASE_URL; ?>/Views/js/bootstrap.min.js"></script>
<script src="<?= BASE_URL; ?>/Views/js/templatemo_script.js"></script>
</body>
</html>