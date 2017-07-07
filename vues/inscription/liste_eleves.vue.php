<?php include 'includes/head.php'; ?>
</head>
<style>
    body{
        font-family: Verdana, "Verdana CE",  Arial, "Arial CE", "Lucida Grande CE", lucida, "Helvetica CE", sans-serif;
        margin-top: 80px;
        background-color: #e5e4e4
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

    #div_content{
        padding: 20px;
        margin-top: -10px
    }
    .item-inscription:hover{
        cursor: pointer;
    }
</style>

<body>
    <?php require 'includes/menu.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include 'include_inscription/modifierInscription.php'; ?>
            <?php include 'include_inscription/detail_inscription.php'; ?>
            <?php include 'include_inscription/addInscription.php'; ?>



            <div class="col-md-3 col-lg-3 col-sm-3" id='div_gauche'>
                <?php include 'include_inscription/div_menu_gauche.php'; ?>
            </div>

            <div class="col-md-9 col-lg-9 col-sm-9 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" id='div_content'>
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 7px">
                        <strong class="panel-title">Gestion des élèves</strong>
                    </div>

                    <div class="panel-body"  style="padding: 0px">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#liste" data-toggle="tab" style="padding: 10px">
                                    <strong><i class="fa fa-list-alt"></i> Liste des élèves</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#recherche" data-toggle="tab" style="padding: 10px">
                                    <strong><i class="fa fa-search"></i> Recherchez un élève</strong>
                                </a>
                            </li>

                        </ul>

                        <div class="panel-body text-bold taille-16 tab-content" style="padding: 5px; min-height: 450px">
                            <div class="tab-pane active"  id="liste">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                                    <form method="post"  style="padding: 5px" autocomplete="off" id="form-login">
                                        <div class="form-group well-lg form-group-lg">
                                            <div class="form-horizontal">
                                                <h4> Filtre des élèves par classe</h4>
                                                <select name="classe_eleve" id="classe_eleve" class='classe_eleve form-control identifiant text-center input-text' style="margin-bottom: 15px; width: 100%">
                                                    <option value="0">Prémiere Maternelle</option>
                                                    <option value="0">Deuxième Maternelle</option>
                                                    <option value="0">Troisième Maternelle</option>

                                                    <option value="0">Prémiere Primaire</option>
                                                    <option value="0">Deuxième Primaire</option>
                                                    <option value="0">Troisième Primaire</option>
                                                    <option value="0">Quatrième Primaire</option>
                                                    <option value="0">Cinqième Primaire</option>
                                                    <option value="0">Sixième Primaire</option>
                                                </select>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6" style="padding: 0px">
                                                    <input type="submit" class="btn btn-primary taille-18 btn-block" name="filtrer_eleve" value="Filtrez les élèves">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane"  id="recherche">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">
                                    <form method="post"  style="padding: 5px" autocomplete="off" id="form-login">
                                        <div class="form-group well-lg form-group-lg">
                                            <div class="form-horizontal">
                                                <h4> Recherchez un élèves par son nom ou son code</h4>
                                                <input type="text" name="recherhce" id="recherhce" class='form-control identifiant text-center input-text' value="" required="requireds" style="margin-bottom: 15px; width: 100%" placeholder="Faites votre recherche ici"/>    
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6" style="padding: 0px">
                                                    <input type="submit" class="btn btn-primary taille-18 btn-block" name="recherche" value="Recherchez">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $("#type_electeur_filtre").change(function () {
            var $type_electeur = $(this).val();
            if ($type_electeur === "pp") {
                $(".promotion_electeur_filtre").addClass("hidden");
                $(".faculte_electeur_filtre").addClass("hidden");
                $(".departement_electeur_filtre").addClass("hidden");
                $("#filtrer_electeurs").attr("data-action", "pp");
            } else {
                if ($type_electeur === "prefac") {
                    $(".faculte_electeur_filtre").removeClass("hidden");
                    $("#filtrer_electeurs").attr("data-action", "prefac");
                } else {
                    $(".promotion_electeur_filtre").removeClass("hidden");
                    $(".faculte_electeur_filtre").removeClass("hidden");
                    $(".departement_electeur_filtre").removeClass("hidden");
                    $("#filtrer_electeurs").attr("data-action", "cp");
                }
            }

            if ($type_electeur === "prefac") {
                $(".promotion_electeur_filtre").addClass("hidden");
                $(".departement_electeur_filtre").addClass("hidden");
                $("#filtrer_electeurs").attr("data-action", "prefac");
            }
        });

        $("#filtrer_electeurs").click(function (e) {
            e.preventDefault();
            var promotion_id = $("#promotion_electeur_filtre").val(),
                    faculte_id = $("#faculte_electeur_filtre").val(),
                    departement_id = $("#departement_electeur_filtre").val();
            var url = 'ajax/filtreElecteur.php';
            var action = $("#filtrer_electeurs").attr("data-action");

            $('#lister').html('<div class="bleu-vert text-center loaded-effet" style="margin-top: 50px"><i class="fa fa-spin fa-3x fa-spinner"></i><br/><label>Chargement des candidats en cours...</label></div>');
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    promotion_id: promotion_id,
                    faculte_id: faculte_id,
                    departement_id: departement_id,
                    action: action
                },
                success: function (reponse) {
                    $('#lister').html(reponse);
                }
            });

        });

        $("#faculte_etudiant_filtre").change(function () {
            var $id = $(this).val();
            var param = 'id=' + $id;
            $('.loadedAjax').html('<div class="bleu-vert text-center" style="margin-top: 30px"><i class="fa fa-spin fa-2x fa-spinner"></i><br/><label>Chargement des départements</label></div>');
            $('.loadedAjax').load('ajax/loadDepartement.php', param);

        });
    </script>

</body>
</html>































