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
            <?php include 'include_classe/addCote.php'; ?>

            <div class="col-md-3 col-lg-3 col-sm-3" id='div_gauche'>
                <?php include 'include_classe/div_menu_gauche.php'; ?>
                
            </div>

            <div class="col-md-9 col-lg-9 col-sm-9 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" id='div_content'>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="taille-20">Cotes des éleves </label>

                        <div id="all-btn" class="pull-right">
                            <div class="pull-right dropdown">
                                <a href="#" class="btn btn-md btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px">
                                    <span><span class="fa fa-list-ol"></span> Filtrer par <span class="caret"></span></span> 
                                </a>
                                <ul class="dropdown-menu" style="font-size: 15px; font-weight: bold">
                                    <li><a class="filtre" href="#" data-filtre="date" data-filtre-id="1">cours</a></li>
                                    <li><a class="filtre" href="#" data-filtre="nom" data-filtre-id="1">éleve</a></li>

                                </ul>
                            </div>
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
                                    <th>Cours</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>



                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>Mathématique</td>
                                    <td>129/160</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>Francais</td>
                                    <td>129/160</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>Histoire</td>
                                    <td>12/40</td>
                                </tr>
                                
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td style="padding: 0px; width: 50px"><img src="img/imgApp/placeholder.png" width="50px" height="50px" class="img-responsive" alt=""/></td>
                                    <td>Pascal</td>
                                    <td>KOKO</td>
                                    <td>Alvin</td>
                                    <td>5e B</td>
                                    <td>Calcul</td>
                                    <td>30/60</td>
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

    </script>
</body>
</html>
