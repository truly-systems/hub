<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
        <meta name="keywords" content="admin, admin template, bootstrap3, clean, fontawesome4, good documentation, lightweight admin, responsive dashboard, webapp">
        <meta name="author" content="Djava UI">
        <title>LOGIN | Truly Systems </title>
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
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @PAGE LEVEL STYLES -->
        <link href="assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <!--/ END PAGE LEVEL STYLES -->

        <!-- START @THEME STYLES -->
        <link href="assets/admin/css/reset.css" rel="stylesheet">
        <link href="assets/admin/css/layout.css" rel="stylesheet">
        <link href="assets/admin/css/components.css" rel="stylesheet">
        <link href="assets/admin/css/plugins.css" rel="stylesheet">
        <link href="assets/admin/css/themes/default.theme.css" rel="stylesheet" id="theme">
        <link href="assets/admin/css/pages/sign.css" rel="stylesheet">
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
	|  11. @SIGN WRAPPER                |  Wrapping sign design                                                               |
	|=========================================================================================================================|
	|  12. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
	|  13. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
	|=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="page-sound">

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @SIGN WRAPPER -->
        <div id="sign-wrapper">

            <!-- Brand -->
            <div class="brand">
                <img src="img/truly.png" alt="brand logo"/>
            </div>
            <!--/ Brand -->

            <!-- Login form -->
            <form class="sign-in form-horizontal shadow rounded no-overflow" action="javascript:func()" method="post">
                <div class="sign-header">
                    <div class="form-group">
                        <div class="sign-text">
                            <span>Hub Truly</span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-header -->
                <div class="sign-body">
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="text" class="form-control input-sm" id="username" placeholder="Usuário" name="username">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="password" class="form-control input-sm" id="password" placeholder="Senha" name="password">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-body -->
                <div class="sign-footer">
                    <div class="form-group">
                        
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Entrar</button>
                        <div id="msgResposta"></div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-footer -->
            </form><!-- /.form-horizontal -->
            <!--/ Login form -->

            <!-- Content text -->
            <!-- <p class="text-muted text-center sign-link">Need an account? <a href="page-signup.html"> Sign up free</a></p> -->
            <!--/ Content text -->

        </div><!-- /#sign-wrapper -->
        <!--/ END SIGN WRAPPER -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <script src="assets/global/plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js"></script>
        <script src="assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js"></script>
        <script src="assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js"></script>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="assets/admin/js/pages/blankon.sign.js"></script>
        <script src="assets/admin/js/demo.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->


    </body>
    <!-- END BODY -->

</html>