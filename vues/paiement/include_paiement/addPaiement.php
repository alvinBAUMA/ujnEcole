<!-- BLOCK D'AJOUT D'UN PRODUIT -->
<div class="modal fade" id="add-paiement">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method = "POST" action = "" enctype = "multipart/form-data">
                <div class="panel panel-default" style="margin-bottom: -20px">
                    <div class="modal-header panel-heading">
                        <button  type="button" class="close" data-dismiss="modal">X</button>
                        <h3 class="panel-title text-bold">Enregistrez le paiement</h3>
                    </div>
                    <div class="modal-body">

                        <div class="modal-body">
                            <div class="form-group-lg">
                                <label>Choisir la classe</label>
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
                            </div>

                            <div class="form-group-lg">
                                <label>Choisir l'éleve</label>
                                <select name="genre_eleve" id="genre_eleve" class='form-control' style="width: 100%">
                                    <option value="homme">Alvin bauyma</option>
                                    <option value="femme">pascal koko</option>
                                </select>
                            </div>

                            <div style="margin-top: 20px" class="form-group-lg">
                                <label>Type de frais</label><br/>

                                <div class="form-inline">
                                    <select style="width: 50%"  name="frais" id="cours" class='form-control'>
                                        <option class="scolaire">Frais scolaire</option>
                                        <option value="restauration">Restauration</option>
                                        <option value="transport">Transport</option>
                                    </select>
                                    <input style="width: 50%" id="montant" name="montant" class='form-control pull-right' required="requireds" placeholder="Entrez le montant ($)"/>    
                                </div>
                            </div>      

                        </div>


                    </div>
                    <div class="modal-footer panel-footer">
                        <div class="form-group-sm">
                            <button class="btn btn-sm btn-primary pull-right" value="Valider" id="btn-add-cote" style="margin-bottom: 5px; color: #fff"><strong>Valider</strong></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    
</script>
<!-- FIN BLOCK D'AJOUT PRODUIT -->