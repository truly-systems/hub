<?php
require 'lang.php';


$locale = "pt_BR";
$textdomain = "hub";
$locales_dir = dirname(__FILE__) . '/i18n';

if (isset($_SESSION["lang"])) {
		$locale = $_SESSION["lang"];
}


// if (isset($_GET['locale']) && !empty($_GET['locale']) and !isset($_SESSION["lang"]))
// {
//   $locale = $_GET['locale'];
//   $_SESSION["lang"] = $locale;
// }

putenv('LANGUAGE=' . $locale);
putenv('LANG=' . $locale);
putenv('LC_ALL=' . $locale);
putenv('LC_MESSAGES=' . $locale);
 
require_once('lib/gettext.inc');
 
_setlocale(LC_ALL, $locale);
_setlocale(LC_CTYPE, $locale);
 
_bindtextdomain($textdomain, $locales_dir);
_bind_textdomain_codeset($textdomain, 'UTF-8');
_textdomain($textdomain);
 
function _e($string) {
  echo __($string);
}