<?php
require '../config/constantes.php';
require CORE.DS."includes.php";
require '../controller/AccueilController.php';

$Accueil = new AccueilController();

require_once '../vues/addstore/choisir_abonnement.php';