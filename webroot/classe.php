<?php
session_start();
require '../config/constantes.php';
require CORE.DS."includes.php";
//require ('../filtre/auth_filtre.php');
//require ('../filtre/boutique_filtre.php');

if(isset($_GET['ref']) && $_GET['ref'] == "liste_presence"){
    require_once '../vues/classe/liste_presence.vue.php';
} elseif (isset($_GET['ref']) && $_GET['ref'] == "add_presence") {
    require_once '../vues/classe/add_presence.vue.php';
}elseif (isset($_GET['ref']) && $_GET['ref'] == "show_cote") {
    require_once '../vues/classe/show_cote.vue.php';
}


