
<!-- BLOCK D'AJOUT -->
<div class="modal fade" id="second-inscription">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method = "POST" action = "" enctype = "multipart/form-data">
                <div class="panel panel-default" style="margin-bottom: -20px">
                    <div class="modal-header panel-heading">
                        <button  type="button" class="close" data-dismiss="modal">X</button>
                        <h3 class="panel-title text-bold">Nouvelle inscription (Etape 2/3)</h3>
                    </div>
                    <div class="modal-body">

                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px">
                            <img width="100%" src="img/stepRegister/step2.png" alt=""/>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 taille-15 hidden-xs hidden-sm" style="padding-bottom: 10px; text-align: center; margin-top: -50px">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris ">
                                <label><i class="glyphicon glyphicon-ok"></i> 1.Info Elève</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 blanc">
                                <label>2.Info Parents</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris">
                                <label>3.Terminez!</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 taille-10 hidden-lg hidden-md" style="padding-bottom: 10px; text-align: center; margin-top: -37px">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris ">
                                <label>1.Info Elève</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 blanc">
                                <label>2.Info Parents</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris">
                                <label>3.Terminez!</label>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-hover table-responsive">
                            <tbody>
                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="nom_pere">Noms du Père</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="nom_pere" name="nom_pere" class='form-control' required="requireds" placeholder="Entrez le nom du Père"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="nom_mere">Noms de la Mère</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="nom_mere" name="nom_mere" class='form-control' required="requireds" placeholder="Entrez le nom de la Mère"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="profession_pere">Profession du Père</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="profession_pere" name="profession_pere" class='form-control' required="requireds" placeholder="Entrez la profession du Père"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="profession_mere">Profession de la Mère</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="profession_mere" name="profession_mere" class='form-control' required="requireds" placeholder="Entrez la profession de la Mère"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="telephone_parent">N° de tél du parent</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="telephone_parent" name="telephone_parent" class='form-control' required="requireds" placeholder="Entrez la numéro de téléphone d'un des des parents de l'eleve"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="tuteur">Tuteur</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="tuteur" name="tuteur" class='form-control' required="requireds" placeholder="Entrez le nom du tuteur(non obligatoire)"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="telephone_tuteur">N° de tél du tuteur</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="telephone_tuteur" name="telephone_tuteur" class='form-control' required="requireds" placeholder="Entrez la numéro de téléphone du tuteur(non obligatoire)"/>    
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                    <div class="modal-footer panel-footer">
                        <div class="form-group-sm">
                            <button data-dismiss="modal" data-toggle="modal" href="#fin-inscription" class="btn btn-sm btn-primary pull-right" value="Poursuivre l'inscription" style="margin-bottom: 5px; color: #fff"><strong>Valider et continuer</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN BLOCK D'AJOUT-->







