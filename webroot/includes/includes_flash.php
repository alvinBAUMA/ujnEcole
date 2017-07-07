<?php
// ce fichier nous perme d'afficher les messages flash où il sera inclu avec la fonction msg_flash
if (isset($_SESSION['notification']['message'])):
    ?>
    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-2" style="z-index:9; position: fixed; padding: 0px; bottom: 5px; left: 0px; min-height: 80px">
        <div class="alert alert-<?= $_SESSION['notification']['type'] ?>" style="padding: 10px; position: relative; text-align: center; margin-top: 0px; margin-bottom: 4px; background-color: #0ba2de; color: #fff; min-height: 60px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 10px; margin-top: 5px">&times;</button>
            <h4 style="font-family: arial"><?= $_SESSION['notification']['message'] ?></h4>
        </div>  
    </div>

    <?php
// on vide directement la session apres avoir afficher le msg flash
    $_SESSION['notification'] = [];

endif;
?>
    

