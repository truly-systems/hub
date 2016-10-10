<?php
session_start();

if (isset($_GET['locale']) && !empty($_GET['locale']))
{
  $_SESSION["lang"] = $_GET['locale'];
}

require_once('lang.php');
require_once('i18n.php');
?>
<!DOCTYPE html>
 <html lang="en">

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
         <title><?php echo __('HUB | Truly'); ?></title>

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

    </head>
    <body>

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
                            <span><?php echo __('Hub Truly'); ?></span>
                        </div>
                    </div><!-- /.form-group -->
                </div><!-- /.sign-header -->
                <div class="sign-body">
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="text" class="form-control input-sm" id="username" placeholder="<?php echo __('Usuário'); ?>" name="username">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <div class="input-group input-group-lg rounded no-overflow">
                            <input type="password" class="form-control input-sm" id="password" placeholder="<?php echo __('Senha'); ?>" name="password">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <div class="rounded no-overflow">
                            <select id="lang" name="lang" class="form-control">
                                <option value="en_US">Inglês</option>
                                <option value="pt_BR">Português Brasil</option>
                            </select>
                        </div>
                    </div><!-- /.form-group -->

                </div><!-- /.sign-body -->
                <div class="sign-footer">
                    <div class="form-group">
                        
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn"><?php echo __('Entrar'); ?></button>

                        <div id="msgResposta" style="margin-top:5px;"></div>

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

        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <!-- <script src="assets/global/plugins/bower_components/jquery-validation/dist/jquery.validate.min.js"></script> -->
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <script src="assets/admin/js/funcoes.js"></script>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->
        </body>
        </html>