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
                    <br/> La meilleure gestion de stock Au Meilleur Prix!
                </h2>
                <legend class="text-center gris">Choisissez le mode d'abonnement qui vous convient le mieux</legend>

                <div class="container-fluid" style="padding: 0px">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding: 5px">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">PREMIUM
                                    <hr style="margin-top: 5px; margin-bottom: 5px"/>
                                    <span>5,99$/mois</span>
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p><span class="glyphicon glyphicon-ok orange"></span> Gestion des entrées</p>
                                <p><span class="glyphicon glyphicon-ok orange"></span> Gestion des sorties</p>
                                <p><span class="glyphicon glyphicon-ok orange"></span> Gestion des fournisseurs</p>
                                <p><span class="glyphicon glyphicon-ok orange"></span> Gestion des clients</p>
                                <p><span class="glyphicon glyphicon-ok orange"></span> Multi-postes</p>
                                <p><span class="fa fa-close rouge"></span> Multi-utilisateurs</p>
                                <p><span class="glyphicon glyphicon-ok orange"></span> Vue historiques</p>
                                <p><span class="fa fa-close rouge"></span> Statistiques des produits</p>
                                <p><span class="fa fa-close rouge"></span> Stocks limités</p>
                                <p><span class="fa fa-close rouge"></span> Catalogues limités</p>
                                <p><span class="glyphicon glyphicon-ok orange"></span> Gestion entrée</p>

                            </div>

                            <div class="panel-footer" style="padding: 5px">
                                <a href="" class="btn btn-md btn-primary btn-block" >VALIDER</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding: 5px">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">BUSINESS
                                    <hr style="margin-top: 5px; margin-bottom: 5px"/>
                                    <span>9,99$/mois</span>
                                </h3>
                            </div>
                            <div class="panel-body">

                            </div>

                            <div class="panel-footer" style="padding: 5px">
                                <a href="" class="btn btn-md btn-warning btn-block" >VALIDER</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding: 5px">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">PROFESSIONNEL
                                    <hr style="margin-top: 5px; margin-bottom: 5px"/>
                                    <span>14,99$/mois</span>
                                </h3>
                            </div>
                            <div class="panel-body">

                            </div>

                            <div class="panel-footer" style="padding: 5px">
                                <a href="" class="btn btn-md btn-danger btn-block" >VALIDER</a>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>
    </div>
</body>
</html>
