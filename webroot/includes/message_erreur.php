<?php

if (isset($erreurs) && count($erreurs) != 0) {
    echo '<div class="alert alert-danger" role="alert" style="z-index:13; font-weight: bold; font-size: 13px; background-color: #e64b4b; color:#fff">'
    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo '<legend style="font-weight: bold; color:#fff; font-size: 18px; margin-bottom: 0px"><i class="glyphicon glyphicon-alert"></i> Erreur</legend>';
    foreach ($erreurs as $erreur) {
        echo $erreur . '</br>';
    }
    echo '</div>';
}

