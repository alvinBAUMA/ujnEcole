<?php
require '../config/constantes.php';
require CORE.DS."includes.php";
require '../controller/AccueilController.php';

$Accueil = new AccueilController();

$Accueil->loadView("index", "bienvenue");
