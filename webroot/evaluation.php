<?php
session_start();
require '../config/constantes.php';
require CORE.DS."includes.php";
//require ('../filtre/auth_filtre.php');
//require ('../filtre/boutique_filtre.php');

if(isset($_GET['ref']) && $_GET['ref'] == "historique"){
    require_once '../vues/evaluation/historique.vue.php';
} 