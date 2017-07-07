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


            <div class="col-md-3 col-lg-3 col-sm-3" id='div_gauche'>
                <?php include 'include_classe/div_menu_gauche.php'; ?>
            </div>

            <div class="col-md-9 col-lg-9 col-sm-9 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" id='div_content'>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="taille-20">Listes de présence (Aujourd'hui) </label>

                        <div id="all-btn" class="pull-right">
                            <button id="show-choix-date-presence" class="btn btn-md btn-default pull-right" style="margin-left: 10px"><span class="fa fa-search"></span> Choisir une date</button>
                        </div>

                        <div id="choix-date-presence" class="pull-right hidden">
                            <form class="form-inline">
                                <div class="form-group">
                                    <div class="form-horizontal pull-right" style="width: 200px">
                                        <select   name="devise_achat" id="devise_achat" class='text-center input-text' style="width: 30%; height: 30px">
                                            <?php for ($i = 1; $i < 32; $i++) { ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                        <select  name="devise_achat" id="devise_achat" class='text-center input-text' style="width: 30%; height: 30px">
                                            <?php for ($i = 1; $i < 13; $i++) { ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                        <select  name="devise_achat" id="devise_achat" class='text-center input-text' style="width: 30%; height: 30px">
                                            <?php for ($i = 2017; $i < 2019; $i++) { ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" name="choisirDatePresence" class="btn btn-primary" value="Valider"><span class="glyphicon glyphicon-ok"></span> Valider</button>
                                <button id="close-choix-date-presence" class="btn btn-danger">X</button>
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
                                    <th>Observation</th>
                                </tr>
                            </thead>
                            <tbody>



                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>Présent</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>Présent</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Lina</td>
                                    <td>Rose</td>
                                    <td>Kab</td>
                                    <td>5e B</td>
                                    <td>Présent</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>DIDI</td>
                                    <td>YUTI</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>Absent</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Daniel</td>
                                    <td>Rub</td>
                                    <td>Dany</td>
                                    <td>5e B</td>
                                    <td>Présent</td>
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
        

        //Fermer et montrer le formulaire de recherche de categorie
        $("#show-choix-date-presence").click(function () {
            $("#all-btn").addClass("hidden");
            $("#choix-date-presence").removeClass("hidden");
        });

        $("#close-choix-date-presence").click(function (e) {
            e.preventDefault();
            $("#choix-date-presence").addClass("hidden");
            $("#all-btn").removeClass("hidden");
        });

        

    </script>
</body>
</html>

