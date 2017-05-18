<?php

/*** 
 * FONCTION SPECIALE POUR LA GESTON DE SCOLARITE
 */
if (!function_exists("selectAllFaculties")) {

    function selectAllFaculties() {
        global $bd;
        $q = $bd->prepare("SELECT * FROM facultes");
        $q->execute();
        $facs = $q->fetchAll(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $facs;
    }

}


if (!function_exists("selectFacultyById")) {

    function selectFacultyById($facId) {
        global $bd;
        $q = $bd->prepare("SELECT * FROM facultes WHERE id_fac=:id_fac");
        $q->execute([
            "id_fac" => $facId
        ]);
        $fac = $q->fetch(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $fac;
    }

}

if (!function_exists("selectAllDepartementsByFacId")) {

    function selectAllDepartementsByFacId($facId) {
        global $bd;
        $q = $bd->prepare("SELECT * FROM departements WHERE faculte_id=:faculte_id");
        $q->execute([
            "faculte_id" => $facId
        ]);
        $departements = $q->fetchAll(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $departements;
    }

}
if (!function_exists("selectAllPromotions")) {

    function selectAllPromotions() {
        global $bd;
        $q = $bd->prepare("SELECT * FROM promotions");
        $q->execute();
        $promotions = $q->fetchAll(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $promotions;
    }

}


/*** 
 *FIN ----- FONCTION SPECIALE POUR LA GESTON DE SCOLARITE
 */















//fonction qui detecte l'appareil de l'utilisateur
if (!function_exists("isMobile")) {

    function isMobile() {
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

//fonction qui echappe ce que l'utilisateur entre, pour eviter les failles xss
if (!function_exists("echapper")) {

    function echapper($string) {

        if ($string) {
            return htmlspecialchars(trim(strip_tags($string)));
        }
    }

}

//fonction qui enregistre un poste dans all_postes
if (!function_exists("savePoste")) {

    function savePoste($sujet_id, $type) {
        global $bd;
        $q = $bd->prepare('INSERT INTO all_postes (sujet_poste_id, type)'
                . 'VALUES(:sujet_poste_id, :type)');
        $q->execute([
            "sujet_poste_id" => $sujet_id,
            "type" => $type
        ]);
        return TRUE;
    }

}
//recupere le dernier poste posté par l'utilisateur
if (!function_exists("recupereDernierPoste")) {

    function recupereDernierPoste($type) {
        global $bd;
        $q = $bd->prepare("SELECT id FROM $type WHERE user_id=:user_id ORDER BY id DESC LIMIT 1");
        $q->execute([
            "user_id" => $_SESSION['id']
        ]);
        $dernierPoste = $q->fetch(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $dernierPoste;
    }

}



//recupere les departement et promtion by facule
if (!function_exists("recupereDepartementByfaculteId")) {

    function recupereDepartementByfaculteId($fac_id) {
        global $bd;
        $q = $bd->prepare("SELECT * FROM departements WHERE id_faculte=:id_faculte");
        $q->execute([
            "id_faculte" => $fac_id
        ]);
        $alldepartement = $q->fetchAll(PDO::FETCH_OBJ);
        return $alldepartement;
    }

}


//recupere le dernier produit poste par l'utilisateur
if (!function_exists("recupereDernierProduit")) {

    function recupereDernierProduit() {
        global $bd;
        $q = $bd->prepare("SELECT id FROM produits WHERE id_vendeur=:id_vendeur ORDER BY id DESC LIMIT 1");
        $q->execute([
            "id_vendeur" => $_SESSION['id']
        ]);
        $dernierProduit = $q->fetch(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $dernierProduit;
    }

}

//recupere les blog suggere a l'utilisateur selon ces choix
if (!function_exists("recupereBlogSuggere")) {

    function recupereBlogSuggere() {
        global $bd;
        $reqBlog = $bd->prepare('SELECT id, url_icon, nom FROM blogs ORDER BY id DESC LIMIT 5');
        $reqBlog->execute();
        $blogs = $reqBlog->fetchAll(PDO::FETCH_OBJ);
        $reqBlog->closeCursor();

        return $blogs;
    }

}

//recupere les pays
if (!function_exists("recupererPays")) {

    function recupererPays() {
        global $bd;
        $reqPays = $bd->prepare('SELECT * FROM pays ORDER BY nom_fr_fr');
        $reqPays->execute();
        $pays = $reqPays->fetchAll(PDO::FETCH_OBJ);
        $reqPays->closeCursor();

        return $pays;
    }

}

//fonction qui recupre les ville par pays
if (!function_exists("recupererVilleParPays")) {

    function recupererVilleParPays($id_pays) {
        global $bd;
        $reqVille = $bd->prepare('SELECT * FROM ville WHERE id_pays=:id_pays');
        $reqVille->execute(['id_pays' => $id_pays]);
        $villes = $reqVille->fetchAll(PDO::FETCH_OBJ);
        $reqVille->closeCursor();

        return $villes;
    }

}

//Fonction qui affiche l'avatar par defaut de l'utilisateur

if (!function_exists("avatar_url")) {

    function avatar_url($email, $size = 25) {
        return "http://gravatar.com/avatar/" . md5(strtolower(trim(echapper($email)))) . "?s=" . $size;
    }

}

//FONCTION DE COMPRESSION ET ENVOIE  DE PHOTO
if (!function_exists("compressionPhoto")) {

    function compressionPhoto($tmp, $ext, $larguerDeComp, $tauxDeCompIn0et100, $repertoireDest, $nomDest) {
        if ($ext == "png" || $ext == "PNG" ||
                $ext == "jpg" || $ext == "JPG" ||
                $ext == "jpeg" || $ext == "JPEG" ||
                $ext == "gif" || $ext == "GIF") {
            if ($ext == "jpg" || $ext == "jpeg" || $ext == "JPEG" || $ext == "JPG") {
                $src = imagecreatefromjpeg($tmp);
            }
            if ($ext == "png" || $ext == "PNG") {
                $src = imagecreatefrompng($tmp);
            }
            if ($ext == "gif" || $ext == "GIF") {
                $src = imagecreatefromgif($tmp);
            }

            list($width_min, $height_min) = getimagesize($tmp);

            $newwidth_min = $larguerDeComp; //creation de la compression apartir de la largeur
            $newheight_min = ($height_min / $width_min) * $newwidth_min; // equation de la compression en hauteur

            $tmp_min = imagecreatetruecolor($newwidth_min, $newheight_min);

            imagecopyresampled($tmp_min, $src, 0, 0, 0, 0, $newwidth_min, $newheight_min, $width_min, $height_min); // compression de l'image
            imagejpeg($tmp_min, $repertoireDest . "/" . $nomDest . "." . $ext, $tauxDeCompIn0et100); //copier l'image dans le dossier.

            return true;
        }
    }

}

//fonction qui verifie si les champs ne sont pas vide...
// le parametre est un tableau contenent les champs
if (!function_exists("champs_non_vide")) {

    function champs_non_vide($fields = []) {
        // on verifie si au moins un champs est donne
        if (count($fields) != 0) {
            foreach ($fields as $field) {
                if (empty($_POST[$field]) || trim($_POST[$field]) == "") {
                    return false;
                }
            }
            return true;
        }
    }

}

// la fonction pour verifier si une valeur est deja utilisee dans la base de donne avec trois paramentre
// parametre1= valeur entree, par2=nom du champs, par3=nom de la table
if (!function_exists("deja_utilise")) {

    function deja_utilise($champs, $valeur, $table) {
        global $bd;
        $q = $bd->prepare("SELECT * FROM $table WHERE $champs = ?");
        $q->execute([$valeur]);

        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }

}


// verifier si l'horoscope du jour est disponible selon le code astral
if (!function_exists("horoscopeDisponible")) {

    function horoscopeDisponible($codeAstral) {
        global $bd;
        $q = $bd->prepare("SELECT * FROM horoscopes WHERE code_astrologique =:code_astrologique AND date=:date");
        $q->execute([
            "code_astrologique" => $codeAstral,
            "date" => date("Y-m-d")
        ]);

        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }

}

// verifier si tous les horoscopes du jours sont disponible
if (!function_exists("horoscopeTousDispo")) {

    function horoscopeTousDispo() {
        global $bd;
        $q = $bd->prepare("SELECT * FROM horoscopes WHERE date=:date");
        $q->execute([
            "date" => date("Y-m-d")
        ]);

        $count = $q->rowCount();

        $q->closeCursor();
        if ($count == 12) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}



//fonction qui verifie si deux utilisateur correspondent deja
if (!function_exists("isCorrespondant")) {

    function isCorrespondant($user_id1, $user_id2) {
        global $bd;
        $req = "SELECT status FROM correspondance WHERE (user_id1=$user_id1 AND user_id2=$user_id2) OR (user_id1=$user_id2 AND user_id2=$user_id1)";
        $q = $bd->prepare($req);
        $q->execute();
        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }

}

//fonction qui verifie si un utilisateur a envoyer une demande a l'autre
if (!function_exists("demandeEncours")) {

    function demandeEncours($user_id1, $user_id2) {
        global $bd;
        $req = "SELECT id FROM demande_unique WHERE (user_id1=$user_id1 AND user_id2=$user_id2) OR (user_id1=$user_id2 AND user_id2=$user_id1)";
        $q = $bd->prepare($req);
        $q->execute();
        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }

}

//fonction qui verifie si un utilisateur a disponible dans la rencontre+
if (!function_exists("demandeGlobalEncours")) {

    function demandeGlobalEncours($user_id) {
        global $bd;
        $req = "SELECT id FROM demande WHERE user_id=:user_id";
        $q = $bd->prepare($req);
        $q->execute(['user_id' => $user_id]);
        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }

}

//fonction qui verifie si un utiliateur suit un blog
if (!function_exists("suitBlog")) {

    function suitBlog($user_id, $blog_id) {
        global $bd;
        $q = $bd->prepare("SELECT * FROM suivre_blog WHERE user_id=:user_id AND blog_id=:blog_id");
        $q->execute([
            'user_id' => $user_id,
            'blog_id' => $blog_id
        ]);
        $q->execute();
        $count = $q->rowCount();

        $q->closeCursor();

        return $count;
    }

}

// fonction de msg de notification, message flash...
if (!function_exists("msg_flash")) {

    //on cree une fonction qui affichera les msg flash
    // avec 2 parametre, 1=> le message, 2=> le type de msg
    function msg_flash($message, $type = "success") {
        // on enregistre l;e msg dans la variable session
        $_SESSION['notification']['message'] = $message;
        $_SESSION['notification']['type'] = $type;
    }

}

// fonction  qui redirige l'utilisateur a une autre page entree en parametre
if (!function_exists("rediriger")) {

    function rediriger($page) {
        header('location:' . $page);
        exit();
    }

}

// fonction  qui redirige l'utilisateur a une autre page entree en parametre
if (!function_exists("garderValeurchamp")) {

    function garderValeurchamp() {
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'motdepasse') === false) {
                $_SESSION['input'][$key] = $value;
            }
        }
    }

}

//fonction qui verifie et renvoie les blogs de l'utilisateur en session
if (!function_exists("userHaveBlog")) {

    function userHaveBlog($user_id) {
        global $bd;
        // on selectionne tous les messages de l'utilisateur
        $q = $bd->prepare('SELECT * FROM blogs '
                . 'WHERE user_id=:user_id');
        $q->execute([
            "user_id" => $user_id,
        ]);
        $blogUserSessions = $q->fetchAll(PDO::FETCH_OBJ);
        return $blogUserSessions;
    }

}

//fonction qui verifie et renvoie les boutique de l'utilisateur
if (!function_exists("userHaveBoutique")) {

    function userHaveBoutique($user_id) {
        global $bd;
        // on selectionne tous les messages de l'utilisateur en session
        $q = $bd->prepare('SELECT * FROM boutiques '
                . 'WHERE user_id=:user_id');
        $q->execute([
            "user_id" => $user_id,
        ]);
        $boutiqueUser = $q->fetchAll(PDO::FETCH_OBJ);
        return $boutiqueUser;
    }

}

if (!function_exists("recupererValeurchamp")) {

    function recupererValeurchamp($key) {
        if (!empty($_SESSION['input'][$key])) {
            return echapper($_SESSION['input'][$key]);
        } else {
            return NULL;
        }
    }

}

if (!function_exists("effacerChamps")) {

    function effacerChamps() {
        if (isset($_SESSION['input'])) {
            $_SESSION['input'] = [];
        }
    }

}

// fonction de recuperation des information d'un utilisateur
if (!function_exists("recupereInfoMembreParId")) {

    function recupereInfoMembreParId($id) {
        global $bd;

        $req = $bd->prepare('SELECT * FROM membres '
                . 'WHERE id=?');
        $req->execute([$id]);
        $user = $req->fetch(PDO::FETCH_OBJ);
        $req->closeCursor();

        return $user;
    }

}

// fonction de recuperation des information d'un utilisateur
if (!function_exists("recupereInfoMembreParTelephone")) {

    function recupereInfoMembreParTelephone($telephone) {
        global $bd;

        $req = $bd->prepare('SELECT * FROM membres '
                . 'WHERE telephone=?');
        $req->execute([$telephone]);
        $user = $req->fetch(PDO::FETCH_OBJ);
        $req->closeCursor();

        return $user;
    }

}

//recupere blog par id
if (!function_exists("recupereInfoMembreParId")) {

    function recupereInfoMembreParId($id) {
        global $bd;

        $req = $bd->prepare('SELECT * FROM membres '
                . 'WHERE id=?');
        $req->execute([$id]);
        $user = $req->fetch(PDO::FETCH_OBJ);
        $req->closeCursor();

        return $user;
    }

}

// fonction de recuperation des les produit trie par categorie
if (!function_exists("recupereBlogParId")) {

    function recupereBlogParId($id) {
        global $bd;

        $q = $bd->prepare("SELECT *, libelle_cat AS categorie FROM blogs JOIN categorie_blog ON blogs.id_categorie = categorie_blog.id WHERE blogs.id = :id");
        $q->execute([
            "id" => $id
        ]);
        $blog = $q->fetch(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $blog;
    }

}

// fonction de recuperation des les produit trie par categorie
if (!function_exists("recupereProduitParId")) {

    function recupereProduitParId($id) {
        global $bd;

        $q = $bd->prepare("SELECT * FROM produits WHERE id=?");
        $q->execute([$id]);
        $Produitid = $q->fetch(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $Produitid;
    }

}

// fonction de recuperation des les produit trie par categorie
if (!function_exists("recupereProduitParCategorie")) {

    function recupereProduitParCategorie($categorie, $limit) {
        global $bd;

        $q = $bd->prepare('SELECT * FROM produits '
                . 'WHERE categories=:categories ORDER BY id LIMIT ' . $limit);
        $q->execute([
            "categories" => $categorie,
        ]);
        $Produitcat = $q->fetchAll(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $Produitcat;
    }

}

// fonction de recuperation des les produit trie par categorie
if (!function_exists("recupereProduitParCategorieSs")) {

    function recupereProduitParCategorieSs($categorie, $limit) {
        global $bd;

        $q = $bd->prepare('SELECT * FROM produits '
                . 'WHERE categories=:categories ORDER BY id LIMIT ' . $limit);
        $q->execute([
            "categories" => $categorie,
        ]);
        $Produitcat = $q->fetchAll(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $Produitcat;
    }

}

//recupere une boutique par id
if (!function_exists("recupereBoutiqueParId")) {

    function recupereBoutiqueParId($id) {
        global $bd;

        $q = $bd->prepare("SELECT * FROM boutiques WHERE id=?");
        $q->execute([$id]);
        $boutique = $q->fetch(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $boutique;
    }

}

//fonction qui verifie si l'utilisateur est connecte
if (!function_exists("isConnected")) {

    function isConnected() {
        if (isset($_SESSION['id'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

//fonction qui donne le code astrologique
if (!function_exists("codeAstrologique")) {

    function codeAstrologique($jour, $moi) {
        if (($moi == 12 and ( $jour > 21 and $jour < 32) or ( $moi == 1 and ( $jour > 0 and $jour < 21)))) {
            //code 1, signe: CAPRICORNE
            return 1;
        } elseif (($moi == 1 and ( $jour > 20 and $jour < 32) or ( $moi == 2 and ( $jour > 0 and $jour < 19)))) {
            //code 2, signe VERSEAU
            return 2;
        } elseif (($moi == 2 and ( $jour > 18 and $jour < 32) or ( $moi == 3 and ( $jour > 0 and $jour < 21)))) {
            //code 3, signe POISSON
            return 3;
        } elseif (($moi == 3 and ( $jour > 20 and $jour < 32) or ( $moi == 4 and ( $jour > 0 and $jour < 21)))) {
            //code 4, signe BELIER
            return 4;
        } elseif (($moi == 4 and ( $jour > 20 and $jour < 32) or ( $moi == 5 and ( $jour > 0 and $jour < 21)))) {
            //code 5, signe TAUREAU
            return 5;
        } elseif (($moi == 5 and ( $jour > 20 and $jour < 32) or ( $moi == 6 and ( $jour > 0 and $jour < 21)))) {
            //code 6, signe GEMAUX
            return 6;
        } elseif (($moi == 6 and ( $jour > 20 and $jour < 32) or ( $moi == 7 and ( $jour > 0 and $jour < 23)))) {
            //code 7, signe CANCER
            return 7;
        } elseif (($moi == 7 and ( $jour > 22 and $jour < 32) or ( $moi == 8 and ( $jour > 0 and $jour < 22)))) {
            //code 8, signe LION
            return 8;
        } elseif (($moi == 8 and ( $jour > 24 and $jour < 32) or ( $moi == 9 and ( $jour > 0 and $jour < 23)))) {
            //code 9, signe VIERGE
            return 9;
        } elseif (($moi == 9 and ( $jour > 24 and $jour < 32) or ( $moi == 10 and ( $jour > 0 and $jour < 24)))) {
            //code 10, signe BALANCE
            return 10;
        } elseif (($moi == 10 and ( $jour > 23 and $jour < 32) or ( $moi == 11 and ( $jour > 0 and $jour < 23)))) {
            //code 11, signe SCORPION
            return 11;
        } elseif (($moi == 11 and ( $jour > 22 and $jour < 32) or ( $moi == 12 and ( $jour > 0 and $jour < 22)))) {
            //code 12, signe SAGITTAIRE
            return 12;
        } else {
            return 0;
        }
    }

}

//fonction qui recupere l'horoscope du jour
if (!function_exists("horoscopeDuJour")) {

    function horoscopeDuJour($codeAstro) {
        $date = date("Y-m-d");
        global $bd;
        $a = $bd->prepare('SELECT * FROM horoscopes WHERE code_astrologique=:code_astrologique AND date=:date');
        $a->execute([
            "code_astrologique" => $codeAstro,
            "date" => $date
        ]);
        $horoscope = $a->fetch(PDO::FETCH_OBJ);
        $a->closeCursor();
        return $horoscope;
    }

}

//fonction qui retourne l'image astrologique selon le signe
if (!function_exists("imgAstro")) {

    function imgAstro($codeAstro) {
        if ($codeAstro == 1) {
            $url_img = '<img src="img/img_astrologie/capricorne.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 2) {
            $url_img = '<img src="img/img_astrologie/verseau.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 3) {
            $url_img = '<img src="img/img_astrologie/poisson.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 4) {
            $url_img = '<img src="img/img_astrologie/belier.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 5) {
            $url_img = '<img src="img/img_astrologie/taureau.png" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 6) {
            $url_img = '<img src="img/img_astrologie/gemeaux.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 7) {
            $url_img = '<img src="img/img_astrologie/cancer.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 8) {
            $url_img = '<img src="img/img_astrologie/lion.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 9) {
            $url_img = '<img src="img/img_astrologie/vierge.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 10) {
            $url_img = '<img src="img/img_astrologie/balance.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 11) {
            $url_img = '<img src="img/img_astrologie/scorpion.jpg" class="img-responsive" alt=""/>';
        } elseif ($codeAstro == 12) {
            $url_img = '<img src="img/img_astrologie/sagittaire.jpg" class="img-responsive" alt=""/>';
        }
        return $url_img;
    }

}

// gere l'etat active de differente action de la page d'accueil
if (!function_exists("act_active")) {

    function act_active($chemin) {
        //on recupere la page en cours
        $page = trim(strrchr("explode('/', " . $_SERVER['REQUEST_URI'], '/'), '/');
        if ($chemin == $page) {
            return "active";
        } else {
            return "";
        }
    }

}

// gere l'etat active de menu
if (!function_exists("menu_active")) {

    function menu_active($menu_act) {
        //on recupere la page en cours
        $menu = trim(strrchr("explode('/', " . $_SERVER['SCRIPT_NAME'], '/'), '/');
        if ($menu_act == $menu) {
            return "active";
        } else {
            return "";
        }
    }

}

//fonction qui  verifie si l'utilisateur en session a deja_donner_etoile au micropost
if (!function_exists("deja_donner_etoile")) {

    function deja_donner_etoile($poste_id) {
        global $bd;
        $s = $bd->prepare('SELECT id FROM etoile WHERE user_id=:user_id and poste_id=:poste_id');
        $s->execute([
            "user_id" => $_SESSION['id'],
            "poste_id" => $poste_id
        ]);
        return (bool) $s->rowCount();
    }

}

//fonction qui  returne le nombre de gens qui ont donner une etoile
if (!function_exists("get_etoile_count")) {

    function get_etoile_count($poste_id) {
        global $bd;
        $s = $bd->prepare('SELECT nombre_etoile FROM postes WHERE id=:id');
        $s->execute([
            "id" => $poste_id
        ]);
        $data = $s->fetch(PDO::FETCH_OBJ);
        return intval($data->nombre_etoile);
    }

}
//fonction qui  affiche les personnes_qui_donnent_etoile
if (!function_exists("personnes_qui_donnent_etoile")) {

    function personnes_qui_donnent_etoile($poste_id) {
        global $bd;
        $q = $bd->prepare('SELECT membres.id, membres.prenom FROM membres '
                . 'LEFT JOIN etoile ON membres.id = etoile.user_id'
                . ' WHERE poste_id = ? ORDER BY etoile.date LIMIT 3');
        $q->execute([$poste_id]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    }

}

// fonction de recuperation des les produit trie par categorie
if (!function_exists("recupereProduitParCategorie")) {

    function recupereProduitParCategorie($categorie, $limit) {
        global $bd;

        $q = $bd->prepare('SELECT * FROM produits '
                . 'WHERE categories=:categories ORDER BY id LIMIT ' . $limit);
        $q->execute([
            "categories" => $categorie,
        ]);
        $Produitcat = $q->fetchAll(PDO::FETCH_OBJ);
        $q->closeCursor();

        return $Produitcat;
    }

}

//fonction qui  affiche_qui_donnent_etoile"
if (!function_exists("affiche_qui_donnent_etoile")) {

    function affiche_qui_donnent_etoile($poste_id) {
        $etoile_count = get_etoile_count($poste_id);
        $noms = personnes_qui_donnent_etoile($poste_id);
        $output = '';
        foreach ($noms as $nom) {
            $output = "<a href='profil.php?id=" . $nom->id . "&amp;act=postes'>" . $nom->prenom . "</a> ";
        }
        return $output;
    }

}
//fonction qui recupere un poste par id
if (!function_exists("recuperePosteParId")) {

    function recuperePosteParId($poste_id) {
        global $bd;
        $a = $bd->prepare('SELECT * FROM postes WHERE id=:id');
        $a->execute([
            "id" => $poste_id
        ]);
        $poste = $a->fetch(PDO::FETCH_OBJ);
        $a->closeCursor();
        return $poste;
    }

}

//fonction qui recupere un user par poste
if (!function_exists("recupereMembreParPoste")) {

    function recupereMembreParPoste($user_id) {
        global $bd;
// on recupere les coordonner du proprietaire du post
        $t = $bd->prepare('SELECT * FROM membres WHERE id=:id');
        $t->execute([
            'id' => $user_id
        ]);
        $poste_user = $t->fetch(PDO::FETCH_OBJ);
        $t->closeCursor();
        return $poste_user;
    }

}
//fonction qui suggere les boutiques selon la provenances de l'utilisateur
if (!function_exists("recupereBoutiqueSuggere")) {

    function recupereBoutiqueSuggere() {
        global $bd;
        $reqBoutique = $bd->prepare('SELECT id, url_photo_couverture, activite_principale, nom_boutique FROM boutiques');
        $reqBoutique->execute();
        $boutiques = $reqBoutique->fetchAll(PDO::FETCH_OBJ);
        $reqBoutique->closeCursor();

        return $boutiques;
    }

}




    