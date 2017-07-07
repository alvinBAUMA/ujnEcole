<!-- BLOCK D'AJOUT D'UN PRODUIT -->
<div class="modal fade" id="add-inscription">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method = "POST" action = "" enctype = "multipart/form-data">
                <div class="panel panel-default" style="margin-bottom: -20px">
                    <div class="modal-header panel-heading" style="background-color: #f04f1b; color: #fff">
                        <button  type="button" class="close" data-dismiss="modal">X</button>
                        <h3 class="panel-title text-bold">Nouvelle inscription</h3>
                    </div>
                    <div class="modal-body">

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
                                            <input id="telephone_parent" name="telephone_tuteur" class='form-control' required="requireds" placeholder="Entrez la numéro de téléphone du tuteur(non obligatoire)"/>    
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


                    </div>
                    <div class="modal-footer panel-footer">
                        <div class="form-group-sm">
                            <button class="btn btn-sm btn-primary pull-right" value="Ajouter l'élève" id="btn-add-produit" style="margin-bottom: 5px; color: #fff"><strong>Ajouter l'élève</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- FIN BLOCK D'AJOUT PRODUIT -->