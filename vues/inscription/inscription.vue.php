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
                    <div class="panel-heading">
                        <label class="taille-20">Historique des inscriptions (21345)</label>

                        <div id="all-btn" class="pull-right">
                            <button data-toggle="modal" href="#add-inscription" class="btn btn-md btn-primary pull-right" style="margin-left: 10px"><span class="fa fa-plus-circle"></span> Nouvelle inscription </button>
                            <button id="show-recherche-inscription" href="#recherche-inscription" class="btn btn-md btn-default pull-right" style="margin-left: 10px"><span class="fa fa-search"></span> Rechercher</button>
                            <div class="pull-right dropdown">
                                <a href="#" class="btn btn-md btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px">
                                    <span><span class="fa fa-list-ol"></span> Filtrer par <span class="caret"></span></span> 
                                </a>
                                <ul class="dropdown-menu" style="font-size: 15px; font-weight: bold">
                                    <li><a class="filtre" href="#" data-filtre="date" data-filtre-id="1">la date</a></li>
                                    <li><a class="filtre" href="#" data-filtre="nom" data-filtre-id="1">le nom</a></li>
                                    <li><a class="filtre" href="#" data-filtre="classe" data-filtre-id="1">la classe</a></li>

                                </ul>
                            </div>
                        </div>

                        <div id="recherche-inscription-form" class="pull-right hidden">
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="password" style="width: 250px" class="form-control" name="inputRechercheInscription"id="inputRechercheInscription" placeholder="Recherche par nom ou classe">
                                </div>
                                <button type="submit" name="rechercherInscription" class="btn btn-primary" value="Recherchez"><span class="fa fa-search"></span> Rechercher</button>
                                <button id="closeRechercheInscription" class="btn btn-danger">X</button>
                            </form>
                        </div>
                    </div>
                    <div class="panel-body" style="padding: 0px">
                        <table class="table table-bordered table-striped table-hover table-responsive">
                            <thead>
                                <tr class="taille-13 orange">
                                    <th>Img</th>
                                    <th>Nom</th>
                                    <th>Post-Nom</th>
                                    <th>Prénom</th>
                                    <th>Classe</th>
                                    <th>date d'inscrition</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>le 10/01/2019</td>
                                    <td  class="taille-25">
                                        <a class="action_modifier_categorie"><span class="fa fa-pencil text-success"></span></a>
                                        <a href="#" class="pull-right" ><span class="fa fa-trash-o rouge" style="margin-right: 10px"></span></a> 
                                    </td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="3" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>le 10/01/2019</td>
                                    <td  class="taille-25">
                                        <a class="action_modifier_categorie"><span class="fa fa-pencil text-success"></span></a>
                                        <a href="#" class="pull-right" ><span class="fa fa-trash-o rouge" style="margin-right: 10px"></span></a> 
                                    </td>
                                </tr>

                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="2" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>le 10/01/2019</td>
                                    <td  class="taille-25">
                                        <a class="action_modifier_categorie"><span class="fa fa-pencil text-success"></span></a>
                                        <a href="#" class="pull-right" ><span class="fa fa-trash-o rouge" style="margin-right: 10px"></span></a> 
                                    </td>
                                </tr>

                            </tbody>
                        </table>


                        <nav class="text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="#page4" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li><a href="#page">1</a></li>
                                <li><a href="#page1">2</a></li>
                                <li><a href="#page2">3</a></li>
                                <li><a href="#page3">4</a></li>
                                <li><a href="#page4">5</a></li>
                                <li>
                                    <a href="#page1" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        //Load detail categorie
        $(".item-inscription").click(function () {
            var nom = $(this).attr("data-inscription-nom");
            var param = 'id=' + $(this).attr("data-inscription-id");
            $("#titre-detail-inscription").html("Détail " + nom);
            $('#laod-detail-inscription').load('ajax/inscription/detail_inscription.php', param);
        });
        
        //Load form modier produit par produit
        $(".action_modifier_inscription").click(function () {
            var id = $(this).attr("data-inscription-id");
            var param = 'id=' + $(this).attr("data-inscription-id");
            $("#titre-modifier-inscription").html("Modifiez les informations" + id);
            $('#laod-form-content').load('ajax/inscription/form_modif_inscription.php', param);
        });

        //Fermer et montrer le formulaire de recherche de categorie
        $("#show-recherche-inscription").click(function () {
            $("#all-btn").addClass("hidden");
            $("#recherche-inscription-form").removeClass("hidden");
        });

        $("#closeRechercheInscription").click(function (e) {
            e.preventDefault();
            $("#recherche-inscription-form").addClass("hidden");
            $("#all-btn").removeClass("hidden");
        });

        //Afficher la photo choisi pour l'ajout de produit
        function _(elmt) {
            return document.getElementById(elmt);
        }
        $("#photo_eleve").change(function () {
            $("#voir-img-uploaded").removeClass("hidden");
            var file1 = _("photo_eleve").files[0],
                    $image_preview = $("#voir-img-uploaded");
            //on affiche l'image avant de la charger
            $image_preview.find("#img-upload1").attr("src", window.URL.createObjectURL(file1));
        });

    </script>
</body>
</html>

