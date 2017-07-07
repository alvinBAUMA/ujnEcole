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
                <?php include 'include_evaluation/div_menu_gauche.php'; ?>
            </div>

            <div class="col-md-9 col-lg-9 col-sm-9 col-lg-offset-3 col-md-offset-3 col-sm-offset-3" id='div_content'>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label class="taille-20">Historique des évaluations </label>

                        <div id="all-btn" class="pull-right">
                            <div class="pull-right dropdown">
                                <a href="#" class="btn btn-md btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px">
                                    <span><span class="fa fa-list-ol"></span> Afficher par <span class="caret"></span></span> 
                                </a>
                                <ul class="dropdown-menu" style="font-size: 15px; font-weight: bold">
                                    <li><a class="filtre" href="#" data-filtre="date" data-filtre-id="1">date</a></li>
                                    <li><a class="filtre" href="#" data-filtre="nom" data-filtre-id="1">enseignant</a></li>
                                    <li><a class="filtre" href="#" data-filtre="classe" data-filtre-id="1">classe</a></li>
                                </ul>
                            </div></div>


                    </div>
                    <div class="panel-body" style="padding: 0px">
                        <table class="table table-bordered table-striped table-hover table-responsive">
                            <thead>
                                <tr class="taille-13 orange">
                                    <th>Enseignant</th>
                                    <th>Classe</th>
                                    <th>Matricule</th>
                                    <th>Date évaluation</th>
                                    <th>Cote (/100)</th>
                                    <th>Mention</th>
                                    <th>Observation</th>
                                </tr>
                            </thead>
                            <tbody>



                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td>Blaise PASCAL</td>
                                    <td>2e B</td>
                                    <td>122135</td>
                                    <td>12/04/2017</td>
                                    <td>80</td>
                                    <td>tres bien</td>
                                    <th>l'enseignant se debrouille bien, la classe est propre et nous souhaiterons qu'il mentienne aussi le silence dans la classe....</th>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td>Blaise PASCAL</td>
                                    <td>2e B</td>
                                    <td>122135</td>
                                    <td>12/04/2017</td>
                                    <td>80</td>
                                    <td>tres bien</td>
                                    <td>l'enseignant se debrouille bien, la classe est propre et nous souhaiterons qu'il mentienne aussi le silence dans la classe....</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td>Brigitte KABUO</td>
                                    <td>6e A</td>
                                    <td>442009</td>
                                    <td>06/07/2017</td>
                                    <td>56</td>
                                    <td>Bon</td>
                                    <td>les eleves sont bavard, neamoins le cours se presente bien. l'ensegnatn doit ameliorer son vocabulaire</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td>Blaise PASCAL</td>
                                    <td>2e B</td>
                                    <td>122135</td>
                                    <td>12/04/2017</td>
                                    <td>80</td>
                                    <td>tres bien</td>
                                    <td>l'enseignant se debrouille bien, la classe est propre et nous souhaiterons qu'il mentienne aussi le silence dans la classe....</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td>Brigitte KABUO</td>
                                    <td>6e A</td>
                                    <td>442009</td>
                                    <td>06/07/2017</td>
                                    <td>56</td>
                                    <td>Bon</td>
                                    <td>les eleves sont bavard, neamoins le cours se presente bien. l'ensegnatn doit ameliorer son vocabulaire</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td>Blaise PASCAL</td>
                                    <td>2e B</td>
                                    <td>122135</td>
                                    <td>12/04/2017</td>
                                    <td>80</td>
                                    <td>tres bien</td>
                                    <td>l'enseignant se debrouille bien, la classe est propre et nous souhaiterons qu'il mentienne aussi le silence dans la classe....</td>
                                </tr>
                                
                                <tr data-toggle="modal" href="#detail-inscription" data-inscription-nom='Pascal' data-inscription-id="1" class="taille-13 item-inscription">
                                    <td>Brigitte KABUO</td>
                                    <td>6e A</td>
                                    <td>442009</td>
                                    <td>06/07/2017</td>
                                    <td>56</td>
                                    <td>Bon</td>
                                    <td>les eleves sont bavard, neamoins le cours se presente bien. l'ensegnatn doit ameliorer son vocabulaire</td>
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
