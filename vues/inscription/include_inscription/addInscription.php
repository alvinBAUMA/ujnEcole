<!-- BLOCK D'AJOUT -->
<div class="modal fade" id="add-inscription">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="panel panel-default" style="margin-bottom: -20px">
                <div class="modal-header panel-heading">
                    <button  type="button" class="close" data-dismiss="modal">X</button>
                    <h3 class="panel-title text-bold">Nouvelle inscription (Etape 1/3)</h3>
                </div>
                <div class="modal-body">

                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 20px">
                        <img width="100%" src="img/stepRegister/step1.png" alt=""/>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 taille-15 hidden-xs hidden-sm" style="padding-bottom: 10px; text-align: center; margin-top: -50px">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 blanc">
                            <label>1.Info Elève</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris">
                            <label>2.Info Parents</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris">
                            <label>3.Terminez!</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 taille-10 hidden-lg hidden-md" style="padding-bottom: 10px; text-align: center; margin-top: -37px">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 blanc">
                            <label>1.Info Elève</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris">
                            <label>2.Info Parents</label>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gris">
                            <label>3.Terminez!</label>
                        </div>
                    </div>
                    <form method = "POST" action = "" enctype = "multipart/form-data">
                        <table class="table table-bordered table-striped table-hover table-responsive">
                            <tbody>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="code_eleve">Code Elève</label></td>
                                    <td>
                                        <div class="form-group-sm form-inline">
                                            <input style="width: 70%" id="code_eleve" name="code_eleve" class='form-control' required="requireds" placeholder="Saisir le code de l'élève"/>    
                                            <button style="width: 27%" id="genererCodeEleve" class="btn btn-default btn-sm pull-right"><span class="fa fa-random"></span> Générer</button>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="nom_eleve">Nom Elève</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="nom_eleve" name="nom_eleve" class='form-control' required="requireds" placeholder="Entrez le nom d'élève"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="prenom_eleve">Prénom Elève</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="prenom_eleve" name="prenom_eleve" class='form-control' required="requireds" placeholder="Entrez le prénom d'élève"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="postnom_eleve">Post-Nom Elève</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="postnom_eleve" name="postnom_eleve" class='form-control' required="requireds" placeholder="Entrez le post-nom d'élève"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="genre_eleve">Genre Elève</label></td>
                                    <td>
                                        <div class="form-group-sm form-inline">
                                            <select name="genre_eleve" id="genre_eleve" class='form-control text-center input-text pull-right' style="width: 100%">
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>


                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="lieu_naissance">Lieu/date de naissance</label></td>
                                    <td>
                                        <div class="form-group-sm form-inline">
                                            <input type="text" style="width: 45%" id="lieu_naissance" name="lieu_naissance" class='form-control' required="requireds" placeholder="Né à :"/>  le    
                                            <div class="form-horizontal pull-right" style="width: 45%">
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
                                                    <?php for ($i = 2000; $i < 2018; $i++) { ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>


                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="adresse_eleve">Adresse de l'Elève</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input id="adresse_eleve" name="adresse_eleve" class='form-control' required="requireds" placeholder="Quartier, Rue et N° de la maison"/>    
                                        </div>
                                    </td>
                                </tr>

                                <tr class="taille-13">
                                    <td><label style="margin-top: 5px" for="photo_eleve"><span class="fa fa-image"></span> Photo de l'élève</label></td>
                                    <td>
                                        <div class="form-group-sm">
                                            <input type = "file" name = "photo_eleve" id="photo_eleve" class='form-control'>
                                        </div>
                                        <div class="hidden" id="voir-img-uploaded">
                                            <img id="img-upload1" src="" width="50%" class="img-responsive"/>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
                <div class="modal-footer panel-footer">
                    <div class="form-group-sm">
                        <button data-dismiss="modal" data-toggle="modal" href="#second-inscription" class="btn btn-sm btn-primary pull-right"  style="margin-bottom: 5px; color: #fff"><strong>Poursuivre l'inscription</strong></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- FIN BLOCK D'AJOUT-->