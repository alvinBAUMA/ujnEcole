<?php

session_start();
require "../core/includes.php";
require '../filtre/visiteur_filtre.php';

if (isset($_POST["connexion"])) {
    if (isset($_POST['login']) and $_POST['login'] == "EN-123456") {
        rediriger("gClasse?ref=liste_presence");
    } elseif (($_POST['login']) and $_POST['login'] == "SE-123456") {
        rediriger("gInscription?ref=historique");
    }elseif (($_POST['login']) and $_POST['login'] == "FI-123456") {
        rediriger("gPaiement?ref=historique");
    }elseif (($_POST['login']) and $_POST['login'] == "EV-123456") {
        rediriger("gEvaluation?ref=historique");
    } else {
        msg_flash("Login Incorrect");
    }
}

require_once '../vues/bienvenue/index.php';


