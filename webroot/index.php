<?php

require "../core/includes.php";
require '../controller/BienvenueController.php';
require '../model/UserModel.php';

$index = new BienvenueController();


//TRAITEMENT DE LA CONNEXION
//***************************
// si le fourmulaire d'inscription a ete soumis
if (isset($_POST["connexion"])) {
    // on cree un tableau erreurs qui contiendra l'ensemble des nos erreurs
    $erreurs = [];
    $token1 = rand(10000000, 99999999);
    // si tous les champs sont remplis
    if (champs_non_vide(['identifiant', 'motdepasse'])) {
        extract($_POST);


        $user = UserModel::selectUserByLogin($identifiant, $motdepasse);

        if ($user) {

            $_SESSION['id'] = $user->id;
            $_SESSION['prenom'] = $user->prenom;
            $_SESSION['nom'] = $user->nom;

            // creation des cookies
            $id_cookie = $token1 . ($user->id + 111);
            setcookie("token_id", $id_cookie, time() + 3600 * 24 * 365, null, null, FALSE, TRUE);
            setcookie("token_hash", $user->motdepasse, time() + 3600 * 24 * 365, null, null, FALSE, TRUE);

            //On redirige l'utilisateur sur la page d'acceuil
            rediriger('accueil.php');
            
        } else {
            //msg_flash("salut");
            $erreurs[] = "Combinaison identifiant/mot de passe incorrect";
        }
    } else {
        $erreurs[] = "Veillez remplir tous les champs";
    }
} 
//***************************
// FIN TRAITEMENT DE LA CONNEXION
//***************************

require_once '../vues/bienvenue/index.php';


