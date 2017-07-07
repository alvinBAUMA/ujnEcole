<?php
define("WEBROOT", dirname(__FILE__));
define("ROOT", dirname(WEBROOT));
define("DS", DIRECTORY_SEPARATOR); /** @DS le separateur slash pour linux ou anti slash pour windows*/
define("CORE", ROOT.DS.'core');
define("BASE_URL", dirname(dirname($_SERVER['SCRIPT_NAME'])));/** @BASE_URL l'url de base du site like https://www.evoting.com*/

define("NOM_APPLI", "Ujn Ecole");

