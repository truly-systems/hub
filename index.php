<?php
session_start();
include 'src/Api.php';
include 'config.php';

protecao();

if ($_GET and $_GET["action"] == "sair") {
    $_SESSION['session_token'] == "";
    session_destroy();
    echo "<script>window.location='login.php'</script>";
}
   

$api = new Api($dados_api["host"], $dados_api["app_token"]);

?>
<!DOCTYPE html>
 <html lang="en">

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       
        <title>HUB | Truly</title>
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
        <link href="assets/global/plugins/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css" rel="stylesheet">
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
                            <?php
                                $feed = file_get_contents("http://trulymanager.com/v1/feed/");
                                $rss = new SimpleXmlElement($feed);
                                $countRss = count($rss);
                            ?>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="count label label-danger rounded"><?php echo $countRss; ?></span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Novas <strong>(<?php echo $countRss; ?>)</strong></span>
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
                                    <div class="media-list niceScroll">

                                        <?php

                                            foreach($rss->channel->item as $entrada) {
                                             $titulo = $entrada->title;
                                             $link = $entrada->link;

                                             echo "
                                             <a href='$link' class='media'>
                                              
                                                 <div class='media-body'>
                                                     <span class='media-text'>$titulo</span>
                                                 </div><!-- /.media-body -->
                                             </a><!-- /.media -->";

                                            }
                                        ?>

                                        

                                    </div>
                                    <!--/ End message list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="http://trulymanager.com/v1/feed/">See All</a>
                                </div>
                            </div>
                            <!--/ End dropdown menu -->

                        </li><!-- /.dropdown navbar-message -->
                        <!--/ End messages -->

                    

                        <!-- Start profile -->
                        <li id="tour-6" class="dropdown navbar-profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="avatar"><img src="http://img.djavaui.com/?create=35x35,4888E1?f=ffffff" class="img-circle" alt="admin"></span>
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
                                <li><a href="index.php?action=sair"><i class="fa fa-sign-out"></i>Logout</a></li>
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
                        <a class="pull-left has-notif avatar" href="page-profile.html">
                            <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
                            <!-- <i class="online"></i> -->
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Hello, 
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
                            <span class="text">Dashboard</span>
                            <span class="arrow"></span>
                            <span class="selected"></span>
                        </a>
                        <ul>
                            <li class="active"><a href="dashboard.html">Home</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - dashboard -->

                    <!-- Start navigation - frontend themes -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-leaf"></i></span>
                            <span class="text">Frontend themes</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="frontend-themes.html">One page</a></li>
                            <li><a href="frontend-themes-2.html">Multi page</a></li>
                            <li><a href="frontend-themes-3.html">Revolution slider</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - frontend themes -->

                    <!-- Start navigation - blankon versions -->
                    <li>
                        <a href="blankon-versions.html">
                            <span class="icon"><i class="fa fa-dropbox"></i></span>
                            <span class="text">Blankon Versions</span>
                        </a>
                    </li>
                    <!--/ End navigation - blankon versions -->

                    <!-- Start navigation - blankon special -->
                    <li>
                        <a href="blankon-special.html">
                            <span class="icon"><i class="fa fa-diamond"></i></span>
                            <span class="text">Blankon Special</span>
                        </a>
                    </li>
                    <!--/ End navigation - blankon special -->

                    <!-- Start category apps -->
                    <li class="sidebar-category">
                        <span>APPS</span>
                        <span class="pull-right"><i class="fa fa-trophy"></i></span>
                    </li>
                    <!--/ End category apps -->

                    <!-- Start navigation - blog -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-globe"></i></span>
                            <span class="text">Blog</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);">Grid <span class="label label-danger pull-right">NEW</span></a>
                                <ul>
                                    <li><a href="blog-grid.html">Type 1</a></li>
                                    <li><a href="blog-grid-type-2.html">Type 2</a></li>
                                </ul>
                            </li>
                            <li><a href="blog-list.html">List</a></li>
                            <li><a href="blog-single.html">Single</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - blog -->

                    <!-- Start navigation - mail -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <span class="text">Mail</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="mail-compose.html">Compose mail</a></li>
                            <li><a href="mail-view.html">View mail</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Template mail <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="mail-template-billing.html" target="_blank">Billing</a></li>
                                    <li><a href="mail-template-newsletter.html" target="_blank">Newsletter</a></li>
                                    <li><a href="mail-template-promo.html" target="_blank">Promotion</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Responsive Layout <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="mail-layout-responsive-basic.html" target="_blank">Basic</a></li>
                                    <li><a href="mail-layout-responsive-basic-2col.html" target="_blank">Basic 2 col</a></li>
                                    <li><a href="mail-layout-responsive-bodyimage.html" target="_blank">Body image</a></li>
                                    <li><a href="mail-layout-responsive-bodyimage-2col.html" target="_blank">Body image 2 col</a></li>
                                    <li><a href="mail-layout-responsive-boxed-2col.html" target="_blank">Boxed 2 col</a></li>
                                    <li><a href="mail-layout-responsive-boxed-3col.html" target="_blank">Boxed 3 col</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--/ End navigation - mail -->

                    <!-- Start navigation - project -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-rocket"></i></span>
                            <span class="text">Project</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);">Portfolio <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="project-portfolio.html">Type 1</a></li>
                                    <li><a href="project-portfolio-type-2.html">Type 2</a></li>
                                    <li><a href="project-portfolio-type-3.html">Type 3</a></li>
                                    <li><a href="project-portfolio-type-4.html">Type 4</a></li>
                                </ul>
                            </li>
                            <li><a href="project-team.html">Team</a></li>
                            <li><a href="project-team-board.html">Team Board</a></li>
                            <li><a href="project-team-profile.html">Team Profile</a></li>
                            <li><a href="project-issue-tracker.html">Issue Tracker</a></li>
                            <li><a href="project-clients.html">Clients</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - project -->

                    <!-- Start navigation - pages -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-file-o"></i></span>
                            <span class="text">Pages</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);">Gallery <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-gallery.html">Type 1</a></li>
                                    <li><a href="page-gallery-type-2.html">Type 2</a></li>
                                    <li><a href="page-gallery-type-3.html">Type 3</a></li>
                                    <li><a href="page-gallery-type-4.html">Type 4</a></li>
                                </ul>
                            </li>
                            <li><a href="page-calendar.html">Calendar</a></li>
                            <li><a href="page-faq.html">FAQ <span class="label label-danger pull-right">New</span></a></li>
                            <li><a href="page-invoice.html">Invoice</a></li>
                            <li><a href="page-messages.html">Messages</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Timeline <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-timeline.html">Type 1</a></li>
                                    <li><a href="page-timeline-type-2.html">Type 2</a></li>
                                </ul>
                            </li>
                            <li><a href="page-profile.html">Profile</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Search<span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-search-basic.html">Basic</a></li>
                                    <li><a href="page-search-course.html">Courses</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Error <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-403-type-2.html">Error 403 Type 2</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-404-type-2.html">Error 404 Type 2</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-500-type-2.html">Error 500 Type 2</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Account <span class="arrow"></span></a>
                                <ul>
                                    <li><a href="page-signin.html">Sign In</a></li>
                                    <li><a href="page-signin-type-2.html">Sign In Type 2</a></li>
                                    <li><a href="page-signup.html">Sign Up</a></li>
                                    <li><a href="page-lost-password.html">Lost password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--/ End navigation - pages -->

                    <!-- Start category ui kit-->
                    <li class="sidebar-category">
                        <span>UI KIT</span>
                        <span class="pull-right"><i class="fa fa-magic"></i></span>
                    </li>
                    <!--/ End category ui kit-->

                    <!-- Start navigation - forms -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-list-alt"></i></span>
                            <span class="text">Forms</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="form-element.html">Element</a></li>
                            <li><a href="form-advanced.html">Advanced</a></li>
                            <li><a href="form-layout.html">Layout</a></li>
                            <li><a href="form-validation.html">Validation</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-wysiwyg.html">Text Editor</a></li>
                            <li><a href="form-xeditable.html">X-Editable</a></li>
                            <li><a href="form-picker.html">Picker</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - forms -->

                    <!-- Start navigation - tables -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-table"></i></span>
                            <span class="text">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="table-default.html">Default</a></li>
                            <li><a href="table-color.html">Color</a></li>
                            <li><a href="table-advanced.html">Advanced</a></li>
                            <li><a href="table-datatable.html">Datatable</a></li>
                            <li><a href="table-samples.html">Samples <span class="label label-danger pull-right">NEW</span></a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - tables -->

                    <!-- Start navigation - maps -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <span class="text">Maps</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="maps-google.html">Google</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">
                                    <span class="text">Vector</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="maps-vector.html">Jqvmap</a></li>
                                    <li><a href="maps-vector-2.html">Jvectormap <span class="label label-danger pull-right">NEW</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--/ End navigation - maps -->

                    <!-- Start navigation - charts -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                            <span class="text">Charts</span>
                            <span class="arrow"></span>
                        </a>
                        <ul>
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-c3js.html">C3js</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                            <li><a href="chart-easy-pie-chart.html">Easy Pie Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                        </ul>
                    </li>
                    <!--/ End navigation - charts -->

                    <!-- Start category development -->
                    <li class="sidebar-category">
                        <span>DEVELOP</span>
                        <span class="pull-right"><i class="fa fa-code"></i></span>
                    </li>
                    <!--/ End category development -->

                    <!-- Start development - ui features -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-cubes"></i></span>
                            <span class="text">UI Features</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="ui-feature-bootstrap-tour.html">Bootstrap Tour</a></li>
                            <li><a href="ui-feature-notifications.html">Notifications</a></li>
                            <li><a href="ui-feature-grid-stack.html">Grid Stack</a></li>
                        </ul>
                    </li>
                    <!--/ End development - ui features -->

                    <!-- Start development - components -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-cube"></i></span>
                            <span class="text">Components</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="component-grid-system.html">Grid System</a></li>
                            <li><a href="component-buttons.html">Buttons</a></li>
                            <li><a href="component-typography.html">Typography</a></li>
                            <li><a href="component-panel.html">Panels</a></li>
                            <li><a href="component-alerts.html">Alerts</a></li>
                            <li><a href="component-modals.html">Modals</a></li>
                            <li><a href="component-video.html">Video <span class="label label-danger pull-right">New</span></a></li>
                            <li><a href="component-tabsaccordion.html">Tabs & Accordion</a></li>
                            <li><a href="component-sliders.html">Sliders</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);">
                                    <span class="text">List Group</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="component-list-group.html">Basic</a></li>
                                    <li><a href="component-list-group-samples.html">Samples</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">
                                    <span class="text">Icons</span>
                                    <span class="count label label-danger">6</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="component-glyphicons.html">Glyphicons</a></li>
                                    <li><a href="component-glyphicons-pro.html">Glyphicons PRO</a></li>
                                    <li><a href="component-font-awesome.html">Font Awesome</a></li>
                                    <li><a href="component-weather-icons.html">Weather Icons</a></li>
                                    <li><a href="component-map-icons.html">Map Icons</a></li>
                                    <li><a href="component-simple-line-icons.html">Simple Line Icons</a></li>
                                    <li><a href="component-flag-icon-css.html">Flag Icon CSS <span class="label label-danger pull-right">NEW</span></a></li>
                                </ul>
                            </li>
                            <li><a href="component-other.html">Other</a></li>
                        </ul>
                    </li>
                    <!--/ End development - components -->

                    <!-- Start development - layouts -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-columns"></i></span>
                            <span class="text">Layouts</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <li><a href="layout-blank.html">Blank Page</a></li>
                            <li><a href="layout-boxed.html">Boxed Page</a></li>
                            <li><a href="layout-header-fixed.html">Header Fixed Page</a></li>
                            <li><a href="layout-sidebar-fixed.html">Sidebar Fixed Page</a></li>
                            <li><a href="layout-sidebar-minimize.html">Sidebar Minimize Page</a></li>
                            <li><a href="layout-sidebar-default.html">Sidebar Default Page</a></li>
                            <li><a href="layout-sidebar-box.html">Sidebar Box Page</a></li>
                            <li><a href="layout-sidebar-rounded.html">Sidebar Rounded Page</a></li>
                            <li><a href="layout-sidebar-circle.html">Sidebar Circle Page</a></li>
                            <li><a href="layout-footer-fixed.html">Footer Fixed Page</a></li>
                        </ul>
                    </li>
                    <!--/ End development - layouts -->

                    <!-- Start development - sub menu -->
                    <li class="submenu">
                        <a href="javascript:void(0);">
                            <span class="icon"><i class="fa fa-align-left"></i></span>
                            <span class="text">Sub Menu</span>
                            <span class="plus"></span>
                        </a>
                        <ul>
                            <!-- Start level 1 -->
                            <li class="submenu">
                                <a href="javascript:void(0);">
                                    <span class="text">Level 1</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul>
                                    <!-- Start level 2 -->
                                    <li class="submenu">
                                        <a href="javascript:void(0);">
                                            <span class="text">Level 2</span>
                                            <span class="fa fa-angle-double-right pull-right arrow"></span>
                                        </a>
                                        <ul>
                                            <!-- Start level 3 -->
                                            <li class="submenu">
                                                <a href="javascript:void(0);">
                                                    <span class="text">Level 3</span>
                                                    <span class="fa fa-angle-double-right pull-right arrow"></span>
                                                </a>
                                                <ul>
                                                    <!-- Start level 4 -->
                                                    <li class="submenu">
                                                        <a href="javascript:void(0);">
                                                            <span class="text">Level 4</span>
                                                            <span class="fa fa-angle-double-right pull-right arrow"></span>
                                                        </a>
                                                        <ul>
                                                            <!-- Start level 5 -->
                                                            <li>
                                                                <a href="javascript:void(0);">Level 5</a>
                                                            </li>
                                                            <!--/ End level 5 -->
                                                            <li>
                                                                <a href="javascript:void(0);">Level 5</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">Level 5</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!--/ End level 4 -->
                                                    <li>
                                                        <a href="javascript:void(0);">Level 4</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Level 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!--/ End level 3 -->
                                            <li>
                                                <a href="javascript:void(0);">Level 3</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Level 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--/ End level 2 -->
                                    <li>
                                        <a href="javascript:void(0);">Level 2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Level 2</a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ End level 1 -->
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="text">Level 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span class="text">Level 1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ End development - sub menu -->

                    <!-- Start development - animate.css -->
                    <li>
                        <a href="animate.html">
                            <span class="icon"><i class="fa fa-forumbee"></i></span>
                            <span class="text">Animate.css</span>
                            <span class="label label-danger pull-right">New</span>
                        </a>
                    </li>
                    <!--/ End development - animate.css -->

                    <!-- Start category widget -->
                    <li class="sidebar-category">
                        <span>WIDGET</span>
                        <span class="pull-right"><i class="fa fa-cubes"></i></span>
                    </li>
                    <!--/ End category widget -->

                    <!-- Start widget - overview -->
                    <li>
                        <a href="widget-overview.html">
                            <span class="icon"><i class="fa fa-desktop"></i></span>
                            <span class="text">Overview</span>
                            <span class="label label-primary pull-right rounded">10</span>
                        </a>
                    </li>
                    <!--/ End widget - overview -->

                    <!-- Start widget - social -->
                    <li>
                        <a href="widget-social.html">
                            <span class="icon"><i class="fa fa-group"></i></span>
                            <span class="text">Social</span>
                            <span class="label label-success pull-right rounded">28</span>
                        </a>
                    </li>
                    <!--/ End widget - social -->

                    <!-- Start widget - blog -->
                    <li>
                        <a href="widget-blog.html">
                            <span class="icon"><i class="fa fa-pencil"></i></span>
                            <span class="text">Blog</span>
                            <span class="label label-info pull-right rounded">15</span>
                        </a>
                    </li>
                    <!--/ End widget - blog -->

                    <!-- Start widget - weather -->
                    <li>
                        <a href="widget-weather.html">
                            <span class="icon"><i class="fa fa-sun-o"></i></span>
                            <span class="text">Weather</span>
                            <span class="label label-warning pull-right rounded">6</span>
                        </a>
                    </li>
                    <!--/ End widget - weather -->

                    <!-- Start widget - misc -->
                    <li>
                        <a href="widget-misc.html">
                            <span class="icon"><i class="fa fa-puzzle-piece"></i></span>
                            <span class="text">Misc</span>
                            <span class="label label-danger pull-right rounded">9</span>
                        </a>
                    </li>
                    <!--/ End widget - misc -->

                    <!-- Start category documentation -->
                    <li class="sidebar-category">
                        <span><span class="hidden-sidebar-minimize">BLANKON</span> CORE</span>
                        <span class="pull-right"><i class="fa fa-coffee"></i></span>
                    </li>
                    <!--/ End category documentation -->

                    <!-- Start documentation - api documentation -->
                    <li>
                        <a href="documentation/admin/html/full-documentation.html" target="_blank">
                            <span class="icon"><i class="fa fa-book"></i></span>
                            <span class="text">API Documentation</span>
                        </a>
                    </li>
                    <!--/ End documentation - api documentation -->

                </ul><!-- /.sidebar-menu -->
                <!--/ End left navigation - menu -->

                <!-- Start left navigation - footer -->
                <div id="tour-10" class="sidebar-footer hidden-xs hidden-sm hidden-md">
                    <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
                    <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
                    <a id="lock-screen" data-url="page-signin.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
                    <a id="logout" data-url="page-lock-screen.html" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
                </div><!-- /.sidebar-footer -->
                <!--/ End left navigation - footer -->

            </aside><!-- /#sidebar-left -->
            <!--/ END SIDEBAR LEFT -->

            <!-- START @PAGE CONTENT -->
            <section id="page-content">

                <!-- Start page header -->
                <div id="tour-11" class="header-content">
                    <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
                    <div class="breadcrumb-wrapper hidden-xs">
                        <span class="label">You are here:</span>
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div><!-- /.header-content -->
                <!--/ End page header -->

                <!-- Start body content -->
                <div class="body-content animated fadeIn">

                    <div id="tour-12" class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-facebook rounded">
                                <span class="mini-stat-icon"><i class="fa fa-check fg-facebook"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">
                                        <?php
                                            echo $api->countTicketOpen(json_decode($api->getTicket($_SESSION["session_token"])));
                                        ?>
                                    </span>
                                    Chamados Abertos
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-twitter rounded">
                                <span class="mini-stat-icon"><i class="fa fa-bullhorn fg-twitter"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">0</span>
                                    Mudanças Abertas
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-googleplus rounded">
                                <span class="mini-stat-icon"><i class="fa fa-bug fg-googleplus"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">
                                        <?php
                                            echo $api->countProblemOpen(json_decode($api->getProblem($_SESSION["session_token"])));
                                        ?>
                                    </span>
                                    Ploblemas Abertos
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="mini-stat clearfix bg-bitbucket rounded">
                                <span class="mini-stat-icon"><i class="fa fa-check fg-bitbucket"></i></span>
                                <div class="mini-stat-info">
                                    <span class="counter">
                                        <?php
                                            echo $api->countTicketClose(json_decode($api->getTicket($_SESSION["session_token"])));
                                        ?>
                                    </span>
                                    Chamados Fechados
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    
                    <div class="row">
                        <div class="col-md-9">

                            <!-- Start sample table -->
                            <div class="table-responsive rounded mb-20">
                                <table id="tour-16" class="table table-striped table-theme">
                                    <thead>
                                    <tr>
                                        <th class="text-center border-right">ID</th>
                                        <th>Assunto</th>
                                        <th>Data Criação</th>
                                        <th>Data Modificação</th>
                                        <th class="text-center">Texto</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $tk = $api->getTicketsContent($api->getTicket($_SESSION["session_token"]));
                                        $cnttk = count($tk);

                                        for ($i=0; $i < $cnttk; $i++) { 
                                         
                                            echo "<tr>
                                                        <td class='text-center border-right'>".$tk[$i]["id"]."</td>
                                                        <td>
                                                            <span>".$tk[$i]["name"]."</span>
                                                        </td>
                                                        <td>".convertDataView($tk[$i]["date_mod"])."</td>
                                                        <td>".convertDataView($tk[$i]["date_creation"])."</td>
                                                        <td class='text-center'>
                                                            ".substr($tk[$i]["content"],0,100)." ...
                                                        </td>
                                                        <td class='text-center'>
                                                            ".casesStatus($tk[$i]["status"])."
                                                        </td>
                                                    </tr>";
                                        }
                                    ?>
                                  
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="text-center border-right">ID</th>
                                        <th>Assunto</th>
                                        <th>Data Criação</th>
                                        <th>Data Modificação</th>
                                        <th class="text-center">Texto</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.table-responsive -->
                            <!--/ End sample table -->

                        </div>
                        <div class="col-md-3">

                            <!-- Start mini stats social widget -->
                            <div id="tour-17" class="row">
                                <div class="col-md-12  col-xs-4 col-xs-override">

                                    <div class="panel rounded shadow">
                                        <div class="panel-heading text-center bg-youtube">
                                            <p class="inner-all no-margin">
                                                <i class="fa fa-question fa-5x"></i>
                                            </p>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body text-center">
                                            <p class="h4 no-margin inner-all text-strong">
                                                <!-- <span class="block counter">342</span> -->
                                                <span class="block"><a href="http://trulysystems.com/tsys/sobre-a-truly/" target="_blank">Sobre a Truly</a></span>
                                            </p>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->

                                </div>
                                <div class="col-md-12 col-sm-4 col-xs-4 col-xs-override">

                                    <div class="panel rounded shadow">
                                        <div class="panel-heading text-center bg-dribbble">
                                            <p class="inner-all no-margin">
                                                <i class="fa fa-tty fa-5x"></i>
                                            </p>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body text-center">
                                            <p class="h4 no-margin inner-all text-strong">
                                                <!-- <span class="block counter">2,341</span> -->
                                                <span class="block"><a href="http://tm.trulysystems.com" target="_blank">Atendimento</a></span>
                                            </p>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->

                                </div>
                               
                            </div>

                            <!--/ End mini stats social widget -->

                        </div>
                    </div><!-- /.row -->

                </div><!-- /.body-content -->
                <!--/ End body content -->

                <!-- Start footer content -->
                <footer class="footer-content">
                    <span id="tour-19">
                        2014 - <span id="copyright-year"></span> &copy; Blankon Admin. Created by <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
                    </span>
                    <span id="tour-20" class="pull-right">0.01 GB(0%) of 15 GB used</span>
                </footer><!-- /.footer-content -->
                <!--/ End footer content -->

            </section><!-- /#page-content -->
            <!--/ END PAGE CONTENT -->

            <!-- START @SIDEBAR RIGHT -->
            <aside id="sidebar-right">

                <div class="panel panel-tab">
                    <div class="panel-heading no-padding">
                        <div class="pull-right">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="#sidebar-profile" data-toggle="tab">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#sidebar-layout" data-toggle="tab">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#sidebar-setting" data-toggle="tab">
                                        <i class="fa fa-paint-brush"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#sidebar-chat" data-toggle="tab">
                                        <i class="fa fa-comments"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body no-padding">
                        <div class="tab-content">
                            <div class="tab-pane" id="sidebar-profile">
                                <div class="sidebar-profile">

                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu niceScroll">

                                        <!-- Start category about me -->
                                        <li class="sidebar-category">
                                            <span>ABOUT ME</span>
                                            <span class="pull-right"><i class="fa fa-newspaper-o"></i></span>
                                        </li>
                                        <!--/ End category about me -->

                                        <!--/ Start navigation - about me -->
                                        <li>
                                            <ul class="list-unstyled">
                                                <li>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                                </li>
                                                <li>
                                                    <i class="fa fa-refresh"></i> Last update about 2 hours ago
                                                </li>
                                                <li>
                                                    <i class="fa fa-clock-o"></i> Total time spent 250 hrs
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope"></i> Tol.lee@djavaui.com
                                                </li>
                                                <li>
                                                    <i class="fa fa-mobile"></i> 1 405 777 1212
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - about me -->

                                        <!-- Start category recent activity -->
                                        <li class="sidebar-category">
                                            <span>RECENT ACTIVITY</span>
                                            <span class="pull-right"><i class="fa fa-line-chart"></i></span>
                                        </li>
                                        <!--/ End category recent activity -->

                                        <!--/ Start navigation - activity -->
                                        <li>
                                            <div class="media-list activity">
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <i class="fa fa-flash"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Added a note to Ticket #947</span>
                                                        <span class="media-meta time">about 2 hours ago</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <i class="fa fa-flash"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Added a product to Ticket #948</span>
                                                        <span class="media-meta time">about 3 hours ago</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <i class="fa fa-flash"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Added a service to Ticket #949</span>
                                                        <span class="media-meta time">about 15 hours ago</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                        </li>
                                        <!--/ End navigation - activity -->

                                        <!-- Start category current working -->
                                        <li class="sidebar-category">
                                            <span>CURRENTLY WORKING</span>
                                            <span class="pull-right"><i class="fa fa-group"></i></span>
                                        </li>
                                        <!--/ End category current working -->

                                        <!-- Start left navigation - current working -->
                                        <li>
                                            <div class="media-list working">
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Daddy Botak">
                                                        <i class="online"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Daddy Botak</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Sarah Tingting">
                                                        <i class="offline"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Sarah Tingting</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                        <span class="media-meta time">7 m</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Nicolas Olivier</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Claudia Cinta">
                                                        <i class="online"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Claudia Cinta</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Catherine Parker</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                        </li>
                                        <!--/ End left navigation - current working -->

                                    </ul>
                                    <!-- Start right navigation - menu -->
                                </div>
                            </div><!-- /#sidebar-profile -->
                            <div class="tab-pane" id="sidebar-layout">
                                <div class="sidebar-layout">

                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu niceScroll">

                                        <!--/ Start navigation - reset settings -->
                                        <li>
                                            <a id="reset-setting" href="javascript:void(0);" class="btn btn-inverse btn-block"><i class="fa fa-refresh fa-spin"></i> RESET SETTINGS</a>
                                        </li>
                                        <!--/ End navigation - reset settings -->

                                        <!-- Start category layout -->
                                        <li class="sidebar-category">
                                            <span>LAYOUT</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category layout -->

                                        <!--/ Start navigation - layout -->
                                        <li>
                                            <ul class="list-unstyled layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="layout-fluid" type="radio" name="layout" value="">
                                                        <label for="layout-fluid">Fluid</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="layout-boxed" type="radio" name="layout" value="page-boxed">
                                                        <label for="layout-boxed">Boxed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - layout -->

                                        <!-- Start category header -->
                                        <li class="sidebar-category">
                                            <span>HEADER</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category header -->

                                        <!--/ Start navigation - header -->
                                        <li>
                                            <ul class="list-unstyled header-layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="header-default" type="radio" name="header" value="">
                                                        <label for="header-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="header-fixed" type="radio" name="header" value="page-header-fixed">
                                                        <label for="header-fixed">Fixed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - header -->

                                        <!-- Start category sidebar -->
                                        <li class="sidebar-category">
                                            <span>SIDEBAR</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category sidebar -->

                                        <!--/ Start navigation - sidebar -->
                                        <li>
                                            <ul class="list-unstyled sidebar-layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-default" type="radio" name="sidebar" value="">
                                                        <label for="sidebar-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-fixed" type="radio" name="sidebar" value="page-sidebar-fixed">
                                                        <label for="sidebar-fixed">Fixed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - sidebar -->

                                        <!-- Start category sidebar type -->
                                        <li class="sidebar-category">
                                            <span>SIDEBAR TYPE</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category sidebar type -->

                                        <!--/ Start navigation - sidebar -->
                                        <li>
                                            <ul class="list-unstyled sidebar-type-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-default" type="radio" name="sidebarType" value="">
                                                        <label for="sidebar-type-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-box" type="radio" name="sidebarType" value="sidebar-box">
                                                        <label for="sidebar-type-box">Box</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-rounded" type="radio" name="sidebarType" value="sidebar-rounded">
                                                        <label for="sidebar-type-rounded">Rounded</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="sidebar-type-circle" type="radio" name="sidebarType" value="sidebar-circle">
                                                        <label for="sidebar-type-circle">Circle</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - sidebar -->

                                        <!-- Start category footer -->
                                        <li class="sidebar-category">
                                            <span>FOOTER</span>
                                            <span class="pull-right"><i class="fa fa-toggle-on"></i></span>
                                        </li>
                                        <!--/ End category footer -->

                                        <!--/ Start navigation - footer -->
                                        <li>
                                            <ul class="list-unstyled footer-layout-setting">
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="footer-default" type="radio" name="footer" value="">
                                                        <label for="footer-default">Default</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="rdio rdio-theme">
                                                        <input id="footer-fixed" type="radio" name="footer" value="page-footer-fixed">
                                                        <label for="footer-fixed">Fixed</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - footer -->

                                    </ul>
                                    <!-- Start right navigation - menu -->
                                </div>
                            </div><!-- /#sidebar-layout -->
                            <div class="tab-pane in active" id="sidebar-setting">
                                <div class="sidebar-setting">
                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu">

                                        <!-- Start category color schemes -->
                                        <li class="sidebar-category">
                                            <span>COLOR SCHEMES</span>
                                            <span class="pull-right"><i class="fa fa-tint"></i></span>
                                        </li>
                                        <!--/ End category color schemes -->

                                        <!-- Start navigation - themes -->
                                        <li>
                                            <div class="sidebar-themes color-schemes">

                                                <a class="theme" href="javascript:void(0);" style="background-color: #81b71a" data-toggle="tooltip" data-placement="right" data-original-title="Default"><span class="hide">default</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #00B1E1" data-toggle="tooltip" data-placement="top" data-original-title="Blue"><span class="hide">blue</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #37BC9B" data-toggle="tooltip" data-placement="top" data-original-title="Cyan"><span class="hide">cyan</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #8CC152" data-toggle="tooltip" data-placement="top" data-original-title="Green"><span class="hide">green</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #E9573F" data-toggle="tooltip" data-placement="top" data-original-title="Red"><span class="hide">red</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #F6BB42" data-toggle="tooltip" data-placement="top" data-original-title="Yellow"><span class="hide">yellow</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #906094" data-toggle="tooltip" data-placement="top" data-original-title="Purple"><span class="hide">purple</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #D39174" data-toggle="tooltip" data-placement="top" data-original-title="Brown"><span class="hide">brown</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #9FB478" data-toggle="tooltip" data-placement="left" data-original-title="Green Army"><span class="hide">green-army</span></a>

                                                <a class="theme" href="javascript:void(0);" style="background-color: #63D3E9" data-toggle="tooltip" data-placement="right" data-original-title="Blue Sea"><span class="hide">blue-sea</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #5577B4" data-toggle="tooltip" data-placement="top" data-original-title="Blue Gray"><span class="hide">blue-gray</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #AF86B9" data-toggle="tooltip" data-placement="top" data-original-title="Purple Gray"><span class="hide">purple-gray</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #CC6788" data-toggle="tooltip" data-placement="top" data-original-title="Purple Wine"><span class="hide">purple-wine</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #F06F6F" data-toggle="tooltip" data-placement="top" data-original-title="Alizarin Crimson"><span class="hide">alizarin-crimson</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #979797" data-toggle="tooltip" data-placement="top" data-original-title="Black And White"><span class="hide">black-and-white</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #8BC4B9" data-toggle="tooltip" data-placement="top" data-original-title="Amazon"><span class="hide">amazon</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #B0B069" data-toggle="tooltip" data-placement="top" data-original-title="Amber"><span class="hide">amber</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #A9C784" data-toggle="tooltip" data-placement="left" data-original-title="Android green"><span class="hide">android-green</span></a>

                                                <a class="theme" href="javascript:void(0);" style="background-color: #B3998A" data-toggle="tooltip" data-placement="right" data-original-title="Antique brass"><span class="hide">antique-brass</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #8D8D6E" data-toggle="tooltip" data-placement="top" data-original-title="Antique Bronze"><span class="hide">antique-bronze</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #B0B69D" data-toggle="tooltip" data-placement="top" data-original-title="Artichoke"><span class="hide">artichoke</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #F19B69" data-toggle="tooltip" data-placement="top" data-original-title="Atomic Tangerine"><span class="hide">atomic-tangerine</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #98777B" data-toggle="tooltip" data-placement="top" data-original-title="Bazaar"><span class="hide">bazaar</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #C3A961" data-toggle="tooltip" data-placement="top" data-original-title="Bistre Brown"><span class="hide">bistre-brown</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #D6725E" data-toggle="tooltip" data-placement="top" data-original-title="Bittersweet"><span class="hide">bittersweet</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #7789D1" data-toggle="tooltip" data-placement="top" data-original-title="Blueberry"><span class="hide">blueberry</span></a>
                                                <a class="theme" href="javascript:void(0);" style="background-color: #6FA362" data-toggle="tooltip" data-placement="left" data-original-title="Bud Green"><span class="hide">bud-green</span></a>

                                            </div><!-- /.sidebar-themes -->
                                        </li>
                                        <!--/ End navigation - themes -->

                                        <!-- Start category navbar color -->
                                        <li class="sidebar-category">
                                            <span>NAVBAR COLOR</span>
                                            <span class="pull-right"><i class="fa fa-tint"></i></span>
                                        </li>
                                        <!--/ End category navbar color -->

                                        <!-- Start navigation - navbar color -->
                                        <li>
                                            <div class="sidebar-themes navbar-color">

                                                <a class="theme bg-dark" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Dark"><span class="hide">dark</span></a>
                                                <a class="theme bg-light" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Light"><span class="hide">light</span></a>
                                                <a class="theme bg-primary" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Primary"><span class="hide">primary</span></a>
                                                <a class="theme bg-success" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Success"><span class="hide">success</span></a>
                                                <a class="theme bg-info" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Info"><span class="hide">info</span></a>
                                                <a class="theme bg-warning" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Warning"><span class="hide">warning</span></a>
                                                <a class="theme bg-danger" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Danger"><span class="hide">danger</span></a>

                                            </div><!-- /.navbar-color -->
                                        </li>
                                        <!--/ End navigation - navbar color -->

                                        <!-- Start category sidebar color -->
                                        <li class="sidebar-category">
                                            <span>SIDEBAR COLOR</span>
                                            <span class="pull-right"><i class="fa fa-tint"></i></span>
                                        </li>
                                        <!--/ End category sidebar color -->

                                        <!-- Start navigation - sidebar color -->
                                        <li>
                                            <div class="sidebar-themes sidebar-color">

                                                <a class="theme bg-dark" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Dark"><span class="hide">dark</span></a>
                                                <a class="theme bg-light" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Light"><span class="hide">light</span></a>
                                                <a class="theme bg-primary" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Primary"><span class="hide">primary</span></a>
                                                <a class="theme bg-success" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Success"><span class="hide">success</span></a>
                                                <a class="theme bg-info" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Info"><span class="hide">info</span></a>
                                                <a class="theme bg-warning" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Warning"><span class="hide">warning</span></a>
                                                <a class="theme bg-danger" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Danger"><span class="hide">danger</span></a>

                                            </div><!-- /.sidebar-color -->
                                        </li>
                                        <!--/ End navigation - sidebar color -->

                                        <!-- Start category task progress -->
                                        <li class="sidebar-category">
                                            <span>TASK PROGRESS</span>
                                            <span class="pull-right"><i class="fa fa-sliders"></i></span>
                                        </li>
                                        <!--/ End category task progress -->

                                        <!--/ Start navigation - task progress -->
                                        <li>
                                            <ul class="list-group sidebar-task">
                                                <li class="list-group-item">
                                                    <p class="details"> <span> Core System </span> <span class="pull-right"> 82% </span> </p>
                                                    <div class="progress progress-xs progress-striped active no-margin">
                                                        <div style="width: 82%" class="progress-bar progress-bar-success"> </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="details"> <span> Front-End </span> <span class="pull-right"> 67% </span> </p>
                                                    <div class="progress progress-xs progress-striped active no-margin">
                                                        <div style="width: 47%" class="progress-bar progress-bar-danger"> </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <p class="details"> <span> Back-End </span> <span class="pull-right"> 45% </span> </p>
                                                    <div class="progress progress-xs progress-striped active no-margin">
                                                        <div style="width: 47%" class="progress-bar progress-bar-info"> </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End navigation - task progress -->

                                        <!-- Start category summary system -->
                                        <li class="sidebar-category">
                                            <span>SUMMARY SYSTEM</span>
                                            <span class="pull-right"><i class="fa fa-bar-chart-o"></i></span>
                                        </li>
                                        <!--/ End category summary system -->

                                        <!-- Start left navigation - summary -->
                                        <li>
                                            <ul class="sidebar-summary sparklines">
                                                <li>
                                                    <div class="list-info">
                                                        <span>Average Users</span>
                                                        <h4>1, 412, 101</h4>
                                                    </div>
                                                    <div class="chart"><span class="average">4,2,3,2,4,2,5,1,2,2,5,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="list-info">
                                                        <span>Daily Traffic</span>
                                                        <h4>781, 601</h4>
                                                    </div>
                                                    <div class="chart"><span class="traffic">1,2,3,2,4,1,5,3,2,4,2,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="list-info">
                                                        <span>Disk Usage</span>
                                                        <h4>52.2%</h4>
                                                    </div>
                                                    <div class="chart"><span class="disk">5,5,3,2,1,3,4,3,2,4,1,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <li>
                                                    <div class="list-info">
                                                        <span>CPU Usage</span>
                                                        <h4>67.8%</h4>
                                                    </div>
                                                    <div class="chart"><span class="cpu">1,5,3,2,4,5,5,3,2,4,5,3</span></div>
                                                    <div class="clearfix"></div>
                                                </li>
                                            </ul>
                                        </li>
                                        <!--/ End left navigation - summary -->

                                    </ul>
                                    <!-- Start right navigation - menu -->
                                </div>
                            </div><!-- /#sidebar-setting -->
                            <div class="tab-pane" id="sidebar-chat">
                                <div class="sidebar-chat">

                                    <form class="form-horizontal">
                                        <div class="form-group has-feedback">
                                            <input class="form-control" type="text" placeholder="Search messages...">
                                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                        </div>
                                    </form>

                                    <!-- Start right navigation - menu -->
                                    <ul class="sidebar-menu niceScroll">

                                        <!-- Start category family chat -->
                                        <li class="sidebar-category">
                                            <span>FAMILY</span>
                                            <span class="pull-right"><i class="fa fa-home"></i></span>
                                        </li>
                                        <!--/ End category family chat -->

                                        <li>
                                            <!-- Start chat - contact list -->
                                            <div class="media-list">
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Daddy Botak">
                                                        <i class="online"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Daddy Botak</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Sarah Tingting">
                                                        <i class="offline"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Sarah Tingting</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                        <span class="media-meta time">7 m</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Nicolas Olivier</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Harry Potret">
                                                        <i class="online"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Harry Potret</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Catherine Parker</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                            <!--/ End chat - contact list -->
                                        </li>

                                        <!-- Start category friends chat -->
                                        <li class="sidebar-category">
                                            <span>FRIENDS</span>
                                            <span class="pull-right"><i class="fa fa-group"></i></span>
                                        </li>
                                        <!--/ End category friends chat -->

                                        <li>
                                            <!-- Start chat - contact list -->
                                            <div class="media-list">
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Jeck Joko">
                                                        <i class="online"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Jeck Joko</span>
                                                        <span class="media-meta status">online</span>
                                                        <span class="media-meta device"><i class="fa fa-globe"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Tenny Imoet">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Tenny Imoet</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Leli Madang">
                                                        <i class="offline"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Leli Madang</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">2 m</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Rebecca Cabean">
                                                        <i class="offline"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Rebecca Cabean</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">8 m</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">ondoel return</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                            <!--/ End chat - contact list -->
                                        </li>

                                        <!-- Start category other chat -->
                                        <li class="sidebar-category">
                                            <span>OTHERS</span>
                                            <span class="pull-right"><i class="fa fa-share"></i></span>
                                        </li>
                                        <!--/ End category other chat -->

                                        <li>
                                            <!-- Start chat - contact list -->
                                            <div class="media-list">
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Sishy Mawar">
                                                        <i class="offline"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Sishy Mawar</span>
                                                        <span class="media-meta status">offline</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">23 m</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="Mbah Roso">
                                                        <i class="away"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Mbah Roso</span>
                                                        <span class="media-meta status">away</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                        <span class="media-meta time">2 h</span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                                <a href="#" class="media">
                                                    <div class="media-object pull-left has-notif">
                                                        <img src="http://img.djavaui.com/?create=30x30,4888E1?f=ffffff" class="img-circle" alt="...">
                                                        <i class="busy"></i>
                                                    </div><!-- /.media-object -->
                                                    <div class="media-body">
                                                        <span class="media-heading">Alma Butoi</span>
                                                        <span class="media-meta status">busy</span>
                                                        <span class="media-meta device"><i class="fa fa-mobile"></i></span>
                                                    </div><!-- /.media-body -->
                                                </a><!-- /.media -->
                                            </div><!-- /.media-list -->
                                            <!--/ End chat - contact list -->
                                        </li>

                                    </ul><!-- /.sidebar-menu -->
                                    <!-- Start right navigation - menu -->

                                </div><!-- /.sidebar-chat -->
                            </div><!-- /#sidebar-chat -->
                        </div>
                    </div>
                </div>

            </aside><!-- /#sidebar-right -->
            <!--/ END SIDEBAR RIGHT -->

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

        <!-- START @ADDITIONAL ELEMENT -->
       <!--  <div class="modal modal-success fade" id="modal-bootstrap-tour" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document" style="margin: 150px auto;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Welcome to Blankon</h4>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left" style="padding-right: 15px;">
                                <a href="#">
                                    <img data-no-retina class="media-object" src="http://img.djavaui.com/?create=100x180,81B71A?f=ffffff" alt="..." style="width: 100px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Hello, my name is Mr.Blankon</h4>
                                <b>Introduction</b> - Blankon fullpack admin theme is a theme full pack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="BlankonDashboard.callModal2()" data-dismiss="modal">Let's tour <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="modal modal-success fade" id="modal-bootstrap-tour-new-features" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document" style="margin: 150px auto;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">New Features</h4>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Description</th>
                                    <th style="width: 90px" class="text-center">Live preview</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="min-width: 150px">
                                            Blankon Project Management
                                        </td>
                                        <td>
                                            It is a design speciality for project management designs, there are many features for support all system project management. Such as Dashboard design with overview count project, progress chart and widget calendar and amazing others design do you need!
                                        </td>
                                        <td class="text-center">
                                            <a href="production/admin-special/project-management/index.html" target="_blank" class="btn btn-block btn-primary">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="min-width: 150px">
                                            Frontend themes REVOLUTION SLIDER
                                        </td>
                                        <td>
                                            Slider Revolution is an innovative, responsive jQuery Slider Plugin that displays your content the beautiful way. Whether it's a Slider, Carousel, Hero Scene or even a whole Front Page, you will be telling your own stories in no time!
                                        </td>
                                        <td class="text-center">
                                            <a href="production/admin/html/frontend-themes-3.html" target="_blank" class="btn btn-block btn-primary">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="BlankonDashboard.handleTour()" data-dismiss="modal">Next</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-danger fade" id="modal-bootstrap-tour-end" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document" style="margin: 150px auto;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">End Blankon Tour</h4>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img data-no-retina class="media-object" src="http://img.djavaui.com/?create=100x180,81B71A?f=ffffff" alt="..." style="width: 100px;">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Thanks for watching!</h4>
                                <p>Thank you for view our blankon tour. If you already purchased Blankon and then you have any questions that are beyond the scope of this help file. You can visit us on below :</p>
                                <ul class="list-inline">
                                    <li>
                                        <a href="https://wrapbootstrap.com/user/djavaui" class="btn btn-inverse tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Wrapbootstrap">W</a>
                                    </li>
                                    <li>
                                        <a href="http://djavaui.com" class="btn btn-lilac tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Our Website"><i class="fa fa-globe"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/djavaui/" class="btn btn-facebook tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/djavaui" class="btn btn-twitter tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/102744122511959250698" class="btn btn-googleplus tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Google+"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/djavaui" class="btn btn-default tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Github"><i class="fa fa-github"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCt_dudJF4_0bOkQkwYN2qQQ" class="btn btn-youtube tooltips" target="_blank" data-toggle="tooltip" data-placement="top" data-title="Youtube"><i class="fa fa-youtube"></i></a>
                                    </li>
                                </ul>
                                <b>Thanks so much!</b>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="BlankonDashboard.handleTour()" data-dismiss="modal">Let's tour again <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!--/ END ADDITIONAL ELEMENT -->

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
        <script src="assets/global/plugins/bower_components/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js"></script>
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
        <script src="assets/global/plugins/bower_components/counter-up/jquery.counterup.min.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="assets/admin/js/apps.js"></script>
        <script src="assets/admin/js/pages/blankon.dashboard.js"></script>
        <script src="assets/admin/js/demo.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION --> 
    </body>
    <!--/ END BODY -->

</html>
