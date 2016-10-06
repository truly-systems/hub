<?php
session_start();

require_once('lang.php');
require_once('i18n.php');


include 'funcoes.php';
checkInstall();

if (isset($_GET["?"])) {
   $pgn = $_GET["?"];
}

if ($_GET and isset($_GET["action"]) and $_GET["action"] == "sair") { 
    $_SESSION['session_token'] == "";
    session_destroy();
    echo "<script>window.location='login.php'</script>";
}
   
include 'src/Api.php';
include 'inc/config.php';
protecao();

$api = new Api($dados_api["host"], $dados_api["app_token"]);



?>
<!DOCTYPE html>
 <html lang="en">

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       
        <title><?php echo __('HUB | Truly'); ?></title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="img/truly.ico" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="img/truly.ico" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="img/truly.ico" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="img/truly.ico" rel="apple-touch-icon-precomposed">
        <link href="img/truly.ico" rel="shortcut icon">
        <!--/ END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/dropzone/downloads/css/dropzone.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
        <!-- <link href="assets/global/plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css" rel="stylesheet"> -->
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="assets/admin/css/reset.css" rel="stylesheet">
        <link href="assets/admin/css/layout.css" rel="stylesheet">
        <link href="assets/admin/css/components.css" rel="stylesheet">
        <link href="assets/admin/css/plugins.css" rel="stylesheet">
        <link href="assets/admin/css/themes/default.theme.css" rel="stylesheet" id="theme">
        <link href="assets/admin/css/custom.css" rel="stylesheet">
        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js"></script>
        <![endif]-->
        <!--/ END IE SUPPORT -->
    </head>
    <!--/ END HEAD -->

    <!--

    |=========================================================================================================================|
    |  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
    |=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
    |  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
    |  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
    |  04. @FONT STYLES                 |  Font from google fonts                                                             |
    |  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
    |  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
    |  07. @THEME STYLES                |  The main theme css file                                                            |
    |  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
    |=========================================================================================================================|
    |  09. @BODY                        |  Contains all the contents of an HTML document                                      |
    |  10. @WRAPPER                     |  Wrapping page section                                                              |
    |  11. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
    |  12. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
    |  13. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
    |  14. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
    |  15. @BACK TOP                    |  Element back to top and action                                                     |
    |=========================================================================================================================|
    |  16. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
    |  17. @PAGE LEVEL PLUGINS          |  Specific 3rd party plugins script file                                             |
    |  18. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
    |=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-header-fixed            |  Header element become fixed position                                               |
	|  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
	|  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
	|  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
	|  06. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="page-session page-sound page-header-fixed page-sidebar-fixed demo-dashboard-session">
        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <header id="header">

                <!-- Start header left -->
                <div class="header-left">
                    <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile left">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!--/ End offcanvas left -->

                    <!-- Start navbar header -->
                    <div class="navbar-header">

                        <!-- Start brand -->
                        <a id="tour-1" class="navbar-brand" href="dashboard.html">
                            <img class="logo" src="img/truly.png" width="175" height="50" alt="brand logo">
                        </a><!-- /.navbar-brand -->
                        <!--/ End brand -->

                    </div><!-- /.navbar-header -->
                    <!--/ End navbar header -->

                    <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <div class="navbar-minimize-mobile right">
                        <i class="fa fa-cog"></i>
                    </div>
                    <!--/ End offcanvas right -->

                    <div class="clearfix"></div>
                </div><!-- /.header-left -->
                <!--/ End header left -->

                <!-- Start header right -->
                <div class="header-right">
                    <!-- Start navbar toolbar -->
                    <div class="navbar navbar-toolbar">

                        <!-- Start left navigation -->
                        <ul class="nav navbar-nav navbar-left">

                            <!-- Start sidebar shrink -->
                            <li id="tour-2" class="navbar-minimize">
                                <a href="javascript:void(0);" title="Minimize sidebar">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                            <!--/ End sidebar shrink -->

                            <!-- Start form search -->
                            <li class="navbar-search">
                                <!-- Just view on mobile screen-->
                                <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
                                <form id="tour-3" class="navbar-form">
                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control typeahead rounded" placeholder="Procurar...">
                                        <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
                                    </div>
                                </form>
                            </li>
                            <!--/ End form search -->

                        </ul><!-- /.nav navbar-nav navbar-left -->
                        <!--/ End left navigation -->

                        <!-- Start right navigation -->
                        <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->

                        <!-- Start messages -->
                        <li id="tour-4" class="dropdown navbar-message">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="count label label-danger rounded countRssOne" ></span>
                            </a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title"><?php echo __('Novas'); ?> <strong class="countRssOne"></strong></span>
                                </div>
                                <div class="dropdown-body">

                                    <!-- Start message search -->
                                  <!--   <form class="form-horizontal" action="#">
                                        <div class="form-group has-feedback has-feedback-sm m-5">
                                            <input type="text" class="form-control input-sm" placeholder="Search message...">
                                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                                        </div>
                                    </form> -->
                                    <!--/ End message search -->

                                    <!-- Start message list -->
                                    <div class="media-list niceScroll" id="conteudoRss">
                                    </div>
                                    <!--/ End message list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="http://trulymanager.com/v1/feed/"><?php echo __('Visualizar Todos'); ?></a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-message -->
                        <!--/ End messages -->

                    

                        <!-- Start profile -->
                        <li id="tour-6" class="dropdown navbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <!-- <span class="avatar"><img src="http://img.djavaui.com/?create=35x35,4888E1?f=ffffff" class="img-circle" alt="admin"></span> -->
                                    <span class="text hidden-xs hidden-sm text-muted">
                                        <?php
                                            $result = $api->getActiveProfile($_SESSION["session_token"]);
                                            echo $api->getActiveProfileName($result);
                                        ?>
                                    </span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <!-- Start dropdown menu -->
                            <ul class="dropdown-menu animated flipInX">
                                <li><a href="index.php?action=sair"><i class="fa fa-sign-out"></i><?php echo __('Sair'); ?></a></li>
                            </ul>
                            <!--/ End dropdown menu -->
                        </li><!-- /.dropdown navbar-profile -->
                        <!--/ End profile -->

                        <!-- Start settings -->
                       <!--  <li id="tour-7" class="navbar-setting pull-right">
                            <a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>
                        </li> -->
                        <!-- /.navbar-setting pull-right -->
                        <!--/ End settings -->

                        </ul>
                        <!--/ End right navigation -->

                    </div><!-- /.navbar-toolbar -->
                    <!--/ End navbar toolbar -->
                </div><!-- /.header-right -->
                <!--/ End header left -->

            </header> <!-- /#header -->
            <!--/ END HEADER -->

            <!--

            START @SIDEBAR LEFT
            |=========================================================================================================================|
            |  TABLE OF CONTENTS (Apply to sidebar left class)                                                                        |
            |=========================================================================================================================|
            |  01. sidebar-box               |  Variant style sidebar left with box icon                                              |
            |  02. sidebar-rounded           |  Variant style sidebar left with rounded icon                                          |
            |  03. sidebar-circle            |  Variant style sidebar left with circle icon                                           |
            |=========================================================================================================================|

            -->
            <aside id="sidebar-left" class="sidebar-circle">

                <!-- Start left navigation - profile shortcut -->
                <div id="tour-8" class="sidebar-content">
                    <div class="media">
                        <a class="pull-left has-notif avatar" href="#">
                            <!-- <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin"> -->
                            <!-- <i class="online"></i> -->
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo __('Olá,'); ?> 
                            <span>
                                <?php
                                    $result = $api->getActiveProfile($_SESSION["session_token"]);
                                    echo $api->getActiveProfileName($result);
                                ?>
                            </span>
                            </h4>
                            
                        </div>
                    </div>
                </div><!-- /.sidebar-content -->
                <!--/ End left navigation -  profile shortcut -->

                <!-- Start left navigation - menu -->
                <ul id="tour-9" class="sidebar-menu">

                    <!-- Start navigation - dashboard -->
                    <li class="submenu active">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-home"></i></span>
                            <span class="text"><?php echo __('Painel'); ?></span>
                            <span class="arrow"></span>
                            <span class="selected"></span>
                        </a>
                        <ul>
                            <li class="active"><a href="index.php"><?php echo __('Início'); ?></a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - dashboard -->

                    <!-- Start navigation - frontend themes -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-gear"></i></span>
                            <span class="text"><?php echo __('Configurações'); ?></span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="??=dados_pessoais"><?php echo __('Meus Dados'); ?></a></li>

                            <?php
                                $hostGLPI = $dados_api["host"];
                                $hostGLPI = substr($hostGLPI, 0, -11);
                            ?>
                            <li><a href="<?php echo $hostGLPI; ?>" target="_blank"><?php echo __('Meu GLPI'); ?></a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - frontend themes -->
                  

                </ul><!-- /.sidebar-menu -->
                <!--/ End left navigation - menu -->

                <!-- Start left navigation - footer -->
               <!--  <div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
                    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" 
                    data-title="Configurações"><i class="fa fa-cog"></i></a>

                    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
                    <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
                    <a id="logout" data-url="page-lock-screen.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
                </div> -->
                <!-- /.sidebar-footer -->
                <!--/ End left navigation - footer -->

            </aside><!-- /#sidebar-left -->
            <!--/ END SIDEBAR LEFT -->
         <?php 

             if (isset($pgn) and is_file("_$pgn.php")) {
               include("_$pgn.php");
             }
             else {
               include("_home.php");
             } 
        ?>
         

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        <div id="msgResposta"></div>

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="assets/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/global/plugins/bower_components/typehead.js/dist/handlebars.js"></script>
        <script src="assets/global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery.sparkline.min/index.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
        <script src="assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
        <script src="assets/global/plugins/bower_components/bootbox/bootbox.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <!-- <script src="assets/global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"></script>
        <script src="assets/global/plugins/bower_components/flot/jquery.flot.js"></script>
        <script src="assets/global/plugins/bower_components/flot/jquery.flot.spline.min.js"></script>
        <script src="assets/global/plugins/bower_components/flot/jquery.flot.categories.js"></script>
        <script src="assets/global/plugins/bower_components/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/global/plugins/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="assets/global/plugins/bower_components/flot/jquery.flot.pie.js"></script>
        <script src="assets/global/plugins/bower_components/dropzone/downloads/dropzone.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery.gritter/js/jquery.gritter.min.js"></script>
        <script src="assets/global/plugins/bower_components/skycons-html5/skycons.js"></script>
        <script src="assets/global/plugins/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/global/plugins/bower_components/counter-up/jquery.counterup.min.js"></script> -->

        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="assets/admin/js/apps.js"></script>
        <script src="assets/admin/js/pages/blankon.dashboard.js"></script>
        <script src="assets/admin/js/demo.js"></script>
        <script src="assets/admin/js/funcoes.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION --> 


    </body>
    <!--/ END BODY -->

</html>
