<?php include 'includes/head.php'; ?>
</head>
<style>
    body{
        font-family: Verdana, "Verdana CE",  Arial, "Arial CE", "Lucida Grande CE", lucida, "Helvetica CE", sans-serif;
        margin-top: 80px;
        background-color: #f8f7f6
    }

    #div_gauche{
        position: fixed;
        top: 60px;
        padding: 0px;
        left: 0px;
        bottom: 0px;
        background-color: #fff;
        overflow: auto
    }

    #div-centre{
        padding: 0px
    }

    #photo1:hover {background-color:#7a7173; border-radius: 6px}
    #photo1 {background-color: #e3ddd9}
    .btn-choix-photo{width: 100%; height: 100px; overflow: hidden; margin-top: -100px; opacity: 0}
</style>

<body>
    <?php require 'includes/menu.php'; ?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 col-lg-3 col-sm-3" id='div_gauche'>
                <?php include 'includes/div_menu_gauche.php'; ?>
            </div>


            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4" id="div-centre">

                <h2 class="text-center orange">
                    <span class="fa fa-cloud-upload fa-3x"></span>
                    <br/> Créez votre boutique
                </h2>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title bleu">
                            <span class="fa fa-plus-circle"></span>
                            Nouvelle boutique</h4>
                    </div>

                    <div class="panel-body">
                        <form method="post"  style="padding: 5px" autocomplete="off" enctype = "multipart/form-data" id="form-addstore">
                            <div class="form-group well-lg form-group-md">
                                <div class="form-horizontal">
                                    <legend>Informations générale sur votre boutique</legend>
                                    <input type="text" name="nom_boutique" id="nom" class='form-control identifiant text-center input-text' value="" style="margin-bottom: 15px; width: 100%" placeholder="nom de la boutique *"/>    
                                    <input type="text" name="adresse_boutique" id="telephone" class='form-control identifiant text-center input-text' value="" style="margin-bottom: 15px; width: 100%" placeholder="Adresse de la boutique *"/>    

                                    <legend>Autres informations (Facultatives)</legend>
                                    <input type="text" name="id_nationnal" id="nom" class='form-control identifiant text-center input-text' value="" style="margin-bottom: 15px; width: 100%" placeholder="Numéro d'identifiaction nationnalle"/>    
                                    <input type="text" name="rccm" id="telephone" class='form-control identifiant text-center input-text' value="" style="margin-bottom: 15px; width: 100%" placeholder="Votre RCCM"/>    

                                    <legend>Type d'abonnment</legend>


                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-3 text-center" style="padding: 5px;">
                                        <label id="progress_evolution1">ajoutez une photo de couverture</label><br/>
                                        <div id="photo1" class="active_photo text-center">
                                            <img class="thumbnail img-responsive hidden" width="80%" src="" style="margin-left: 10%; margin-bottom: -5px" alt="photo"/>
                                            <i class="fa fa-user fa-5x"></i>
                                            <button class="btn btn-block btn-xs btn-rouge bc-rouge blanc" id="btn1"><strong>Choisir le fichier</strong></button>
                                            <input type="file" class="btn btn-default center-block btn-group-xs btn-choix-photo" id="photo_boutique" name="photo_boutique" accept="image/*"/>
                                        </div>
                                        <div class="progress progress-striped active hidden" id="bar1" style="height: 22px; margin-top: -22px; z-index: 1; position: relative">
                                            <div class="progress-bar" id="progress_bar1" style="width: 0%"></div>
                                        </div>
                                        <label id="resultat1"></label>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3" style="padding: 0px">
                                        <input type="submit" class="btn btn-primary taille-18 btn-block" name="creer_boutique" value="Créer boutique">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
