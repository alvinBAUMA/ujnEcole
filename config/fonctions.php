<?php












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



    