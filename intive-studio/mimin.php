<?php
session_start();
include '../config/koneksi.php';
include '../controller/fungsiAll.php';
include '../config/paging.php';
?>
<!DOCTYPE html>
 <html lang="en">

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="E - Shopper Adalah Website E-Commerce Yang Bergerak DiBidang Travel">
        <meta name="keywords" content="E - Shopper, Travel, Traveling, Intive Studio">
        <meta name="author" content="Intive Studio">
        <title>Dashboard | Intive Studio</title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="../images/home/logo.png" rel="shortcut icon">
        <!--/ END FAVICONS -->
        
        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <link href="assets/plugins/bower_components/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="assets/plugins/bower_components/datatables/css/datatables.responsive.css" rel="stylesheet">

        <!-- START @THEME STYLES -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/layout.css" rel="stylesheet">
        <link href="css/components.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/default.theme.css" rel="stylesheet" id="theme">
        <link href="css/sign.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="assets/plugins/bower_components/summernote/dist/summernote.css" rel="stylesheet">
        <link href="assets/plugins/bower_components/jasny-bootstrap-fileinput/css/jasny-bootstrap-fileinput.min.css">
        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!--/ END IE SUPPORT -->
    </head>
    <!--/ END HEAD -->

    <body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'header.php'; ?>
        <?php include 'sidebar.php'; ?>
        <?php include 'konten.php'; ?>

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/handlebars.js"></script>
        <script src="js/typeahead.bundle.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/index.js"></script>
        <script src="js/jquery.easing.1.3.min.js"></script>
        <script src="js/ion.sound.min.js"></script>
        <script src="js/bootbox.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="js/bootstrap-session-timeout.min.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.spline.min.js"></script>
        <script src="js/jquery.flot.categories.js"></script>
        <script src="js/jquery.flot.tooltip.min.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/dropzone.min.js"></script>
        <script src="js/jquery.gritter.min.js"></script>
        <script src="js/skycons.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="js/apps.js"></script>
        <script src="js/blankon.dashboard.js"></script>
        <script src="js/demo.js"></script>
        <script src="assets/plugins/bower_components/jasny-bootstrap-fileinput/js/jasny-bootstrap.fileinput.min.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script src="js/datatables.responsive.js"></script>
        <script src="js/fuelux.min.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!--/ END JAVASCRIPT SECTION -->

<script>
    $(document).ready(function() {
    $('#datatable-dom').dataTable();
} );
</script>
    
    </body>
    <!--/ END BODY -->

</html>