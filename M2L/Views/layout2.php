<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M2L | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>/Views/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- logo for regular state and mobile devices -->
            <?php
            if($_SESSION['auth']['level']== 1)
            {
                echo('<span class="logo-lg"><b>ADMIN</b>M2L</span>');
            }
            elseif ($_SESSION['auth']['level'] == 2)
            {
                echo('<span class="logo-lg"><b>CHEF</b>M2L</span>');
            }
            echo('<span class="logo-mini">M2L</span>');
            ?>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--                            <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
<!--                            <span class="hidden-xs">--><?//= $_SESSION['prenom'], $_SESSION['nom'] ?><!--</span>-->
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li>
                    <?php
                    if($_SESSION['auth']['level']== 1)
                    {
                        echo('<li><a href="'.BASE_URL.'/admin"><i class="fa fa-dashboard"></i>Accueil ADMIN</a></li>');
                    }
                    elseif ($_SESSION['auth']['level'] == 2)
                    {
                        echo('<li><a href="'.BASE_URL.'/chef"><i class="fa fa-dashboard"></i>Accueil CHEF</a></li>');
                    }
                    echo ('<li><a href="'.BASE_URL.'/gestionUser"><i class="glyphicon glyphicon-user"></i>Ajouter Utilisateur</a></li>
                <li><a href="'.BASE_URL.'/gestionPrestataire"><i class="glyphicon glyphicon-user"></i>Ajouter Prestataire</a></li><hr>
				<li class="ts-account">
				<li><a href="'.BASE_URL.'/gestionFormation"><i class="glyphicon glyphicon-user"></i>Ajouter Formation</a></li><hr>
				<li class="ts-account">
				<a href="'.BASE_URL.'/disconnect"><i class="glyphicon glyphicon-log-out"></i>Déconnexion</a>
			    </li>');
                    ?>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            </h1>
        </section>
        <?= $content; ?>

    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">


        </div>
        <!-- /.tab-pane -->
    </aside>
</div>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>


<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
<script src="<?= BASE_URL; ?>/Views/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= BASE_URL; ?>/Views/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= BASE_URL; ?>/Views/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASE_URL; ?>/Views/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="<?= BASE_URL; ?>/Views/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= BASE_URL; ?>/Views/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= BASE_URL; ?>/Views/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?= BASE_URL; ?>/Views/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?= BASE_URL; ?>/Views/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= BASE_URL; ?>/Views/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BASE_URL; ?>/Views/dist/js/demo.js"></script>
<script src="<?= BASE_URL; ?>/Views/js/jquery.min.js"></script>
<script>
    $('a[href="' + this.location.pathname + '"]').parents('li,ul').addClass('active');
</script>
</body>
</html>
